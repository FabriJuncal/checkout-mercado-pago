<?php
$collection_status = $_GET['collection_status'];



$estado = ($collection_status == "approved" ? "Aprobado" : 
            ($collection_status == "in_process" ? "En Proceso" : 
            ($collection_status == "pending" ? "Pendiente" : 
            ($collection_status == "rejected" ? "Rechazado" : null))));

if($collection_status == "approved"){
    $mensaje = "¡Listo! Se acreditó tu pago";

}else if($collection_status == "in_process"){
    $mensaje = "No te preocupes, en menos de 2 días hábiles te avisaremos por e-mail si se acreditó.";

}else if($collection_status == "pending") {
    $mensaje = "No se termino de concretar el pago";
    
}else{
    $mensaje = "No pudimos procesar tu pago.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" pending="width=device-width, initial-scale=1.0">
    <title>Resultado de Pago</title>
</head>

<body>
    <h1>Estado:<?=$estado?></h1>
    <br>
    <h3><?=$mensaje?></h3>

</body>

</html>







<!-- 
// estado=success
// collection_id=28174740
// collection_status=approved
// external_reference=null
// payment_type=credit_card
// merchant_order_id=1612045571
// preference_id=611853972-4f0b9e0b-53d8-496f-88e5-faba2b4f716e
// site_id=MLA
// processing_mode=aggregator
// merchant_account_id=null
 -->