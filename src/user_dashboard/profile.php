<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../prihlasenie.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="../login_reg.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/90e4bc8c6b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
    integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/a7e3822358f6dcb2f986a68cf24721b2?family=MV+Boli" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <title>VAVAland </title>
</head>
<body id="body">

  <nav id="menu" class="navbar navbar-expand-md bg-white navbar-light navbar-custom fixed-top">
    <a class="navbar-brand" href="index.html">
      <img src="../../assets/logo.png" alt="logo skoly" class="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../index.php">Úvod</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../src/rozvrh.html">Rozvrh</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="../../src/dospely.php">Dospelý</a>
        </li>
        <li class="nav-item" id="fero">
              <a class="nav-link" href="../../src/deti.html">Deti</a>
            </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="../../admin_panel/blog/blog.php">Blog</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="../../src/hala_miestnosti.html">Hala a miestnosti</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="../../src/oslavy.html">Oslavy a denné tábory</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="../../src/kontakt.php">Kontakt</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="../../src/prihlasenie.php"><i class="far fa-user"
            style="color: #1f2f8b;"></i></a>
        </li>
      </ul>
    </div>
  </nav><br><br><br><br><br><br><br>

  <h2 class="heading2" style="color: #000;">ZÁKAZNÍCKA ZÓNA<br>Prihlásený uživateľ: <br> <?php echo htmlspecialchars($_SESSION["email"]); ?></h2>
  <div class="container-fluid" id="first">
    <div class="row">
      <div class="col-lg-4 mw-100">
          <nav id="sidebar">
              <div>
                  <ul class="list-unstyled components mb-1" id="ulek">
                      <li class="sub_menu">
                        <i class="far fa-user-circle"></i><a href="profile.php?id=default" class="sub">Profil</a>
                      </li>
                      <li class="sub_menu">
                      <i class="far fa-calendar-alt"></i><a href="profile.php?id=rozvrh" class="sub">Rozvrh</a>
                      </li>
                      <li class="sub_menu">
                        <i class="far fa-newspaper"></i><a href="profile.php?id=novinky" class="sub">Akutálne prihlásené hodiny</a>
                      </li>
                      <li class="sub_menu">
                       <i class="fas fa-credit-card"></i><a href="profile.php?id=kredit" class="sub">Kredit</a>
                      </li>
                      <li class="sub_menu">
                        <i class="fas fa-poll-h"></i><a href="profile.php?id=hodnotenie" class="sub">Hodnotenie</a>
                      </li>
                      <li class="sub_menu">
                      <i class="fas fa-glass-cheers"></i><a href="profile.php?id=oslavy" class="sub">Oslavy/Tábory/Miestnosti</a>
                      </li>
                      <li class="sub_menu">
                        <i class="fas fa-power-off"></i><a href="profile.php?id=logout" class="sub">Odhlasenie</a>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
      <div class="col-lg-8 mw-100 second">
        <?php 
            //dynamicke nahravanie podstranok
            switch($_GET['id']) {
                default:
                require "profil.php";
                break;

                case "rozvrh":
                include "ukaz_rozvrh.html";
                break;

                case "novinky":
                include "novinky.php";
                break;

                case "hodnotenie":
                include "hodnotenie.php";
                break;

                case "kredit":
                include "kredit.php";
                break;

                case "oslavy":
                include "oslavy.php";
                break;

                case "logout":
                include "logout.php";
                break;
            }
        ?>
      </div>
    </div>
  </div><br><br><br>


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