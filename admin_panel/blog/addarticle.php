<?php

	$nadpis = mysqli_real_escape_string($conn, $_POST['nadpis']);
	$content = mysqli_real_escape_string($conn, $_POST['editor']);
	$datum = mysqli_real_escape_string($conn, $_POST['datum']);
	$autor = mysqli_real_escape_string($conn, $_POST['autor']);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
	define('DB_SERVER', 'mysql80.websupport.sk:3314');
	define('DB_USERNAME', 'l2mlyiv5');
	define('DB_PASSWORD', 'Nn4&,~TpYt');
	define('DB_NAME', 'l2mlyiv5');

	$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	
	if($conn->connect_error){
		die("ERROR: Could not connect. " . $conn->connect_error);
		}


    if (isset($_POST["btn"])) {
        $sql = "INSERT INTO `clanky` (`nadpis`, `content`, `datum`, `autor`)
                VALUES (?, ?, ?, ?);";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $_POST['nadpis'], $_POST['editor'], $_POST['datum'], $_POST['autor'],);
        $stmt->execute();
        header("Location: admin_panel/welcome.php");
        $stmt->close();
    }
} catch (Exception $e) {
    echo "Something went wrong. Please try again later";
    error_log($e->getMessage());
}



?>