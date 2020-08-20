$(document).ready(function() {

    OpenPay.setId('mdrhnprmsmxkgxtegzhk');
    OpenPay.setApiKey('pk_72476ae5a41148ee8cd10aceb3998916');
    OpenPay.setSandboxMode(true);
    //Se genera el id de dispositivo
    var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");
    console.log("SessionID  " + deviceSessionId);
    var x = document.getElementById("myDIV");

    $('#pay-button').on('click', function(event) {

        event.preventDefault();
        $("#pay-button").prop("disabled", true);
        OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);
    });

    var sucess_callbak = function(response) {
        var token_id = response.data.id;
        console.log("Su token es " + token_id);
        $('#token_id').val(token_id);
        // $('#payment-form').submit();

        var data = $("#payment-form").serializeArray();

        console.log(data);

        $.ajax({
            type: 'POST', //aqui puede ser igual get
            url: 'procesos/crearPago.php', //aqui va tu direccion donde esta tu funcion php
            data: data, //aqui tus datos
            success: function(response) {
                //
                var jsonData2 = JSON.parse(response);
                var resp = JSON.parse(jsonData2.charge);
                console.log(jsonData2);
                console.log(resp);

                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }


                document.getElementById('content').innerHTML += '<div>' + resp + ' </div>';


            },
            error: function(data) {
                console.log(JSON.stringify(response));
                console.log("bad");
            }
        });

        $("#pay-button").prop("disabled", false);
    };

    var error_callbak = function(response) {
        var desc = response.data.description != undefined ? response.data.description : response.message;
        alert("ERROR [" + response.status + "] " + desc);
        $("#pay-button").prop("disabled", false);
    };


    /*
     *    PAGO CON CODI    
     *
     */

    $('#pay-button-codi').on('click', function(event) {

        event.preventDefault();
        $("#pay-button-codi").prop("disabled", true);

        var data = $("#payment-form-codi").serializeArray();

        console.log(data);

        $.ajax({
            type: 'POST', //aqui puede ser igual get
            url: 'procesos/crearPagoCodi.php', //aqui va tu direccion donde esta tu funcion php
            data: data, //aqui tus datos
            success: function(response) {
                //
                var respo = JSON.parse(JSON.parse(response));
                console.dir(respo);
                console.log(respo);
                console.log(respo);

            },
            error: function(data) {
                console.log(JSON.stringify(response));
                console.log("bad");
            }
        });

    });

    function bar(func) {
        console.log(func);
    }



});