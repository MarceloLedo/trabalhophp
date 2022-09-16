<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ordem Decrescente!</h1>
    <?php
    $num1 = $_POST["v1"];
    $num2 = $_POST["v2"];
    $num3 = $_POST["v3"];

    $numeros = array ($_POST['v1'], $_POST['v2'], $_POST['v3']);
    arsort($numeros);
    /*echo $numeros;
     */
     
        
        foreach ($numeros as  $valor) {
        echo "$valor \n \n";
            }
?>
    

    
</body>
</html>