<?php

if (isset($_POST['btn'])) {

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

    $sql = "SELECT * from news";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

        $recipients = array(
            $email = $row['email']
         );
    }

  
    $msg = "";
  /*include_once "phpmailer/PHPMailer.php";
  include_once "phpmailer/Exception.php";
  include_once "phpmailer/SMTP.php";*/
      $predmet = $_POST['predmet'];
      $msg= '<div class="jumbotron">'. $_POST['sprava'].'</div>';
  
      require('phpmailer/PHPMailerAutoload.php');
    
        $mail = new PHPMailer();
        $mail->CharSet = "UTF-8";
        $mail->addAddress($email);
        $mail->setFrom('info@vavaland.sk');
        $mail->Subject = $predmet;
        $mail->isHTML(true);
        $mail->Body = $msg;
  
        if ($mail->send()) {
            echo "email odoslany";
        } else{
           //$msg = "Vyskitla sa chyba, skúste to znova!";
          echo 'nastala chyba';
         }

         $conn->close();
  }

?>

<form id="contact_form" method="POST" class="form-horizontal" action="#">
<div class="container">
    <div class="row">
        <div class="col-md-8">
                <div id="form_row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subject">
                                Predmet</label>
                        <input type="text" placeholder="zajdate predmet" class="form-control" name="predmet" required>
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
