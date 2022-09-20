<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "externo.css">
    <title>Cadastro</title>
</head>
<body>
    <div class = "form">
    <h1>Permissão de Cadastro</h1>
    <?php
        $idade = $_POST["idade"];
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];

        if ($idade> 25){
            echo "Nome: \n" . $nome . "<br/>";
            echo "Sexo: \n" . $sexo . "<br/>"; 
            echo "Você pode se cadastrar <br/>";

        }else{
            echo "Nome: \n" . $nome . "<br/>";
            echo "Sexo: \n" . $sexo . "<br/>"; 
            echo "Você não pode se cadastrar!! <br/>";
           
            
        }

    ?>
    </div>
</body>
</html>