<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style2.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
    <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>
</head>

<body>
</body>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h6 class="text-center">Pago con Codi</h6>
            <br><br>
            <form action="#" id="payment-form-codi">
                <input type="submit" value="Generar codigo" id="pay-button-codi">
            </form>
            <br><br>
            <p>Codigo QR para pago</p>
            <img id="imgElem"></img>
            <br>
            <a class="btn btn-danger btn-block" id="link2" target="_blank" style="display: none;">Pagar</a>
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-5">
            <div>
                <h2>Detalles de la transacción</h2>
                <h6>Status transacción <span id="status" class="text-danger"></span> </h6>
                <br>
                <br>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Campo</th scope="col">
                            <th scope="col">Valor</th scope="col">
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Id transacción</th>
                            <th scope="row" id="idtransaccion"></th>
                        </tr>

                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <button class="btn btn-secondary" onclick="myFunction()">Revisar estado</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/pay.js"></script>
<script type="text/javascript" src="assets/js/transaccion.js"></script>

</html>