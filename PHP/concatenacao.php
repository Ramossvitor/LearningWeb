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
        $nome = 'Vitor';
        $cor = 'Azul';
        $idade = 15;
        $atividade_preferida = 'jogar no computador';

        // Operador "."
        echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você tem ' .$idade. ' anos, e que gosta de ' . $atividade_preferida;

        // Aspas duplas
        echo '<br>';

        echo "Olá $nome, vi que sua cor preferida é $cor, também vejo que você tem $idade anos e que gosta muito de $atividade_preferida"
    ?>
</body>
</html>