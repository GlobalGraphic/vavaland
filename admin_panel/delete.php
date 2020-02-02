<?php
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

if (isset($_POST["id"])) {

	//	 vlozenie udajov
	$sql = "DELETE FROM schedules WHERE `id` = " . $_POST["id"];

	//	kontrola ci sa udaje uspesne vlozili
	if (mysqli_query($conn, $sql)) {
//		echo "Uspesne pridane";
	} else {
		echo "ERROR" . $sql . " " . mysqli_error($conn);
	}

	$conn->close();
}


?>