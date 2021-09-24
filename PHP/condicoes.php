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

        //Operadores Condicionais
        if(true == false) {
            echo 'Verdade!';
        } else {
            echo 'Mentira! <br>';
        }

        //Operadores Lógicos
        echo '<hr> Operador AND <br>';
        if(5 == 3 AND 10 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        echo '<hr> Operador OR <br>';
        if(5 == 3 OR 10 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        echo '<hr> Operador XOR <br>';
        if(5 > 3 XOR 4 < 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        echo '<hr> Operador "!" <br>';
        if(!(7 > 5)) {
            echo 'Verdadeiro!';
        } else {
            echo 'Falso!';
        }
        //Praticando mais
        echo '<hr> Sistema da loja! <br>';
        $cartaodaloja = true;
        $valor_compra = 330.45;
        $shipping_value = 32.52;
        if($cartaodaloja == true AND $valor_compra >= 200) {
            $shipping_value = 0;
            echo 'Sua compra ultrapassou R$100, por você ter nosso cartão, o frete ficará de graça! <br>';
            echo "Produtos: R$$valor_compra <br> Frete: R$$shipping_value <br> Total: R$$valor_compra";
        } else if($cartaodaloja == true AND $valor_compra >= 100) {
            $shipping_value = 12;
        }
    ?>
</body>
</html>