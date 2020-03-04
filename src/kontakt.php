<?php
if (isset($_POST['btn'])) {
  
  $msg = "";
/*include_once "phpmailer/PHPMailer.php";
include_once "phpmailer/Exception.php";
include_once "phpmailer/SMTP.php";*/

    $meno = $_POST['meno'];
    $email = $_POST['email'];
    $predmet = $_POST['value'];
    $msg= '<div class="jumbotron">'. $_POST['meno'] . '<br>' . $_POST['email'] .'<br>' . $_POST['sprava'].'</div>';

    require('phpmailer/PHPMailerAutoload.php');
  
      $mail = new PHPMailer();
      $mail->CharSet = "UTF-8";
      $mail->addAddress('info@vavaland.sk');
      $mail->setFrom($email);
      $mail->Subject = $predmet;
      $mail->isHTML(true);
      $mail->Body = $msg;

      if ($mail->send()) {
          header("Location: email_gen_msg.html");
      } else{
         //$msg = "Vyskitla sa chyba, skúste to znova!";
        echo 'nastala chyba';
       }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="vitajte v modernej športovo-vzdelávacej krajine ktorá sídli v mestskej časti Ružinov. Ponúkame obrovskú a fantastickú škálu športových a voľnočasových aktivít pre batoľatá, deti, mladých ľudí a rodiny. Ponúkame veľké množstvo aktivít vrátane cvičenia v telocvični pre deti a dospelých, narodeninových osláv, športových, umeleckých a hobby krúžkov, vzdelávacích aktivít alebo len tak príjemné posedenie pri kávičke.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="športove kurzy, fyzio kurzy, doučovanie, jazykové kurzy, deti, Tvorivá zábava, športové Aktivity">
    <meta name="author" content="Global Graphic & Design">
    <link rel="icon" href="assets/logo.png" type="image/gif" sizes="16x16">
    <title>Kontakt</title>
    <link rel="stylesheet" href="../style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/90e4bc8c6b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
    integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body id="body">
<nav id="menu" class="navbar navbar-expand-md bg-white navbar-light navbar-custom fixed-top">
        <a class="navbar-brand" href="../index.php">
          <img src="../assets/logo.png" alt="logo skoly" class="logo"/>
        </a>
        <i class="fas fa-map-marker-alt"></i>
        <p class="menu_text">Hraničná 24<br/> 821 05 Bratislava</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Úvod</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="src/dospely.php">Dospelý</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="deti.html">Deti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rozvrh.html">Rozvrh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="oslavy.php">Oslavy a tábory</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="hala_miestnosti.html">Miestnosti</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="../admin_panel/blog/blog.php">Blog</a>
            </li>
            <li class="nav-item" id="fero">
              <a class="nav-link" href="kontakt.php">Kontakt</a>
            </li>
            <li class="nav-item" id="fero">
          <a class="nav-link" href="prihlasenie.php"><i class="far fa-user"
            style="color: #1f2f8b;"></i></a>
        </li>
          </ul>
        </div>
      </nav><br><br><br><br><br><br><br><br>

<form id="contact_form" method="POST" class="form-horizontal" action="#">
<div class="container">
    <div class="row">
        <div class="col-md-8">
                <div class="row" id="form_row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Meno</label>
                            <input type="text" class="form-control" id="name" placeholder="Vaše meno" name="meno" required />
                        </div>
                        <div class="form-group">
                            <label>
                                E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" class="form-control" placeholder="Váš E-mail" autocomplete='email' name="email" required id="mailos" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Predmet</label>
                            <select id="subject" class="form-control" name="value" required="required">
                                <option value="" selected="">Vyberte si z možností</option>
                                <option value="Všeobecný zákaznícky servis">Zákaznický servis</option>
                                <option value="Návrhy">Návrhy</option>
                                <option value="Informacie">Informácie</option>
                                <option value="Konzultácie">Konzultácie</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Správa</label>
                            <textarea name="sprava" id="message" class="form-control" rows="9" cols="25" required
                                      placeholder="Vaša Správa"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary pull-right" value="Odoslať" id="btnContactUs" name="btn">
                    </div>
                </div>
        </div>
        <div class="col-md-4" id="address">
<span class="glyphicon glyphicon-globe"></span>
            <address>
                <strong>VAVAland s.r.o.<br>
                </strong><br>
                Hraničná 5825/24, 821 05 Bratislava, SR<br>
                Email:
                <a href="mailto:#">info@vavaland.sk</a><br>
                <abbr title="Phone">
                    Tel.:</abbr>
                +421 905 836 661<br>
                Web : <a href="#" target="_blank">www.vavaland.sk</a><br>
            </address>
        </div>
    </div>
</div>

</form><br><br><br><br><br><br>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.3156075235233!2d17.158643515057822!3d48.14272035878266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c88da7adeda23%3A0x54570e11c3d21569!2sHrani%C4%8Dn%C3%A1%205825%2C%20821%2005%20Bratislava%2C%20Slovakia!5e0!3m2!1sen!2sie!4v1578309050729!5m2!1sen!2sie" width="1920" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

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