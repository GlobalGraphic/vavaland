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

$poradie = mysqli_real_escape_string($conn, $_GET['idd']);

    $sql= "DELETE FROM clanky WHERE id = $poradie";

    //	kontrola ci sa udaje uspesne vymazali
	if (mysqli_query($conn, $sql)) {
        echo "Uspesne zmazane";
        header( "refresh:5;url= dashboard.php?id=welcome" );
    } else {
        echo "ERROR" . $sql . " " . mysqli_error($conn);
    }
        
     $conn->close();

?>