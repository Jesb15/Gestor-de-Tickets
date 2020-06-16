<?php
try{
    $conn=new PDO("mysql:host=localhost;dbname=php_login_database;","root", "");
}catch (Exception $e){
    die("Connection Fail: ".$e->getMessage());
}
$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $message = 'Successfully created new user';
        } else {
            $message = 'Sorry there must have been an issue creating your account';
        }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <?php require "./header.php" ?>

    <h1>Registro</h1>
    <span>o <a href="login.php">Inicie Sesion</a> </span>
    
    <form action="signup.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su correo electronico">
        <input type="password" name="password" placeholder="Ingrese la contraseña">
        <input type="password" name="confirmpassword" placeholder="Confirme la contraseña">
        <input type="submit" value="Send">
    </form>

</body>
</html>