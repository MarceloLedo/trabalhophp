<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "externo.css">
    <title>Formulario Cadastrar</title>
</head>
<body>
    <div class = "form">
        <h1>Permissão de Cadastro!</h1>
    <form action="cad.php" method="POST">
        Nome Completo: <input type="text" name = "nome">
        <p></p>
        Sexo: <input type="text" name = "sexo">
        <p></p>
        Idade: <input type="number" name = "idade">
        <p></p>
        <input type="submit" value="Enviar Dados">

    </form>
    </div>
</body>
</html>