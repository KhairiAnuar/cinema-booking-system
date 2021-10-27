var stripe = Stripe('pk_test_6pRNASCoBOKtIshFeQd4XMUh');
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: "#32325d",
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

console.log(card);

new Vue({
    el: "#checkout",
    data: {
        data: null,
        cart: null,
    },
    methods: {
        submit () {
            var theThis = this;
            
            if (!card._complete) {
                return;
            }
            for (var i = 0; i < this.cart.length; i++) {
                var allocatedSeats = [];
                var item = this.cart[i];
                var session = this.data.sessions.find(ses => ses.id === item.session.id);
                if (item.ticketOptions.seats.length === 0) {
                    for (var j = 0; j < item.ticketOptions.quantity; j++) {
                        var seat = session.availableSeat[0];
                        session.bookedSeat.push(seat);
                        session.availableSeat.splice(session.availableSeat.indexOf(seat), 1);
                        allocatedSeats.push(seat);
                    }
                }
                else {
                    for (var j = 0; j < item.ticketOptions.seats.length; j++) {
                        var seat = item.ticketOptions.seats[j];
                        session.bookedSeat.push(seat);
                        session.availableSeat.splice(session.availableSeat.indexOf(seat), 1);
                        allocatedSeats.push(seat);
                    }
                }
                this.cart[i].allocatedSeats = allocatedSeats;
            }
            $.ajax({
                type    : 'POST',
                dataType: 'json',
                url     : 'fileHandler.php',
                data    : { result:JSON.stringify({ 
                    'action':'finalizeCart', 
                    'json': JSON.stringify(this.data)
                }) },
                success : function(response) {
                    theThis.onSuccessSubmit(theThis.cart);
                    console.log(response);
                }    
            });
        },
        onSuccessSubmit(cart) {
            sessionStorage.setItem("receipt", JSON.stringify(cart));
            sessionStorage.removeItem("cart");
            window.location.href = window.location.href.replace("checkout", "receipt");
        }
    },
    computed: {
      total () {
          var total = 0;
          if (this.cart === null) return 0;
          for (var i = 0; i < this.cart.length; i++) {
              total += (this.cart[i].ticketOptions.unitprice * this.cart[i].ticketOptions.quantity);
          }
          return total;
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
    created () {
        var theThis = this;
        this.cart = JSON.parse(sessionStorage.getItem("cart"));
        $.ajax({
            type    : 'POST',
            url     : 'fileHandler.php',
            data    : { result:JSON.stringify({ 'action':'getAll'}) },
            success : function(response) {
                theThis.data = JSON.parse(response);
                
            }    
        });
    }
});