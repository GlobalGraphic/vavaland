<?php

// sportove kurzy
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

        $sql = "INSERT INTO sportove (nadpis, content)
            VALUES ('". $_POST['nadpis']."','". $_POST['editor']."')";

            
            if (mysqli_query($conn, $sql)) {
                echo "kurz naplneny";
            }else {
                echo "Error" . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
    }


    // fyzio kurzy

    if(isset($_POST['butt'])) {

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

        $sql = "INSERT INTO fyzio (nadpis, content)
            VALUES ('". $_POST['nad']."','". $_POST['editor']."')";

            
            if (mysqli_query($conn, $sql)) {
                echo "kurz naplneny";
            }else {
                echo "Error" . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
    }

    //doucovanie

    if(isset($_POST['but'])) {

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

        $sql = "INSERT INTO doucovanie (nadpis, content)
            VALUES ('". $_POST['bbtn']."','". $_POST['editor']."')";

            
            if (mysqli_query($conn, $sql)) {
                echo "kurz naplneny";
            }else {
                echo "Error" . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
    }


    //doucovanie

    if(isset($_POST['buts'])) {

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

        $sql = "INSERT INTO doucovanie (nadpis, content)
            VALUES ('". $_POST['haha']."','". $_POST['editor']."')";

            
            if (mysqli_query($conn, $sql)) {
                echo "kurz naplneny";
            }else {
                echo "Error" . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
    }


    //doucovanie

    if(isset($_POST['buts1'])) {

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

        $sql = "INSERT INTO tabory (nadpis, content)
            VALUES ('". $_POST['haha1']."','". $_POST['editor']."')";

            
            if (mysqli_query($conn, $sql)) {
                echo "kurz naplneny";
            }else {
                echo "Error" . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
    }




?>
<script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<h3>športové kurzy</h3>


<form action="#" method="POST">
    <div class="form-group">
        <label for="time">Nadpis</label>
        <input type="text" class="form-control" name="nadpis" id="time" placeholder="zadajte nadpis" required>
    </div>
    
    <!-- Textarea -->
<div class="form-group">
<label class="col-md-8 control-label" for="text">Text</label> 
<div class="col-md-8">
  <textarea name="editor" id="editor" rows="10" cols="100"></textarea>
  </div>
</div>
    <input type="submit" name="btn" value="pridaj" class="btn btn-primary">
</form>


<br><br><br><br><br><br><br>

<h3>FYZIO kurzy</h3>


<form action="#" method="POST">
    <div class="form-group">
        <label for="time">Nadpis</label>
        <input type="text" class="form-control" name="nad" id="time" placeholder="zadajte nadpis" required>
    </div>
    
    <!-- Textarea -->
<div class="form-group">
<label class="col-md-8 control-label" for="text">Text</label> 
<div class="col-md-8">
  <textarea name="editor" id="editor" rows="10" cols="100"></textarea>
  </div>
</div>
    <input type="submit" name="butt" value="pridaj" class="btn btn-primary">
</form>

<br><br><br><br><br><br><br>


<h3>Doučovanie, jazykové a iné kurzy</h3>


<form action="#" method="POST">
    <div class="form-group">
        <label for="time">Nadpis</label>
        <input type="text" class="form-control" name="bbtn" id="time" placeholder="zadajte nadpis" required>
    </div>
    
    <!-- Textarea -->
<div class="form-group">
<label class="col-md-8 control-label" for="text">Text</label> 
<div class="col-md-8">
  <textarea name="editor" id="editor" rows="10" cols="100"></textarea>
  </div>
</div>
    <input type="submit" name="but" value="pridaj" class="btn btn-primary">
</form>


<br><br><br><br><br><br><br>


<h3>Dospely</h3>


<form action="#" method="POST">
    <div class="form-group">
        <label for="time">Nadpis</label>
        <input type="text" class="form-control" name="haha" id="time" placeholder="zadajte nadpis" required>
    </div>
    
    <!-- Textarea -->
<div class="form-group">
<label class="col-md-8 control-label" for="text">Text</label> 
<div class="col-md-8">
  <textarea name="editor" id="editor" rows="10" cols="100"></textarea>
  </div>
</div>
    <input type="submit" name="buts" value="pridaj" class="btn btn-primary">
</form>

<br><br><br><br><br><br><br>


<h3>Oslavy a denné tábory</h3>


<form action="#" method="POST">
    <div class="form-group">
        <label for="time">Nadpis</label>
        <input type="text" class="form-control" name="haha1" id="time" placeholder="zadajte nadpis" required>
    </div>
    
    <!-- Textarea -->
<div class="form-group">
<label class="col-md-8 control-label" for="text">Text</label> 
<div class="col-md-8">
  <textarea name="editor" id="editor" rows="10" cols="100"></textarea>
  </div>
</div>
    <input type="submit" name="buts1" value="pridaj" class="btn btn-primary">
</form>


































<script>
  CKEDITOR.replace('editor');
</script>