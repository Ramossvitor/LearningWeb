<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo 'Comando echo <br>'; // Construtor de linguagem
        print 'Comando print <hr>'; // Função (pode ser utilizado entre parenteses também)
        echo print('testando') // Desta forma, além do conteudo que está no print, será exibido 0 ou 1, após a impressão, sendo 0 = erro no codigo e 1 = codigo correto

        // a utilização do comando print é um pouco mais lenta do que o comando echo, porém, só será perceptivel, se utilizado mais de 100mil print's simultaneamente
    ?>
</body>
</html>