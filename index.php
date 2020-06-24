<!DOCTYPE html>
<html lang="es">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <!-- Utilizando Boostrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
 
<body>
  <?php require "./header.php"?>
    <h1>Iniciar sesion o Registrarse</h1>


  </div>
    <a class="btn" href="signup.php" role="button">Registrarse</a>
    <a class="btn" href="login.php" role="button">Iniciar sesion</a>
  </div>

  <script>
    window.sr = ScrollReveal();
    sr.reveal("containerreg", {
    duration: 2000,
    origin: "bottom"
    });
    window.sr = ScrollReveal();
    sr.reveal("containerlog", {
    duration: 2000,
    origin: "bottom"
    });
  </script>
</body>
 
</html>
