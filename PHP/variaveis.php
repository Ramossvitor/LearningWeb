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
        //String
        $nome = 'Vitor Ramos';
        //Int;=
        $idade = 15;
        //Float
        $peso = 85.6;
        //Boolean
        $fuma = false; // (true = 1) (false = vázio)


    ?>
    <h1>Ficha de cadastro</h1>
    <p>Nome: <?php echo $nome ?></p>
    <p>Idade: <?php echo $idade ?></p>
    <p>Peso: <?php echo $peso ?></p>
    <p>Fumante: <?php echo $fuma ?></p>
</body>
</html>