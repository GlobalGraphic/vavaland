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

$sql="SELECT * FROM clanky";
$result=mysqli_query($conn,$sql);

// Associative array
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  $nadpis = $row["nadpis"]; 
  $content = $row["content"];
  $datum = $row["datum"];
  $autor = $row["autor"];
  $identifikator = $row ["id"];

?>

<div class="container">
  <div class="row">
    <div class="col-lg-10">
    <h2 class="article_heading"><?php echo $nadpis ?></h2>
    <h4 class="text-secondary"><?php echo $datum?>&nbsp;&nbsp;&nbsp;<?php echo $autor?></h4>

<p style="float: left;"><?php
$string = $content;
if (strlen($string) > 200) {
$trimstring = substr($string, 0, 200);
} else {
$trimstring = $string;
}
echo $trimstring;
?></p><br>
    <a class="read_more" href="blog.php?id=read_more&idd=<?php echo $identifikator?>">Čítaj viac</a>
    </div>
  </div>
</div><br><br>

<?php 
} 
  mysqli_free_result($result);
   mysqli_close($conn);
?> 