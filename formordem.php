<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario </title>
    <link rel="stylesheet" href= "externo.css">
</head>
<body>
    <div class = "form">
    <h1>Digite 3 numeros inteiros</h1>
    <form action="ordem.php" method="POST">
        Numero 01: <input type="numeber" name= "v1">
        <P></P>
        Numero 02: <input type="numeber" name= "v2">
        <P></P>
        Numero 03: <input type="numeber" name= "v3">
        <p></p>
        <input type="submit" value="Enviar Dados">
    </form>
    </div>
</body>
</html>