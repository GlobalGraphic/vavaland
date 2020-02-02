
<br><br><br>
<?php
define('DB_SERVER', 'mysql80.websupport.sk:3314');
define('DB_USERNAME', 'l2mlyiv5');
define('DB_PASSWORD', 'Nn4&,~TpYt');
define('DB_NAME', 'l2mlyiv5');

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$identifikator = mysqli_real_escape_string($conn, $_GET['idd']);

$sql= "SELECT * FROM clanky WHERE id = $identifikator";

$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $nadpis = $row["nadpis"]; 
  $textik = $row["textik"];
  $content = $row["content"];
  $datum = $row["datum"];
  $autor = $row["autor"];
  $kategorie = $row["kategorie"];
  $id = $row ["id_clanku"];
?>

<div class="container">
  <div class="row" id="row">
    <div class="col">
    <h2 class="nadpis_read"><?php echo $nadpis ?></h2>
    <h4 class="text-secondary"><?php echo $datum?>&nbsp;&nbsp;&nbsp;<?php echo $autor?>&nbsp;&nbsp;&nbsp;<?php echo $kategorie?></h4>
    <div id="content">
      <?php echo $textik?><br>
    </div>
    <div id="content">
      <?php echo $content?><br>
        </div> 
    <a href="blog.php" class="back_to_blog">Back to blog</a>
    </div>
  </div>
</div>

<?php 
  mysqli_free_result($result);
   mysqli_close($conn);
?>