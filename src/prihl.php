<?php

if(isset($_POST['btn'])) {
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

          $sql = "INSERT INTO prihl (meno, priezvisko, den, cas)
            VALUES ('". $_POST['meno']."','". $_POST['priezvisko']."','". $_POST['kurz']."','". $_POST['den']."','". $_POST['cas']."')";

            
            if (mysqli_query($conn, $sql)) {
                echo "Prihláška úspešne zaregistrovaná v našom systéme";
                header("Location: https://www.vavaland.sk/index.html");
            }else {
                echo "Nastala chyba. Kontaktujte prosím administrátora" . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prihlasenie na kurzy</title>
    <link rel="stylesheet" href="../style.css?v=2">
    <link rel="stylesheet" href="login_reg.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
      integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../assets/logo.png" class="img-fluid" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="#" method="post">
        <div class="form-group">
            <input type="text" id="login" class="fadeIn second" name="meno" placeholder="Meno">
        </div>

        <div class="form-group">
            <input type="text" id="login" class="fadeIn second" name="priezvisko" placeholder="Priezvisko">
        </div>

        <div class="form-group">
            <input type="text" id="login" class="fadeIn second" name="kurz" placeholder="Názov kurzu, napr. Športové kurzy pre 7 – 12 rokov">
        </div>

        <div class="form-group">
            <input type="text" id="login" class="fadeIn second" name="den" placeholder="Dni o ktoré máte záujem, oddeliť čiarkou">
        </div>

        <div class="form-group">
            <input type="text" id="login" class="fadeIn second" name="cas" placeholder="Vyhovujúce časy , oddeliť čiarkou">
        </div>
      <input type="submit" class="fadeIn fourth" name="btn" value="Prihlásenie do kurzu">
    </form>
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