<?php
include('reg.php');
include('header.php')
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


    <link rel="stylesheet" type="text/css" href="estilos.css" >
  </head>
  <body>
<main>
  <div class="general_container">
    <div class="caja_trasera">
      <div class="caja_trasera_login">
        <h3>¿Are you registred?</h3>
        <p>Sign in to join</p>
        <button id="boton_login" onclick="iniciarSesion()">Log in</button>
      </div>
      <div class="caja_trasera_register">
        <h3>¿New in Dumbit?</h3>
        <p>Sign up to join</p>
        <button id="boton_register" onclick="regiiister()">Register</button>
      </div>
    </div>
    <div class="container_login_register">

      <form id="formuu_log"class="formu_login" method="post" action="login.php" name="signin-form">
        <h2> Sign in</h2>
        <input type="text" placeholder="Username" name="username">
          <input type="password" placeholder="Password" name="password">
        <button type="submit" name="login" value="login" >Login</button>
      </form>

      <form id="formuu_reg" class="formu_register" method="post" action="" name="signup-form">
        <h2>Sign Up</h2>
        <input type="text" placeholder="Username" name="username" pattern="[a-zA-Z0-9]+" required>
        <input type="email" placeholder="Email" name="email" required >
      <input type="password"placeholder="Password" name="password" required>
        <button  onclick="myFunction()" type="submit" name="register" value="register">Register</button>
      </form>
    </div>
  </div>
</main>

<script src="anim.js">

</script>
  </body>
</html>
