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
    <div class="form-container">
        <div class="personal-information">
            <h1>Payment Information</h1>
        </div> <!-- end of personal-information -->

        <input id="column-left" type="text" name="first-name" placeholder="First Name" />
        <input id="column-right" type="text" name="last-name" placeholder="Surname" />
        <input id="input-field" type="text" name="number" placeholder="Card Number" />
        <input id="column-left" type="text" name="expiry" placeholder="MM / YY" />
        <input id="column-right" type="text" name="cvc" placeholder="CCV" />

        <div class="card-wrapper"></div>

        <input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Streed Address" />
        <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City" />
        <input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code" />
        <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email" />
        <input id="input-button" type="submit" value="Submit" />


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