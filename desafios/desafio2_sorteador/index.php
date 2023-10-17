<?php

if (!empty($_REQUEST)) {
    $num1 = $_REQUEST["num1"];
    $num1 = intval($num1);
    $num2 = $_REQUEST["num2"];
    $num2 = intval($num2);
    $num = rand($num1, $num2);
    $num = round($num);

    
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
            echo "o numero sorteado foi...   <b>$num</b>"
            ?>
        </p>
    </section>
    <button ><a href="javascript:history.go(-1)">Voltar</a></button>
</body>

</html>