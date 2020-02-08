<?php
session_start();

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

// get json from request
$_POST = json_decode(file_get_contents("php://input"), true);




if (isset($_POST["value"])) {


	$id = $_SESSION['id'];

	$sql3 = "SELECT * FROM users WHERE id = '".$_SESSION['id']."' ";

	$result=mysqli_query($conn,$sql3);

	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	$priezvisko = $row["priezvisko"];
	$email = $row["email"];

	//	 vlozenie udajov
	$sql = "UPDATE schedules SET number = " . $_POST["value"] . " WHERE `id` = " . $_POST["id"];

	// vlozi session meno(prihlasovacie meno) do db aby si vedelo ktory user je uz registrovany
	$sql2 = "INSERT INTO rezervacie(user_id,user_surname, kurz) VALUES ('".$_SESSION['email']."','".$priezvisko."','".$_POST['kurz']."')";
	//	kontrola ci sa udaje uspesne vlozili
	if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
		echo "Uspesne rezervovane!";
	} else {
		echo "ERROR" . $sql . " " . mysqli_error($conn);
	}

	//email notifikacia

	$msg = "";
/*include_once "phpmailer/PHPMailer.php";
include_once "phpmailer/Exception.php";
include_once "phpmailer/SMTP.php";*/

    $meno = $_SESSION['username'];
    $emailek = $email;
    $predmet = "oznámenie o rezervácií kurzu";
    $msg= '<div class="jumbotron">'. 'Ďakujeme za rezerváciu miesta na tomto kurze:' . '<br>' . $_POST['kurz'] .'<br>' . 'Tým vavaland.sk' .'</div>';

    require('phpmailer/PHPMailerAutoload.php');
  
      $mail = new PHPMailer();
      $mail->CharSet = "UTF-8";
      $mail->addAddress($emailek);
      $mail->setFrom('info@vavaland.sk');
      $mail->Subject = $predmet;
      $mail->isHTML(true);
      $mail->Body = $msg;

      if ($mail->send()) {
          header("Location: email_gen_msg.html");
      } else{
         //$msg = "Vyskitla sa chyba, skúste to znova!";
        echo 'nastala chyba';
       }

	$conn->close();
}
