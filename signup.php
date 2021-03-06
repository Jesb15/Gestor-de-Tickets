<?php
try{
    $conn=new PDO("mysql:host=localhost;dbname=php_login_database;","root", "");
}catch (Exception $e){
    die("Connection Fail: ".$e->getMessage());
}
$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password, name, lastname) VALUES (:email, :password, :name, :lastname)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':lastname', $_POST['lastname']);

        if ($stmt->execute()) {
            $message = 'Usuario creado correctamente';
        } else {
            $message = 'Ha ocurrido un error, no se pudo crear el usuario';
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
    <?php if(!empty($message)): ?>
        <p><?=$message?></p>
        <?php endif; ?>
    <h1>Registro</h1>
    <span>o <a style="color: red;" href="login.php">Iniciar sesion</a> </span>
    <div class = "containerreg">
    <form action="signup.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre"> 
        <input type="text" name="lastname" placeholder="Apellido">
        <input type="text" name="email" placeholder="Ingrese su email">
        <input type="password" name="password" placeholder="Ingrese la contraseña">
        <input type="password" name="confirmpassword" placeholder="Confirme la contraseña">
        <input type="submit" value="Registrarse">
    </form>
    </div>
    <?php require "./footer.php" ?>
</body>
</html>