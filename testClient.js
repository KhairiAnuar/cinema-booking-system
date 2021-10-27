// var a;
// $.ajax({
//     type    : 'POST',
//     url     : 'fileHandler.php',
//     data    : { result:JSON.stringify({ 'action':'getAll'}) },
//     success : function(response) {
//         a = JSON.parse(response);
//         console.log(a);
//         a.sessions[0].bookedSeat.push("1A");
//         $.ajax({
//             type    : 'POST',
//             dataType: 'json',
//             url     : 'fileHandler.php',
//             data    : { result:JSON.stringify({ 
//                 'action':'finalizeCart', 
//                 'json': JSON.stringify(a)
//             }) },
//             success : function(response) {
//                 console.log(response);
//             }    
//         });
//     }    
// });

new Vue({
    el: "#testClient",
    data: {
        mes: "Linh"
    }
});