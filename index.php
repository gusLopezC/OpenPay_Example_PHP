<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
    <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>
</head>

<body>
    
</body>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <form action="#" id="payment-form">
                <input type="hidden" name="token_id" id="token_id">
                <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                <div class="pymnt-itm card active">
                    <h2>Tarjeta de crédito o débito</h2>
                    <div class="pymnt-cntnt">
                        <div class="card-expl">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="credit">
                                        <h4>Tarjetas de crédito</h4>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="debit">
                                        <h4>Tarjetas de débito</h4>
                                    </div>
                                </div>
                            </div>
    
    
                        </div>
                        <br>
                        <div class="sctn-row row">
                            <div class="sctn-col l">
                                <label>Nombre del titular</label>
                                <input type="text" placeholder="Como aparece en la tarjeta"
                                    autocomplete="off" name="name" required data-openpay-card="holder_name">
                            </div>
                            <div class="sctn-col">
                                <label>Número de tarjeta</label>
                                <input type="text" autocomplete="off" required
                                    data-openpay-card="card_number"></div>
                        </div>
                        <div class="sctn-row row">
                            <div class="sctn-col l">
                                <label>Fecha de expiración</label>
                                <div class="sctn-col half l"><input type="text" placeholder="Mes" required
                                        data-openpay-card="expiration_month"></div>
                                <div class="sctn-col half l"><input type="text" placeholder="Año" required
                                        data-openpay-card="expiration_year"></div>
                            </div>
                            <div class="sctn-col cvv"><label>Código de seguridad</label>
                                <div class="sctn-col half l"><input type="text" placeholder="3 dígitos" required autocomplete="off"
                                        data-openpay-card="cvv2"></div>
                            </div>
                        </div>
                        <div class="openpay row">
                            <div class="logo col-sm-4">Transacciones realizadas vía:</div>
                            <div class="shield">Tus pagos se realizan de forma segura con encriptación de 256 bits</div>
                        </div>
                        <br>
                        <br>
                        <br><br>
    
                        <div class="sctn-row">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="pay-button">Pagar</button>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-2">
        <div style="margin-bottom: 30%;"></div>
        <div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        </div>
    </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>

<script type="text/javascript" src="assets/js/pay.js"></script>

</html>