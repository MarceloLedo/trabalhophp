<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "externo.css">
    <title>calculo mês</title>
</head>

<body>
<div class = "form">
    <?php
    $num1 = $_POST["n1"];

        switch($num1){
            case 1:
                echo "Mês de Janeiro";
                break;
            case 2:
                echo "Mês de Fevereiro";
                break;
            case 3:
                echo "Mês de Março";
                break;
            case 4:
                echo "Mês de Abril";
                break;
            case 5:
                echo "Mês de Maio";
                break;
            case 6:
                echo "Mês de Junho";
                break;
            case 7:
                echo "Mês de Julho";
                break;
            case 8:
                echo "Mês de Agosto";
                break;
            case 9:
                echo "Mês de Setembro";
                break;
            case 10:
                echo "Mês de Outubro";
                break;
            case 11:
                echo "Mês de Novembro";
                break;
            case 12:
                echo "Mês de Dezembro";
                break;    
            default:
            echo "não existe mês correpsondente a este número!!!";
        }

    ?>
 </div>   
</body>
</html>