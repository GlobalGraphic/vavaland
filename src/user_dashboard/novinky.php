<?php
session_start();

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

// fetch podla id v db
$sql="SELECT * FROM rezervacie WHERE `user_id` = '".$_SESSION['email']."'";

$result=mysqli_query($mysqli,$sql);

// Associative array
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $poradie = $row["id"];
    $kurz = $row['kurz'];
?>
<div class="container">
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Kurz</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><?php echo $poradie;?></td>
        <td><?php echo $kurz;?></td>
        </tr>
    </tbody>
    </table>
</div>

<?php 
} 
  mysqli_free_result($result);
   mysqli_close($mysqli);
?> 