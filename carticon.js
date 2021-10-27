new Vue({
    el: "#cart-icon",
    data: {
        numberOfItem: 0
    },
    methods: {
        
    },
    created () {
        var cart = JSON.parse(sessionStorage.getItem("cart"));
        if (cart !== null) this.numberOfItem = cart.length;
    }
});