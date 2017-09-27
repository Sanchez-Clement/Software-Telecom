<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body id="body">
      <header id="top">
        <nav >
          <div class="nav-wrapper">



    <a href="#" class="brand-logo"><img src="img/logo.png" alt=""></a>
<?php if (isset($_SESSION['pseudo'])) {
    ?>
    <ul id="nav-mobile" class="right">
      <li>Session de : <?php echo $_SESSION['pseudo'] ?> </li>

      <li><a href="controlleur/admin/logout.php"><i class="material-icons">search</i></a></li>
    </ul>
    <?php
} ?>
  </div>
</nav>
      </header>
      <main class="container">
