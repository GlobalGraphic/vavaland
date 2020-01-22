<?php 
require_once "config.php";

// fetch podla id v db
$sql="SELECT * FROM oslavy";

$result=mysqli_query($mysqli,$sql);

// Associative array
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $poradie = $row["id"];
    $meno = $row['meno'];
    $priezvisko= $row['priezvisko'];
    $kurz = $row['kurz'];
    $cas = $row['cas'];
?>
<div class="container">
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Meno</th>
        <th scope="col">Priezvisko</th>
        <th scope="col">Kurz</th>
        <th scope="col">Čas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><?php echo $poradie;?></td>
        <td><?php echo $meno;?></td>
        <td><?php echo $priezvisko;?></td>
        <td><?php echo $kurz;?></td>
        <td><?php echo $cas;?></td>
        </tr>
    </tbody>
    </table>
</div>

<?php 
} 
  mysqli_free_result($result);
   mysqli_close($mysqli);
?> 