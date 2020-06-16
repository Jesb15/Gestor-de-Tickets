<!DOCTYPE html>
<html lang="es">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <!-- Utilizando Boostrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
 
<body>

    <div class="container">
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textName">Name</label>  
  <div class="col-md-4">
  <input id="textName" name="textName" type="text" placeholder="Pedro Martínez" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textem">Contraseña</label>  
  <div class="col-md-4">
  <input id="textem" name="textem" type="text" placeholder="ejemplo55@picapollo.net" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Contraseña</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="********" class="form-control input-md">
    <span class="help-block">help</span>
  </div>
</div>

</fieldset>
</form>
    </div>
 
    <!-- Jquery -->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
 
</html>