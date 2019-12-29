<?php
session_start();
require_once "../config.php";

$idcko = $_SESSION['id'];
// fetch podla id v db
$sql="SELECT rezervovane FROM schedules";

$result=mysqli_query($mysqli,$sql);

// Associative array
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

        $rezervovane = $row['rezervovane'];
    if($rezervovane == $idcko) {
        echo "rezervovane";
    } else {
        echo "nerezervovane";
    }
?>

<p><?php echo $rezervovane;?></p>

<?php
} 
  mysqli_free_result($result);
   mysqli_close($conn);
?> 