<?php
if(isset($_POST['btn'])) {

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

    $sql = "INSERT INTO novinky(nadpis, text)
        VALUES ('". $_POST['nadpis']."','". $_POST['text']."')";

        
        if (mysqli_query($conn, $sql)) {
            echo "novinky uspesne aktualizovane";
        }else {
            echo "Error" . $sql . "" . mysqli_error($conn);
        }
        $conn->close();
}


?>

<h3>Novinky</h3>


<form action="#" method="POST">
    <div class="form-group">
        <label for="time">Nadpis</label>
        <input type="text" class="form-control" name="nadpis" id="time" placeholder="zadajte nadpis" required>
    </div>
    
    <!-- Textarea -->
<div class="form-group">
<label class="col-md-8 control-label" for="text">Text</label> 
<div class="col-md-8">
  <textarea name="text" id="editor" rows="10" cols="100"></textarea>
  </div>
</div>
    <input type="submit" name="btn" value="pridaj" class="btn btn-primary">
</form>