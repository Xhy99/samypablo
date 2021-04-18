<?php
include('reg.php');

?>


<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" >
    <meta charset="utf-8">
<?php include('header.php') ?>
    <title></title>
  </head>
  <body>

    <div class="">

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      <center>
      <h1><b class="blogo">DumBit</b></h1>
</center>

  </div>

    <div>

      <center>
  <h1 class="join"> Join The Game</h1>

<p class="Bienvenida"> Welcome to the biggest crash game ever. </p>
<p class="textoblanco">Sign Up</p>
<div class="cajaregistro">




<form method="post" action="" name="signup-form">
  <input type="text" placeholder="User" name="username" pattern="[a-zA-Z0-9]+" required>
    <input type="email" placeholder="Email" name="email" required >
  <input type="password"placeholder="Password" name="password" required>
  <button  onclick="myFunction()" type="submit" name="register" value="register">Register</button>
  <script type="text/javascript">
  function myFunction() {
  alert("Thank you for Sign Up");
}

  </script>
</form>


  </div>
  </center>
</div>
<div class="footer">
  <<footer></footer>

</div>
  </body>
</html>
