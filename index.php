<?php
if(isset($_POST['news_btn'])){

        define('DB_SERVER', 'mysql80.websupport.sk:3314');
        define('DB_USERNAME', 'l2mlyiv5');
        define('DB_PASSWORD', 'Nn4&,~TpYt');
        define('DB_NAME', 'l2mlyiv5');

        // pokusenie sa spojit s mysql DB

        $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // kontrola pripojenia

        if($conn->connect_error) {
            die('ERROR: Nieje mozne sa spojit s DB'.  $conn->connect_error);
        }


        $sql = "INSERT INTO news (email)
            VALUES ('". $_POST['email']."')";

            
            if (mysqli_query($conn, $sql)) {
                echo "good";
            }else {
                echo "Error" . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
}

?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="vitajte v modernej športovo-vzdelávacej krajine ktorá sídli v mestskej časti Ružinov. Ponúkame obrovskú a fantastickú škálu športových a voľnočasových aktivít pre batoľatá, deti, mladých ľudí a rodiny. Ponúkame veľké množstvo aktivít vrátane cvičenia v telocvični pre deti a dospelých, narodeninových osláv, športových, umeleckých a hobby krúžkov, vzdelávacích aktivít alebo len tak príjemné posedenie pri kávičke.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="športove kurzy, fyzio kurzy, doučovanie, jazykové kurzy, deti, Tvorivá zábava, športové Aktivity">
    <meta name="author" content="Global Graphic & Design">
    <link rel="icon" href="assets/logo.png" type="image/gif" sizes="16x16">
    <link rel="canonical" href="https://www.vavaland.sk">
    <meta name="google-site-verification" content="KPMjwhZqAkaGH3tY3BBZtTgNqHWl7FeTQfv5q8u9BjI" />
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/90e4bc8c6b.js" crossorigin="anonymous"></script>
    <link href="https://db.onlinewebfonts.com/c/a7e3822358f6dcb2f986a68cf24721b2?family=MV+Boli" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

function popup() {
        var modal = document.getElementById("myModal");
                          modal.style.display = "block";

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        span.addEventListener('click', function(){
          modal.style.display = "none";
        });

        window.addEventListener('click', function(event){
          if (event.target == modal) {
            modal.style.display = "none";
          }
        });
}
</script>
<style>
/* The Modal (background) */
.modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 200px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }
      
      /* Modal Content */
      .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        color: #1772cc;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s;
        font-family: 'Poppins', sans-serif;
        text-align: center;
      }
      
      /* Add Animation */
      @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0} 
        to {top:0; opacity:1}
      }
      
      @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
      }
      
      /* The Close Button */
      .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }
      
      .close:hover,
      .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
      }
      
      .modal-header {
        padding: 2px 16px;
        background-color: #64CC27;;
        color: white;
      }
      
      .modal-body {padding: 2px 16px;}
      
      .modal-footer {
        padding: 2px 16px;
        background-color: #64CC27;;
        color: white;
      }
</style>
    <title>VavaLand</title>
</head>
<body onload="popup();">

    <nav id="menu" class="navbar navbar-expand-md bg-white navbar-light navbar-custom fixed-top">
        <a class="navbar-brand" href="index.php">
          <img src="assets/logo.png" alt="logo skoly" class="logo"/>
        </a>
        <i class="fas fa-map-marker-alt"></i>
        <p class="menu_text">Hraničná 24<br/> 821 05 Bratislava</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Úvod</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="src/dospely.php">Dospelý</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="src/deti.html">Deti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="src/rozvrh.html">Rozvrh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="src/oslavy.html">Oslavy a tábory</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="src/hala_miestnosti.html">Miestnosti</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="admin_panel/blog/blog.php">Blog</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="src/kontakt.php">Kontakt</a>
            </li>
            <li class="nav-item" id="fero">
          <a class="nav-link" href="src/prihlasenie.php"><i class="far fa-user"
            style="color: #1f2f8b;"></i></a>
        </li>
          </ul>
        </div>
      </nav><br><br><br><br>
         <!-- The Modal -->
   <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
  </div>
  <div class="modal-body">
    <h2 class="center">Týždeň cvičenia zdarma !!!</h2>
    <a class="text-center" href="src/rozvrh.html">Rozvrh aktuálnych cvičení nájdeš tu</a>
    <p class="center">Ďakujeme<br>Tím Vavaland</p>
  </div>
  <div class="modal-footer">
  </div>
</div>
   </div>

      <div id="hero">
        <img src="assets/girl-1718430_1920.jpg" alt="girls riding bike" class="img-fluid"/>
        <div id="hero-overlay">
          <div id="text">
            <h1>VAVA Land</h1>
            <p class="txt1">Športovo-vzdelávacie centrum<br/>v Bratislavskom Ružinove</p>
          </div>
        </div>
      </div>

      <div class="container" id="top">
        <div class="row">        
            <div class="col-lg-4 col-md-6 col-xs-6 text-right">
                <img src="assets/mother-1039765_1920.jpg" class="img-fluid" id="mom"/>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6" id="grad">
              <h2 class="grad">Miesto</h2>&nbsp;&nbsp;<h2 class="kek">pre teba</h2><br><br>
              <p class="top_text">Vitajte v modernej športovo-vzdelávacej krajine ktorá sídli v mestskej časti Ružinov. Ponúkame obrovskú a fantastickú škálu športových a voľnočasových aktivít pre batoľatá, 
                deti, mladých ľudí a rodiny. Ponúkame veľké množstvo aktivít vrátane cvičenia v telocvični pre deti a dospelých, narodeninových osláv, športových, 
                umeleckých a hobby krúžkov, vzdelávacích aktivít alebo len tak príjemné posedenie pri kávičke.</p>      
            </div>
       </div>
    </div>


    <div class="container-fluid" id="grey">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <div class="card text-center" style="border: none;">
            <div class="card-body" style="background-color: #eee;">
              <img src="assets/105627.png" alt="baby" style="width: 50px" class="info_img">
              <h5 class="card-title">Deti</h5>
              <p class="card-text">Pozrieť kurzy <a href="src/deti.html">tu</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <div class="card text-center" style="border: none;">
            <div class="card-body" style="background-color: #eee;">
              <img src="assets/105620.png" alt="baby" style="width: 50px;" class="info_img">
              <h5 class="card-title">Dospelý</h5>
              <p class="card-text">Pozrieť kurzy <a href="src/dospely.php">tu</a></p>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- <div class="container-fluid" id="blue">
    <div id="over"><p class="over1">Aktivity</p>&nbsp;&nbsp;<p class="over2">pre každého</p></div>
    <div class="row" id="iconS">
      <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2">
        <div class="card text-center" style="border: none;">
          <div class="card-body" style="background-color:#2e80d1;">
            <img src="assets/103233.png" alt="baby" style="width: 40px" class="info_img">
            <p class="ahref">Športové kurzy</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2">
        <div class="card text-center" style="border: none;">
          <div class="card-body" style="background-color:#2e80d1;">
            <img src="assets/102823.png" alt="baby" style="width: 40px" class="info_img">
            <p class="ahref">Fyzio kurzy</p>
          </div>
        </div>
      </div>
      <div class="col-sm3 col-md-2 col-lg-3 col-xl-2">
        <div class="card text-center" style="border: none;">
          <div class="card-body" style="background-color:#2e80d1;">
            <img src="assets/88179.png" alt="baby" style="width: 40px" class="info_img">
            <p class="ahref">Doučovanie</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2">
        <div class="card text-center" style="border: none;">
          <div class="card-body" style="background-color:#2e80d1;">
            <img src="assets/66396.png" alt="baby" style="width: 40px" class="info_img">
            <p class="ahref">Oslavy</p>
          </div>
        </div>
      </div>
      <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ml-auto end-page2 mt-5">
        <button><a href="src/rozvrh.html" style="color: white;">Rezervácie</a></button>
      </div>
    </div>
</div> -->

<div class="container-fluid" id="cce">
  <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ml-auto end-page3 mt-5" id="odkaz">
    <h2>Aktuality</h2>
    <button class="fero">Všetky novinky</button>
    <button class="jozo"><a href="admin_panel/blog/blog.php" style="color: white;">Blog</a></button>
  </div>
  <div class="row ml-5">
    <div class="col-sm-2 col-md-3 first">
      <p class="text-bold" style="color: #1772CC;">Týždeň  cvičenia ZDARMA !!!</p>
      <p class="textik">Navštívte nás počas 09.03.2020 - 13.03.2020 a hociktoré cvičenie alebo kurz máte u nás úplne zdarma!</p>
    </div>
    <div class="col-sm-2 col-md-3 first">
    <p class="text-bold" style="color: #1772CC;">Kruhový tréning</p>
    <p class="textik">Si ranné vtáča? Chceš prísť do práce plný energie a pozitivizmu? Tak potom určite...</p>
    </div>
    <div class="col-sm-2 col-md-3 first">
    <p class="text-bold" style="color: #1772CC;">Montessori dielničky</p>
    <p class="textik">Pripravili sme pre Vás priestor, kde spoločne s Vaším dieťaťom prežijete príjemné inšpiratívne chvíle..</p>
    </div>
  </div>
</div>
  
        <!-- green header -->
    <div class="container-fluid dostupne-kurzy">
      <div class="row">

        <div class="col-lg-6">
          <h3>Dostupné kurzy</h3>
        </div>

        <div class="col-lg-4 ml-auto pt-1 pb-1">
          <button><a href="https://vavaland.sk/cennikvavaland2020.pdf" style="color: white;">Cenník</a></button>
          <button>Všetky kurzy</button>
        </div>
      </div>
    </div>

    <!-- carousel -->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

        <!-- first 3 objects -->
        <div class="carousel-item active" data-interval="20000">
          <div class="row">

            <div class="col-lg-4">
              <img src="assets/kids-2580991_1920.jpg" class="d-block w-100" alt="https://www.vavaland.sk/">
                <a href="#" class="ahref"><div class="bottom-left">Pohybová príprava JUNIOR a TEEN</div></a>
            </div>

            <div class="col-lg-4">
              <img src="assets/ballet-1030921_1920.jpg" class="d-block w-100" alt="https://www.vavaland.sk/">
              <a href="#" class="ahref"><div class="bottom-left">Parkour KIDS a BASIC</div></a>
            </div>

            <div class="col-lg-4">
              <img src="assets/training-828741_1920.jpg" class="d-block w-100" alt="https://www.vavaland.sk/">
              <a href="#" class="ahref"><div class="bottom-left blue">Sebaobrana TEEN</div></a>
            </div>

          </div>
        </div>

        <!-- last 3 objects -->
        <div class="carousel-item" data-interval="5000">
          <div class="row">

            <div class="col-lg-4">
              <img src="assets/ballet-1030921_1920.jpg" class="d-block w-100" alt="https://www.vavaland.sk/">
              <a href="#" class="ahref"><div class="bottom-left">Kurzy pre deti pod dohľadom fyzioterapeuta</div></a>
            </div>

            <div class="col-lg-4">
              <img src="assets/training-828741_1920.jpg" class="d-block w-100" alt="https://www.vavaland.sk/">
              <a href="#" class="ahref"><div class="bottom-left">BABY English</div></a>
            </div>

            <div class="col-lg-4">
              <img src="assets/kids-2580991_1920.jpg" class="d-block w-100" alt="https://www.vavaland.sk/">
              <a href="#" class="ahref"><div class="bottom-left blue">Montessori dielničky</div></a>
            </div>

          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Predošlé</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Ďalšie</span>
      </a>
    </div>

    <!-- text under carousel -->
    <div style="max-width: 90%;" class="container-fluid mt-5">
      <div class="row">

        <div class="col-lg-8 text-justify">
          <p>Vo VAVALande máte možnosť aj samostatného prenájmu miestností poprípade telocvične.
Pre rezerváciu priestorov je potrebné sa registrovať do užívateľskej zóny a následne po
prihlásení v časti Oslavy/Tábory/Miestnosti v ľavom menu vyplniť formulár.</p>
        </div>

        <div class="col-lg-3 ml-auto end-page mt-5">
          <button><a href="src/hala_miestnosti.html" style="color: white;">Prenájom</a></button>
        </div>

      </div>
    </div>

    <!-- telocvicna a seminarna miestnost -->
    <div class="container-fluid mt-5">
      <div class="row">

        <div class="col-lg-6 telocvicna">

          <center>
            <div class="mid-info mt-5">
              <h1>Telocvičňa</h1>
              <h3 class="mt-3">22€ / hod.</h3>
            </div>
          </center>

        </div>

        <div class="col-lg-6 seminarna-miestnost">

          <center>
            <div class="mid-info mt-5">
              <h1>Seminárna miestnosť</h1>
              <h3 class="mt-3">13€ / hod.</h3>
            </div>
          </center>

        </div>

      </div>
    </div>

    <!-- galeria -->
    <div class="container-fluid blue mt-5 pt-2 pb-2 galeria">
      <h1>Galéria</h1>

      <div class="row">

        <!-- img 1 -->
        <div class="col-lg-2">
          <img src="assets/ballet-1030921_1920.jpg" alt="https://www.vavaland.sk/">
        </div>

        <!-- img 2 -->
        <div class="col-lg-2">
          <img src="assets/training-828741_1920.jpg" alt="https://www.vavaland.sk/">
        </div>

        <!-- img 3 -->
        <div class="col-lg-2">
          <img src="assets/kids-2580991_1920.jpg" alt="https://www.vavaland.sk/">
        </div>

        <!-- img 4 -->
        <div class="col-lg-2">
          <img src="assets/ballet-1030921_1920.jpg" alt="https://www.vavaland.sk/">
        </div>

        <!-- img 5 -->
        <div class="col-lg-2">
          <img src="assets/training-828741_1920.jpg" alt="https://www.vavaland.sk/">
        </div>

        <!-- img 6 -->
        <div class="col-lg-2">
          <img src="assets/kids-2580991_1920.jpg" alt="https://www.vavaland.sk/">
        </div>

      </div>

    </div>

    <!-- footer -->
    <footer>
      <div style="max-width: 90%;" class="container-fluid mt-5 pt-5 pb-4">
        <div class="row">

          <div class="col-lg-3">
            <img src="assets/logo.svg" class="mb-3" alt="https://www.vavaland.sk/">
            <p class="font-weight-bold">VAVA Land s.r.o.</p>
            <p>Hraničná 5825/24<br>821 05 Bratislava</p>
          </div>

          <div class="col-lg-3">
            <h3 class="mb-4">Kontaktujte nás</h3>
            <a href="tel:+421905836661">0905 836 661</a>
            <a class="mb-3" href="tel:+421905594957">0905 594 957</a>
            <a href="mailto:info@vavaland.sk">info@vavaland.sk</a>
            <!-- ikony -->
            <span class="ikonky">
              <a href="https://www.facebook.com/VAVA-LAND-104947017722760/?modal=admin_todo_tou"><i class="fab fa-facebook-square fa-2x"></i></a>
              <a href="https://www.instagram.com/vavaland.sk/"><i class="fab fa-instagram-square fa-2x"></i></a>
            </span>
          </div>

          <div class="col-lg-3">
            <h3>Newsletter</h3>
            <!-- form -->
            <form class="mt-4" action="#" method="POST">
            <input type="email" name="email" placeholder="Tvôj email" id="text">
				    <input type="submit" id="news_btn" name="news_btn" class="btn btn-primary" value="Subscribe">
            </form>

          </div>

          <div class="col-lg-3">
            <h3 class="mb-4">Odkazy</h3>
            <span class="last-window">
              <a href="index.php"><font>úvod</font></a>
              <a href="src/deti.html"><font>pre deti</font></a>
              <a href="src/dospely.php"><font>pre dospelých</font></a>
              <a href="src/rozvrh.html"><font>rezervácie</font></a>
              <a href="admin_panel/blog/blog.php"><font>novinky</font></a>
              <a href="https://vavaland.sk/cennikvavaland2020.pdf"><font>cenník</font></a>
              <a href="src/kontakt.php"><font>kontakt</font></a>
            </span>
          </div>

        </div>
      </div>
    </footer>

    <!-- end of page -->
    <div class="end-of-page container-fluid pt-3 pb-3">
      <div class="container">
        <div class="row">

          <div class="col-lg-4">
            ©2020 VAVALand.sk - Všetky práva vyhradené
          </div>

          <div class="col-lg-3 ml-auto">
            Designed by <a href="https://globalgraphicdesign.eu" style="color: white;">GG&D</a>
          </div>

        </div>
      </div>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>