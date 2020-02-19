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
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="vitajte v modernej športovo-vzdelávacej krajine ktorá sídli v mestskej časti Ružinov. Ponúkame obrovskú a fantastickú škálu športových a voľnočasových aktivít pre batoľatá, deti, mladých ľudí a rodiny. Ponúkame veľké množstvo aktivít vrátane cvičenia v telocvični pre deti a dospelých, narodeninových osláv, športových, umeleckých a hobby krúžkov, vzdelávacích aktivít alebo len tak príjemné posedenie pri kávičke.">
<meta name="robots" content="index, follow">
<meta name="keywords" content="športove kurzy, fyzio kurzy, doučovanie, jazykové kurzy, deti, Tvorivá zábava, športové Aktivity">
<meta name="author" content="Global Graphic & Design">
<link rel="icon" href="assets/logo.png" type="image/gif" sizes="16x16">
<link rel="canonical" href="https://www.vavaland.sk">
<meta name="google-site-verification" content="KPMjwhZqAkaGH3tY3BBZtTgNqHWl7FeTQfv5q8u9BjI" />
  <link rel="stylesheet" href="style.css?v=1">
  <!--<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">-->
  <link href="https://fonts.googleapis.com/css?family=Caveat+Brush&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/90e4bc8c6b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
    integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <title>VAVAland</title>
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
</head>

<body id="body" onload="popup();">

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

  <nav id="menu" class="navbar navbar-expand-md bg-white navbar-light navbar-custom fixed-top">
    <a class="navbar-brand" href="index.html">
      <img src="assets/logo.png" alt="logo skoly" class="logo" />
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
        <li class="nav-item" id="fero">
          <a class="nav-link" href="src/dospely.php">Pre dospelých</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="admin_panel/blog/blog.php">Blog</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="src/hala_miestnosti.html">Hala a miestnosti</a>
        </li>
        <li class="nav-item" id="fero">
          <a class="nav-link" href="src/oslavy.html">Oslavy a denné tábory</a>
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
  </nav><br><br><br><br><br><br><br><br>

  <div class="container text-center">
      <p id="head2">Vitajte v modernej športovo-vzdelávacej krajine ktorá sídli v mestskej časti Ružinov.  Ponúkame obrovskú a fantastickú škálu športových a voľnočasových aktivít pre batoľatá, deti,
     mladých ľudí a rodiny. Ponúkame veľké množstvo aktivít vrátane cvičenia v telocvični pre deti a dospelých, narodeninových osláv, športových, 
    umeleckých a hobby krúžkov, vzdelávacích aktivít alebo len tak príjemné posedenie pri kávičke. </p><br><br><br>
  </div>

  <h2 class="heading2">Aktivity pre deti</h2>
  <div class="container-fluid" id="first">
    <div class="row">
      <div class="col-lg-4 mw-100 first">
        <p class="headings" style="color: #1772CC;">Športové kurzy</p>
        <article>Pre svoje deti u nás nájdete pestrú ponuku kurzov od pomalších ako je kompenzačné cvičenie pre
          deti až po dynamické typy kurzov ako napríklad silovo-koordinačný tréning. Každý kurz z našej
          ponuky je trochu inak zameraný, ale všetky majú niečé spoločné.Na týchto kurzoch sa zameriavame hlavne na rozvoj hrubých pohybových schopností.</article>
        <button class="btn program_btn" style="background-color: #1772CC;"><a href="src/sportove_kurzy.php" class="program-links">chcem
            vedieť viac o programe</a></button>
      </div>
      <div class="col-lg-4 mw-100 second">
        <p class="headings" style="color: #1772CC;">FYZIO kurzy</p>
        <article>V detstve sa vytvárajú základné kamene motoriky, ktoré bude dieťa, neskôr dospelý používať po celý
          svoj život. Preto je dôležité tieto základy postaviť čo najlepšie a najpevnejšie.V dnešnej dobe
          môžeme u veľa detí vidieť odchýlky od správneho držania tela (ploché nohy, chabé držanie tela,
          chybné postavenie panvy atď). Cieleným</article>
        <button class="btn program_btn" style="background-color: #1772CC;"><a href="src/fyzio_kurzy.php" class="program-links">chcem
            vedieť viac o programe</a></button>
      </div>
      <div class="col-lg-4 mw-100 third">
        <p class="headings" style="color: #1772CC;">Doučovanie, jazykové a iné kurzy</p>
        <article>Snáď každý z nás sa  niekedy potreboval doučiť nejaký školský predmet. A asi každý z nás sa stretol s celou radou problémov. U nás veríme, že každý môže dosiahnuť skvelé výsledky. Ponúkame Vám skupinové doučovanie predmetov základných škôl, ktoré zostavujeme priamo na mieru klientovi alebo skupine.</article>
        <button class="btn program_btn" style="background-color: #1772CC;"><a href="src/doucovanie.php" class="program-links">chcem
            vedieť viac o programe</a></button>
      </div>
    </div>
  </div><br><br><br>

  <h2 class="heading2">Aktuality a novinky</h2><br><br>
  <div class="container-fluid" id="first">
    <div class="row">
      <div class="col-lg-4 mw-100 first">
        <p class="text-bold" style="color: #1772CC;">Týždeň  cvičenia ZDARMA !!!</p>
        <p style="font-family: 'Caveat Brush', cursive;">Navštívte nás počas 09.03.2020 - 13.03.2020 a hociktoré cvičenie alebo kurz máte u nás úplne zdarma! Svoje miesto si však musíte rezervovať cez rezervačný systém. Príďte si posedieť pri kávičke a Vaše dieťa môže vyskúšať parkour, pohybovú prípravu, angličtinu alebo špeciálne fyzio kurzy. A takisto aj VY! Tešíme sa na Vás !!!</p>
      </div>
      <div class="col-lg-4 mw-100 second">
      <p class="text-bold" style="color: #1772CC;">Kruhový tréning</p>
      <p style="font-family: 'Caveat Brush', cursive;">Si ranné vtáča? Chceš prísť do práce plný energie a pozitivizmu? Tak potom určite vieš aké blahodárne účinky má ranné cvičenie na organizmus. Príď k nám vyskúšať ranný kruhový tréning a rozprúdiť tak endorfíny do tela. Tešíme sa na teba !</p>
      </div>
      <div class="col-lg-4 mw-100 third">
      <p class="text-bold" style="color: #1772CC;">Montessori dielničky</p>
      <p style="font-family: 'Caveat Brush', cursive;">Pripravili sme pre Vás priestor, kde spoločne s Vaším dieťaťom prežijete príjemné inšpiratívne chvíle.
Kúzelné montessori dielničky prebiehajú v  triedach s Montessori pomôckami a vhodnými materiálmi,
ktoré sú Vašim deťom plne k dispozícii. Neoddeliteľnou súčasťou tohto prostredia je aj dospelý
(rodič, prarodič, opatrovník), ktorý sa k dieťaťu chová s rešpektom a úctou, ale zároveň je pre dieťa
modelom, vzorom a skúseným sprievodcom. V priebehu dielničiek máte čas venovať sa jeden
druhému. Na dielničky sa môžete prihlásiť prostredníctvom formulára pri popise kurzu.</p>
      </div>
    </div>
  </div><br><br><br>

  <br><br><br><br>

  <h2 class="heading2">Fotogaléria a hodnotenia</h2>

  <div class="container-fluid mw-100" id="cert">
    <div class="row">
      <div class="col-lg-6 mw-100" style="border: none;">
        <div class="row mx-auto">
          <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="grey"></div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="grey"></div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="grey"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mw-100" style="border: none;">
        <div class="row">
          <?php 
          require_once "config.php";

          // fetch podla id v db
          $sql="SELECT * FROM hodnotenie ORDER BY RAND() LIMIT 1";

          $result=mysqli_query($mysqli,$sql);

          // Associative array
          while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
              $poradie = $row["id"];
              $nadpis = $row["nadpis"];
              $text = $row['text'];
              $meno = $row['meno'];
              $body = $row['body'];
          ?>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
            <p class="text-bold1" style="color: #1772CC;"><?php echo $nadpis ?></p>
            <p class="sample-text" style="font-size: 18px;"><?php echo $text ?></p>
            <p class="sample-text" style="font-size: 18px;"><?php echo $meno ?></p>
            <p class="sample-text" style="font-size: 18px;">Bodovanie:&nbsp;&nbsp;<?php echo $body ?></p>
          </div>
          <?php 
} 
            mysqli_free_result($result);
            mysqli_close($mysqli);
          ?> 
        </div>
      </div>
    </div>
  </div><br><br><br>

  <section id="newsletter" class="text-center p-5 mt-4">
		<div class="container p-3">
      <h3 class="news_head">Pridaj sa k nám</h3>
      <p class="head_para">Chceš vedieť viac o tréningu, presnom dátume otvorenia, novinkách a akciách?<br>
        Pošli nám svoj email a my ťa budeme informovať.</p>
			<form action="#" method="POST">
      <input type="email" name="email" placeholder="Tvôj email" id="text">
				<input type="submit" id="news_btn" name="news_btn" class="btn btn-primary" value="Subscribe">
			</form>
		</div>
	</section><br><br><br>


  <footer class="page-footer font-small indigo">


    <div class="container text-center text-md-left">


      <div class="row">


        <div class="col-md-3 mx-auto">


          <h5 class="font-weight-bold mt-3 mb-4" style="color: #64CC27;">Kontaktné informácie</h5>

          <ul class="list-unstyled">
            <li>
              VAVA Land s.r.o
            </li>
            <li>
              Hraničná 5825/24
            </li>
            <li>
              821 05 Bratislava
            </li>
            <li>
              Tel.kontakt:&nbsp;<a href="tel:+421905836661" class="footer-links">0905 836 661</a><br>
              <a href="tel:+421905594957" class="footer-links">0905 594 957</a>
            </li>
          </ul>

        </div>


        <hr class="clearfix w-100 d-md-none">


        <div class="col-md-3 mx-auto">


          <h5 class="font-weight-bold mt-3 mb-4" style="color: #64CC27;">Navigácia</h5>

          <ul class="list-unstyled">
            <li>
              <a href="src/rozvrh.html" class="footer-links">Rozvrh</a>
            </li>
            <li>
              <a href="src/dospely.html" class="footer-links">Pre dospelých</a>
            </li>
            <li>
              <a href="src/hala_miestnosti.html" class="footer-links">Hala a miestnosti</a>
            </li>
            <li>
              <a href="src/oslavy.html" class="footer-links">Oslavy</a>
            </li>
            <li>
              <a href="src/prihlasenie.php" class="footer-links">Prihlásenie</a>
            </li>
            <li>
              <a href="src/registracia.php" class="footer-links">Registrácia</a>
            </li>
            <li><a href="https://vavaland.sk/cennikvavaland2020.pdf" class="footer-links">Cenník</a></li>
          </ul>

        </div>


        <hr class="clearfix w-100 d-md-none">


        <div class="col-md-3 mx-auto">


          <h5 class="font-weight-bold  mt-3 mb-4" style="color: #64CC27;">Sociálne siete</h5>

          <ul class="list-unstyled">
            <li>
              Nájdete nás na sociálnych<br> sieťach
            </li><br><br>
            <li><a href="https://www.facebook.com/VAVA-LAND-104947017722760/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook-f" id="fbc"></a></i>&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/vavaland.sk/"><i class="fab fa-instagram"
                id="insta"></i></a></li>

          </ul>

        </div>


        <hr class="clearfix w-100 d-md-none">


        <div class="col-md-3 mx-auto">


          <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: #64CC27;">Informácie</h5>

          <ul class="list-unstyled">
            <li>
            Všetky práva vyhradené
            </li>
            <li>
              2020 &copy; Vavaland.sk
            </li>
            <li>
              Vytvoril: <a href="https://globalgraphicdesign.eu" target="_blank">GG&D</a>
            </li>
          </ul>

        </div>


      </div>


    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
    integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P"
    crossorigin="anonymous"></script>
</body>

</html>