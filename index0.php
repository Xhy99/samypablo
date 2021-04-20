<?php
// include ('../header.php');
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

      <form id="formuu_log"class="formu_login" action="">
        <h2> Sign in</h2>
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <button>Login</button>
      </form>

      <form id="formuu_reg" class="formu_register" action="">
        <h2>Sign Up</h2>
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button>Sign Up</button>
      </form>
    </div>
  </div>
</main>

<script src="anim.js">

</script>
  </body>
</html>
