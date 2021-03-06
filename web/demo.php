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
        <div class="col-sm-8">
            <div class="form-container">
                <div class="personal-information">
                    <h1>Payment Information</h1>
                </div> <!-- end of personal-information -->
                <form action="#" id="payment-form">
                    <input type="hidden" name="token_id" id="token_id">
                    <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                    <input id="input-field" type="text" placeholder="Name Complet" autocomplete="off" name="name" required data-openpay-card="holder_name" />

                    <input id="input-field" type="text" data-openpay-card="card_number" placeholder="Card Number" value="4242424242424242" />
                    <input id="column-left" style="width: 24%; margin-right: 5px;" type="text" name="expiry month" placeholder="MM" data-openpay-card="expiration_month" value="02" />
                    <input id="column-left" style="width: 24%;" type="text" name="expiry year" placeholder="YY" data-openpay-card="expiration_year" value="21" />
                    <input id="column-right" type="text" name="cvc" placeholder="CCV" data-openpay-card="cvv2" value="102" />

                    <div class="card-wrapper"></div>

                    <input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Streed Address" />
                    <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City" />
                    <input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code" />
                    <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email" />
                    <input type="submit" id="pay-button" value="Submit" />

                </form>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="https://ss628.liverpool.com.mx/xl/1097268092.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Laptop Dell Inspiron <strong>$11,969</strong></h4>
                    <p class="card-text"> Modelo 3000 de 15.6.</p>
                    <a href="#" class="btn btn-primary">Ver más ...</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div id="myDIV" style="border:1px solid black; display:none;">
                <div class="card" style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title">Pago exitoso</h5>
                        <div id="content"></div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script type="text/javascript" src="assets/js/pay.js"></script>

</html>