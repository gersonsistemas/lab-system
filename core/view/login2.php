<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
<link rel="stylesheet" href="assets/css/login/login.css"/>
    
<link rel="stylesheet" href="assets/css/login/sweet-alert.css">
<link rel="stylesheet" href="assets/css/login/material-design-iconic-font.min.css">
<link rel="stylesheet" href="assets/css/login/normalize.css">
<link rel="stylesheet" href="assets/css/login/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/login/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="assets/css/login/style.css">
    
<script src="assets/js/login/modernizr.js"></script>
<script src="assets/js/login/bootstrap.min.js"></script>
<script src="assets/js/login/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/login/main.js"></script>
    <script src="js/SendForm.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(assets/images-galeria/1.jpg);">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
       <form action="process/login.php" method="post" class="form_SRCB" data-type-form="login" autocomplete="off">
            <div class="group-material-login">
              <input type="text" class="material-login-control"  name="loginName" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Nombres</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" name="loginPassword" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
        </form>
    </div>  
    <div class="msjFormSend hidden"></div>
</body>
</html>