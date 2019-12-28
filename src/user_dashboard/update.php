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

	$user = $_SESSION['id'];
	echo $user;

	//	 vlozenie udajov
	$sql = "UPDATE schedules SET number = " . $_POST["value"] . " WHERE `id` = " . $_POST["id"];

	// vlozi session meno(prihlasovacie meno) do db aby si vedelo ktory user je uz registrovany
	$sql2 = "UPDATE schedules SET rezervovane = ". $_SESSION['id'] ." WHERE `id` = " . $_POST["id"];
	//	kontrola ci sa udaje uspesne vlozili
	if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
		echo "Uspesne rezervovane!";
	} else {
		echo "ERROR" . $sql . " " . $sql2 . " " . mysqli_error($conn);
	}

	$conn->close();
}
