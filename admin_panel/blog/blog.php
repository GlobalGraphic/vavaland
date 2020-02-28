<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="vitajte v modernej športovo-vzdelávacej krajine ktorá sídli v mestskej časti Ružinov. Ponúkame obrovskú a fantastickú škálu športových a voľnočasových aktivít pre batoľatá, deti, mladých ľudí a rodiny. Ponúkame veľké množstvo aktivít vrátane cvičenia v telocvični pre deti a dospelých, narodeninových osláv, športových, umeleckých a hobby krúžkov, vzdelávacích aktivít alebo len tak príjemné posedenie pri kávičke.">
<meta name="keywords" content="športove kurzy, fyzio kurzy, doučovanie, jazykové kurzy, deti, Tvorivá zábava, športové Aktivity">
<meta name="robots" content="index, follow">
<meta name="author" content="Global Graphic & Design">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="icon" href="assets/logo.png" type="image/gif" sizes="16x16">
<link rel="canonical" href="https://www.vavaland.sk">
<title>Vavaland - Blog</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../../style.css">
<script src="https://kit.fontawesome.com/90e4bc8c6b.js" crossorigin="anonymous"></script>
<style type="text/css">body{font-family: Raleway;}</style>
<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<style>
  a{
    color: #2F80ED;
  }
</style>
</head>
<body>
<nav id="menu" class="navbar navbar-expand-md bg-white navbar-light navbar-custom fixed-top">
        <a class="navbar-brand" href="../../index.php">
          <img src="../../assets/logo.png" alt="logo skoly" class="logo"/>
        </a>
        <i class="fas fa-map-marker-alt"></i>
        <p class="menu_text">Hraničná 24<br/> 821 05 Bratislava</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">Úvod</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="../../src/dospely.php">Dospelý</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="../../src/deti.html">Deti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../src/rozvrh.html">Rozvrh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../src/oslavy.html">Oslavy a tábory</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="../../src/hala_miestnosti.html">Miestnosti</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="admin_panel/blog/blog.php">Blog</a>
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
      </nav><br><br><br><br>

          <section id="variableBoxRight">

                <?php
                switch($_GET['id']) {
                default;
                require ("clanky.php");
                break;

                case 'read_more':
                include 'read_more.php';
                break;
                }
                ?>
            </section>           
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>