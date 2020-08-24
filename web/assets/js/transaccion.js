$(document).ready(function() {

    /*
    var promesa = new Promise(function(resolve, reject) {

        setTimeout(function() {

            resolve(5);

        }, 2000);
    })
    promesa.then(function(resultado) {

        console.log(resultado);

    })
    */


});

function myFunction() {
    var id = $('#idtransaccion').text();
    console.log(id)
    var settings = {
        "url": "https://sandbox-api.openpay.mx/v1/mdrhnprmsmxkgxtegzhk/charges/trepauh5p4p1t3mgdpej", // + id,
        "method": "GET",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json",
            "Authorization": "Basic c2tfYzcxYmFiZDg2NWZkNDIwYjk0YmM1ODhhODU4NWMxMjI6"
        },
    };

    $.ajax(settings).done(function(response) {
        console.log(response.status);

        if (response.status = "completed") {
            console.log("Pago finalizado");

            var span = document.getElementById("status");
            span.textContent = "Pago finalizado";

            var element = document.getElementById("status");
            element.classList.add("text-success");

        } else {
            console.log("Pago fallido vuelva a intentar en 1 minuto");
            alert("Pago fallido vuelva a intentar en 1 minuto");
        }
    });
}