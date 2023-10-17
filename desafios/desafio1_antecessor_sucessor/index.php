<?php

if (!empty($_REQUEST)) {
    $num = $_REQUEST["num"];
    $num = intval($num);
    $num1 = $num - 1;
    $num2 = $num + 1;
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor e Sucessor</title>
</head>

<body>
    <section>
        <p>
            <?php
            echo "O número que você digitou é: $num";
            ?>
        </p>
        <p>
            <?php
            echo "O que vem depois é: $num2";
            ?>
        </p>
        <p>
            <?php
            echo "O que vem antes é: $num1";
            ?>
        </p>
    </section>
    <button ><a href="javascript:history.go(-1)">Voltar</a></button>
</body>

</html>