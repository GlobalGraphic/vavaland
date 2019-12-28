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

        $sql = "INSERT INTO schedules (date, time, description, max)
            VALUES ('". $_POST['date']."','". $_POST['time']."','". $_POST['description']."','". $_POST['max']."')";

            
            if (mysqli_query($conn, $sql)) {
                echo "Rozvrh naplneny";
            }else {
                echo "Error" . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
    }

?>

<h3>tvorba rozvrhu</h3>


<form action="#" method="POST">
    <div class="form-group">
        <label for="date">Dátum</label>
        <input type="text" class="form-control" name="date" id="date" placeholder="zadajte dátum kurzu v tvare napr. 2019-08-12" required>
    </div>

    <div class="form-group">
        <label for="time">Čas</label>
        <input type="text" class="form-control" name="time" id="time" placeholder="zadajte čas kurzu od - do" required>
    </div>
    
    <div class="form-group">
        <label for="desc">Typ kurzu</label>
        <input type="text" class="form-control" name="description" id="desc" placeholder="zadajte názov kurzu" required>
    </div>

    <div class="form-group">
        <label for="max">Maximálny počet uchádzačov</label>
        <input type="number" class="form-control" name="max" id="max" placeholder="zadajte maximálny počet uchádzačov pre kurz" required>
    </div>
    <input type="submit" name="btn" value="Naplň rozvrh" class="btn btn-primary">
</form>