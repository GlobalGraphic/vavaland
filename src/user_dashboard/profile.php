<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/90e4bc8c6b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
    integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
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
          <a class="nav-link" href="index.html">Domov</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="src/rozvrh.html">Rozvrh</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="src/aktivity.html">Aktivity</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="src/dospely.html">Pre dospelých</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="src/hala_miestnosti.html">Hala a miestnosti</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="src/oslavy.html">Oslavy</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="src/kontakt.html">Kontakt</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="src/prihlasenie.php"><i class="far fa-user"
            style="color: #1f2f8b;"></i></a>
        </li>
      </ul>
    </div>
  </nav><br><br><br><br><br><br><br><br><br>

  <div>
      <a href="profile.php?id=default">Profil</a>
      <a href="profile.php?id=historia">Historia</a>
      <a href="profile.php?id=novinky">Novinky</a>
      <a href="profile.php?id=kredit">Kredit</a>
      <a href="profile.php?id=logout">Odhlasenie</a>
  </div>

    <div id="jozo">
        <?php 
            //dynamicke nahravanie podstranok
            switch($_GET['id']) {
                default:
                require "profil.php";
                break;

                case "historia":
                include "historia.php";
                break;

                case "novinky":
                include "novinky.php";
                break;

                case "kredit":
                include "kredit.php";
                break;

                case "logout":
                include "logout.php";
                break;
            }
        ?>
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