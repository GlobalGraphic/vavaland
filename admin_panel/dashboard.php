<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: log.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/90e4bc8c6b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
    integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/90e4bc8c6b.js" defer></script>
    <title>Admin Dashboard</title>
</head>
<body>
<nav id="menu" class="navbar navbar-expand-md bg-white navbar-light navbar-custom fixed-top">
    <a class="navbar-brand" href="#">
      <h2>Administračná zóna</h2>
      <p class="text-danger">Prihlásený admin : <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.html">Domov</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php?id=tvorba">Tvorba Rozvrhu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php?id=default">Rozvrh</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="dashboard.php?id=fotog">Pridanie fotiek</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="dashboard.php?id=novinky">Pridanie noviniek</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="dashboard.php?id=registracie">Registrované osoby</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="dashboard.php?id=rezervacie">Sledovanie rezervácií</a>
        </li>
      </ul>
    </div>
  </nav><br><br><br><br><br><br>

  <div class="container">
      <div class="jumbotron">
            <?php
                switch($_GET['id']){
                    default:
                    require "ukaz_rozvrh.html";
                    break;

                    case "registracie":
                    include "registracie.php";
                    break;

                    case "tvorba":
                    include "tvorba_rozvrhu.php";
                    break;

                    case "rezervacie":
                    include "rezervacie.php";
                    break;

                    case "fotog":
                    include "fotog.php";
                    break;

                    case "novinky":
                    include "novinky.php";
                    break;
                }
            ?>

      </div>
  </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
    integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P"
    crossorigin="anonymous"></script>
</body>
</html>