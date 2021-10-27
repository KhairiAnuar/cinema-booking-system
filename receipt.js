new Vue({
    el: "#receipt",
    data: {
        mes: "asa",
        oldcart: null
    },
    methods: {
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
        this.oldcart = JSON.parse(sessionStorage.getItem("receipt"));
        console.log(this.oldcart);
    }
});