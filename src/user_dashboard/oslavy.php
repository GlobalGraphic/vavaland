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

          $sql = "INSERT INTO oslavy (meno, priezvisko, kurz, cas)
            VALUES ('". $_POST['meno']."','". $_POST['priezvisko']."','". $_POST['kurz']."','". $_POST['cas']."')";

            
            if (mysqli_query($conn, $sql)) {
                echo "Prihláška úspešne zaregistrovaná v našom systéme";
            }else {
                echo "Nastala chyba. Kontaktujte prosím administrátora" . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
}

?>
<link rel="stylesheet" href="../login_reg.css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../../assets/logo.png" class="img-fluid" id="icon" alt="User Icon" />
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
            <input type="text" id="login" class="fadeIn second" name="kurz" placeholder="Názov tábora, rezervacia telocvične/oslavy">
        </div>
        
        <div class="form-group">
            <input type="text" id="login" class="fadeIn second" name="cas" placeholder="Vyhovujúce časy , oddeliť čiarkou">
        </div>
      <input type="submit" class="fadeIn fourth" name="btn" value="Rezervácia">
    </form>
  </div>
</div>
