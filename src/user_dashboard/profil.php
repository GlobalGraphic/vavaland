<?php
define('DB_SERVER', 'mysql80.websupport.sk:3314');
define('DB_USERNAME', 'l2mlyiv5');
define('DB_PASSWORD', 'Nn4&,~TpYt');
define('DB_NAME', 'l2mlyiv5');

// pokusenie sa spojit s mysql DB

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// kontrola pripojenia

if($mysqli === false) {
    die('ERROR: Nieje mozne sa spojit s DB'.  $mysqli->connect_error);
}


// odchytenie session id
$id = $_SESSION['id'];

// fetch podla id v db
$sql="SELECT * FROM users WHERE id = $id LIMIT 0, 1";

$result=mysqli_query($mysqli,$sql);

// Associative array
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $username = $row["username"]; 
    $priezvisko = $row["priezvisko"];
    $email = $row["email"];
    $cislo = $row["cislo"];
?>

<div class="container">
    <h2>Kontaktné informácie :</h2>
    <p class="infor"><b>Meno:</b> <?php echo $username;?></p>
    <p class="infor"><b>Priezvisko:</b>  <?php echo $priezvisko;?></p>
    <p class="infor"><b>Email:</b>  <?php echo $email;?></p>
    <p class="infor"><b>Tel.číslo:</b>  <?php echo $cislo;?></p>
    <p class="text-danger">* Pre zmenu kontaktných info. kontaktujte administrátora.</p>
    <a href="reset_hesla.php">Zmena hesla</a>
</div>

<?php 
} 
  mysqli_free_result($result);
   mysqli_close($mysqli);
?> 
