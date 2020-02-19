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

      $sql = "INSERT INTO hodnotenie (nadpis, text, meno, body)
        VALUES ('". $_POST['nadpis']."','". $_POST['text']."','". $_POST['map']."','". $_POST['body']."')";

        
        if (mysqli_query($conn, $sql)) {
            echo "Ďakujeme za vaše hodnotenie. Tím Vavaland";
        }else {
            echo "Nastala chyba. Kontaktujte prosím administrátora" . $sql . "" . mysqli_error($conn);
        }
        $conn->close();
}




?>

<link rel="stylesheet" href="../login_reg.css">

<div class="container">
    <h2>Hodnotenie</h2>
    <p>Chcete odhodnotiť naše služby, personál ? Vo formulári vyplnte ako sa Vám pozdávali naše služby. Ďakujeme.</p>
</div>

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
            <input type="text" id="login" class="fadeIn second" name="nadpis" placeholder="Nadpis hodnotenia">
        </div>

        <div class="form-group">
            <input type="text" id="login" class="fadeIn second" name="text" placeholder="Hodnotenie">
        </div>

        <div class="form-group">
            <input type="text" id="login" class="fadeIn second" name="map" placeholder="Meno a priezvisko">
        </div>
        
        <div class="form-group">
            <input type="text" id="login" class="fadeIn second" name="body" placeholder="Bodovanie : napr. 9/10">
        </div>
      <input type="submit" class="fadeIn fourth" name="btn" value="Poslať hodnotenie">
    </form>
  </div>
</div>