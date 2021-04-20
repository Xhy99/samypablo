<?php
session_start();

include('config.php');

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);
    $balance = $result['balance'];
    ///$wallet = $result['wallet'];
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            echo '<p class="success">Hello back </p>';
            $_SESSION["username"]= $username;
            $_SESSION["balance"]= $balance;
            ///$_SESSION["wallet"]= $wallet;
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
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

          <form method="post" action="" name="signin-form">
            <input type="text" placeholder="Username" name="username">
              <input type="password" placeholder="Password" name="password">
              <button type="submit" name="login" value="login">Log In</button>

          </form>
      <h1><b class="blogo">DumBit</b></h1>
</center>

  </div>

      <center>
  <h1 class="join"> Join The Game</h1>

<p class="Bienvenida"> Welcome to the biggest crash game ever. </p>
</form>
</div>

    </div>
  </body>
</html>
