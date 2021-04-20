<head>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">

  <title>DumBit</title>
</head>
<body>

<div class="cajadearriba">
<nav class="navdearriba">

<a href="../index.php" ><img class="logoarriba" src="../imagenes/logo.png"alt=""></a><b class="blogo">Dumped Bit</b>
<div class="navbar">
  <?php
  if(!isset($_SESSION['user_id'])){
    echo '<a href="../login.php"><i class="fa fa-fw fa-user"></i> Login</a>';
  }
  else{
    echo '<a>Hello ';
    echo $_SESSION['username'];
    echo ' Balance = ';
    echo $_SESSION['balance'];
    echo '</a>';
  }
  ?>


</div>
</nav>
</div>
