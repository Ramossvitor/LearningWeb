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
        $idade = 30;
        $peso = 73.5;
        if($idade >= 16 AND $idade <= 69 AND $peso >= 50) {
            echo "Você com $idade anos e $peso kg, pode doar sangue tranquilamente!";
        } else {
            echo 'Infelizmente você não pode doar sangue';
        }
    ?>
</body>
</html>