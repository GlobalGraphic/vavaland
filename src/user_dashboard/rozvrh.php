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

$sql = "SELECT * from schedules";

$result = mysqli_query($conn, $sql);

if ($result) {
	while ($row = $result->fetch_assoc()) {
		$rows[] = $row;
	}

	header_remove();
	header('Content-Type: application/json');
    echo json_encode($rows);

} else {
	echo "ERROR" . $sql . " " . mysqli_error($conn);
}

$conn->close();
?>