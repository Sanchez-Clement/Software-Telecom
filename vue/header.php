<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MG-BTP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <script src="https://use.fontawesome.com/01d5fc61d4.js"></script>

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



              <a href="index.php" class="brand-logo"><img src="img/logo.png" alt="logo entreprise"></a>
              <?php if (isset($_SESSION['pseudo'])) {?>
              <?php require 'controlleur/trash.php' ?>
              <!-- show only if the manager is connected -->
              <ul id="nav-mobile" class="right">

                  <li class="hide-on-med-and-down">Session de : <?php echo $_SESSION['pseudo'] ?> </li>
                  <li><a  class="modal-trigger" data-target="modal4"><i class="fa fa-trash"></i></a></li>
                  <li><a href="controlleur/admin/logout.php"><i class="fa fa-sign-out"></i></a></li>
              </ul>
    <?php
} ?>
          </div>
        </nav>
      </header>
      <main class="container" id="principal">
