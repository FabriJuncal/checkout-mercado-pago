<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken("TEST-3566230077754908-071823-49c8f8f8a6317745a07c283bf999e56a-611853972");

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->id = "1234";
$item->title = "Heavy Duty Plastic Table";
$item->description = "Table is made of heavy duty white plastic and is 96 inches wide and 29 inches tall";
$item->category_id = "home";
$item->quantity = 7;
$item->currency_id = "ARS";
$item->unit_price = 75.56;

// Crea un ítem en la preferencia
$item2 = new MercadoPago\Item();
$item2->id = "1234";
$item2->title = "celular";
$item2->description = "celular samsung";
$item2->category_id = "home";
$item2->quantity = 2;
$item2->currency_id = "ARS";
$item2->unit_price = 99.9;

$preference->items = array($item, $item2);

// Redireccion dependiendo del estado del pago
$preference->back_urls = array(
    "success" => "http://localhost/checkout-mercado-pago/pago-finalizado.php",
    "failure" => "http://localhost/checkout-mercado-pago/pago-finalizado.php",
    "pending" => "http://localhost/checkout-mercado-pago/pago-finalizado.php"
);
$preference->auto_return = "approved";
$preference->save();
?>

<form action="" method="POST">
    <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js" data-header-color="#e300df" data-elements-color="#00e32e" data-button-label="Comprar" data-preference-id="<?php echo $preference->id; ?>">
    </script>

    <br>

    <a href="<?php echo $preference->init_point; ?>">Pagar con Mercado Pago (Redirect)</a>
</form>