<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /GESTOR-DE-TICKETS');
  }
try{
    $conn=new PDO("mysql:host=localhost;dbname=php_login_database;","root", "");
}catch (Exception $e){
    die("Connection Fail: ".$e->getMessage());
}

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /GESTOR-DE-TICKETS");
    } else {
    $message = 'Las Credenciales no coinciden';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">

  </head>
  <body>
    <?php require './header.php' ?>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Iniciar sesion</h1>
    <span>or <a style="color: red;" href="signup.php">Registrarte</a></span>
    <div class= "containerlog">
      <form action="login.php" method="POST">
        <input name="email" type="text" placeholder="Ingrese su email">
        <input name="password" type="password" placeholder="Ingrese su contraseña">
        <input type="submit" value="Ingresar">
      </form>
    </div>
  
    <?php require "./footer.php" ?>
  </body>
</html>