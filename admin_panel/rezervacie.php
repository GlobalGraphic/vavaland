<?php 
require_once "config.php";

// fetch podla id v db
$sql="SELECT * FROM rezervacie";

$result=mysqli_query($mysqli,$sql);

// Associative array
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $poradie = $row["id"];
    $user_name = $row['user_id'];
    $user_surname = $row['user_surname'];
    $kurz = $row['kurz'];
?>
<div class="container">
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Meno</th>
        <th scope="col">Priezvisko</th>
        <th scope="col">Kurz</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><?php echo $poradie;?></td>
        <td><?php echo $user_name;?></td>
        <td><?php echo $user_surname;?></td>
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