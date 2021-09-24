<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis PHP</title>
</head>
<body>
    <?php
        // <condição> ? true : false
        $cartaodaloja = true;
        $order_value = 57.90;
        $recebeu_desconto_frete = false;
        $shipping_value = 12;

        if($cartaodaloja == true AND $order_value >= 50) {
            $recebeu_desconto_frete = true;
            $shipping_value = 0;
        } else {
            $recebeu_desconto_frete = false;
            $shipping_value = 12;
        }
    ?>
    <h1>Detalhes do pedido</h1>
    <p>Usuário tem cartão da loja? <?= $cartaodaloja ? 'SIM' : 'NÃO'?></p>
    <p>Valor da compra <?= $order_value ?></p>
    <p>Usuário recebeu desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO' ?></p>
    <p>Valor frete: <?= $shipping_value; ?></p>
    <?php
         $total = $order_value + $shipping_value;
    ?>
    <h2>Total: <?= $total; ?></h2>
</body>
</html>