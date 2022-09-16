<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = $_POST["v1"];
    $num2 = $_POST["v2"];
    $soma = $num1 + $num2;
    
        if($soma <= 10){
            echo $soma;
            echo " - 5 = ";
            $soma =$soma-5;
            echo $soma;

        }else{
            echo $soma;
            echo " + 8 = ";
            $soma =$soma+9;
            echo $soma;
        }
    
    
    ?>

</body>
</html>