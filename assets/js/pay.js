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
        alert("Su token es " + token_id);
        $('#token_id').val(token_id);
        // $('#payment-form').submit();

        var data = $("#payment-form").serializeArray();

        console.log(data);

        $.ajax({
            type: 'POST', //aqui puede ser igual get
            url: 'controller/PaymentController.php', //aqui va tu direccion donde esta tu funcion php
            data: data, //aqui tus datos
            success: function(data) {
                console.log(data);
                //lo que devuelve tu archivo PaymentController.php
                alert("cool");
            },
            error: function(data) {
                console.log(data);
                //lo que devuelve si falla tu archivo PaymentController.php
                alert("bad");
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