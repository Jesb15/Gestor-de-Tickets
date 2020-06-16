<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php require "./header.php"?>
<h1>Iniciar Sesion</h1>
    <form action="login.php" method="post">
    <input type="text" name="email" placeholder="Ingrese su correo electronico">  
    <input type="password" name="password" placeholder="Ingrese su contraseña">
    <input type="submit" value="send">
    </form>
</body>
</html>