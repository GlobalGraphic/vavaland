<script>
setTimeout(function(){
   window.location.reload(1);
}, 5000);
</script>
<?php 
require_once "config.php";

// fetch podla id v db
$sql="SELECT * FROM users";

$result=mysqli_query($mysqli,$sql);

// Associative array
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $poradie = $row["id"];
    $username = $row["username"]; 
    $priezvisko = $row["priezvisko"];
    $email = $row["email"];
    $cislo = $row["cislo"];
    $adresa = $row["adresa"];
?>

<div class="container">
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Meno</th>
        <th scope="col">Priezvisko</th>
        <th scope="col">Email</th>
        <th scope="col">Tel.číslo</th>
        <th scope="col">adresa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><?php echo $poradie;?></td>
        <td><?php echo $username;?></td>
        <td><?php echo $priezvisko;?></td>
        <td><?php echo $email;?></td>
        <td><?php echo $cislo;?></td>
        <td><?php echo $adresa;?></td>
        </tr>
    </tbody>
    </table>
</div>
<?php 
} 
  mysqli_free_result($result);
   mysqli_close($mysqli);
?> 