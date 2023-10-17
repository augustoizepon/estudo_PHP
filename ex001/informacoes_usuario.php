<?php 
    if(!empty($_REQUEST)){
        $nome = $_REQUEST["nome"];
        $sobrenome = $_REQUEST["sobrenome"];
        $altura = $_REQUEST["altura"];
        $peso = $_REQUEST["peso"];
        $peso = floatval($peso);
        $altura = floatval($altura);
        $resultado = "Faltam dados";
        $imc = 0;
        if($peso != 0 && $altura != 0){
            $imc = $peso / pow(($altura/100), 2);
            $imc = number_format($imc, 2);
            if ($imc < 18.5) {
                $resultado = "Abaixo do peso";
            } elseif ($imc >= 18.5 && $imc < 25) {
                $resultado = "Peso normal";
            } elseif ($imc >= 25 && $imc < 30) {
                $resultado = "Sobrepeso";
            } elseif ($imc >= 30 && $imc < 35) {
                $resultado = "Obesidade grau 1";
            } elseif ($imc >= 35 && $imc < 40) {
                $resultado = "Obesidade grau 2";
            } else {
                $resultado = "Obesidade grau 3";
            }
        }


        
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RESULTADO</h1>
    <h2><?php echo $resultado?></h2>
    <p>
        <?php 
           echo "Olá, $nome $sobrenome, seu IMC: $imc <br>";
           echo "O que indica que seu estado atual é de $resultado";
        ?>
    </p>
</body>
</html>