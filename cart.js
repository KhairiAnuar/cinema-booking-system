new Vue({
    el: "#cart",
    data: {
        cart: null,
        selectedSession: null,
        seats: [
            {
                seats: ["A1", "A2", "A3", "A4", "A5"],
            },
            {
                seats: ["B1", "B2", "B3", "B4", "B5"],
            },
            {
                seats: ["C1", "C2", "C3", "C4", "C5"],
            },
            {
                seats: ["D1", "D2", "D3", "D4", "D5"],
            },
            {
                seats: ["E1", "E2", "E3", "E4", "E5"],
            }
        ],
        sessions: []
    },
    methods: {
        isAvailable (seat) {
            var theSession = this.sessions.find(ses => ses.id === this.selectedSession.session.id);
            var found = theSession.bookedSeat.filter(theSeat => theSeat === seat);
            if (found.length > 0) {
                return true;
            }
            return false;
        },
        removeItem (item) {
            var found = this.cart.find(theItem => theItem.session.id === item.id);
            if (found) {
                this.cart.splice(this.cart.indexOf(found), 1);
            }
            sessionStorage.setItem("cart", JSON.stringify(this.cart));
            location.reload();
        },
        toCheckOut () {
            sessionStorage.setItem("cart", JSON.stringify(this.cart));
            var checkoutUrl = window.location.href;
            window.location.href = checkoutUrl.replace("cart", "checkout");
        },
        loadSession () {
            const theThis = this;
            $.ajax({
                type    : 'POST',
                url     : 'fileHandler.php',
                data    : { result:JSON.stringify({ 'action':'getSessions'}) },
                success : function(response) {
                    theThis.sessions = JSON.parse(response);
                }    
            });
        }
    },
    filters: {
        displaySessionTime: function (dateStr) {
            var date = new Date(dateStr);
            var dd = date.getDate();
            var mm = date.getMonth()+1; //January is 0!
            var yyyy = date.getFullYear();
            
            if(dd<10) {
                dd = '0'+dd
            } 
            
            if(mm<10) {
                mm = '0'+mm
            } 
            
            date = dd + '/' + mm + '/' + yyyy +' '+dateStr.split(' ')[4];
            return date;
        }
    },
    computed: {
      selectedSeats () {
          if (this.selectedSession !== null){
            if (this.selectedSession.ticketOptions.seats.length > this.selectedSession.ticketOptions.quantity) {
                this.selectedSession.ticketOptions.seats.splice(0, 1);
            }
            return this.selectedSession.ticketOptions.seats;
          }
          return [];
      },
      total () {
          var total = 0;
          if (this.cart === null) return 0;
          for (var i = 0; i < this.cart.length; i++) {
              total += (this.cart[i].ticketOptions.unitprice * this.cart[i].ticketOptions.quantity);
          }
          return total;
      }
    },
    created () {
        this.cart = JSON.parse(sessionStorage.getItem("cart"));
        this.loadSession();
    }
});