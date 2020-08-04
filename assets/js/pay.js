$(document).ready(function() {

    OpenPay.setId('mdrhnprmsmxkgxtegzhk');
    OpenPay.setApiKey('pk_72476ae5a41148ee8cd10aceb3998916');
    OpenPay.setSandboxMode(true);
    //Se genera el id de dispositivo
    var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");
    console.log("SessionID  " + deviceSessionId);

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
            headers: {
                //  dataType: 'application/json',
                accepts: {
                    json: 'application/json'
                },
            },
            type: 'POST', //aqui puede ser igual get
            url: 'procesos/crearPago.php', //aqui va tu direccion donde esta tu funcion php
            data: data, //aqui tus datos
            success: function(response) {
                var jsonData = JSON.parse(response);
                console.log(jsonData)

                // user is logged in successfully in the back-end
                // let's redirect
                /* if (response.success == "1") {
                     location.href = 'my_profile.php';
                 } else {
                     alert('Invalid Credentials!');
                 }*/
            },
            error: function(data) {
                console.log(data);
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

});