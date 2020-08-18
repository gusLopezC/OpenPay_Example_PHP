  
<?php

require_once "../controller/PaymentController.php";

$datos = array(

);


$objCargo = new Cargo();

$resp = $objCargo->crearCargoCodi($datos);
   var_dump($resp);
// $myJSON = json_encode($resp);
// echo $myJSON;
?>
