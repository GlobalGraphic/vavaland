<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $cislo = $adresa = $priezvisko = $date = $email = $confirm_password = "";
$username_err = $password_err = $cislo_err = $adresa_err = $date_err = $priezvisko_err = $email_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Zadajte vaše meno";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "Učet s takým meno už existuje!";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }

    // Validate surname
    if(empty(trim($_POST["priezvisko"]))){
        $priezvisko_err = "Prosim zadajte váše priezvisko";     
    }else{
        $priezvisko = trim($_POST["priezvisko"]);
    }
    
    // Validate number
    if(empty(trim($_POST["cislo"]))){
        $cislo_err = "Prosim zadajte váše Tel. číslo";     
    }else{
        $cislo = trim($_POST["cislo"]);
    }

    // Validate address
    if(empty(trim($_POST["adresa"]))){
        $adresa_err = "Prosim zadajte vášu adresu";     
    }else{
        $adresa = trim($_POST["adresa"]);
    }

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Prosim zadajte váš email";     
    }else{
        $email = trim($_POST["email"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Prosím zadajte vaše heslo";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Heslo musí obsahovať najmenej 6 znakov";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Prosím potvrdte vaše heslo";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Hesla sa nezhodujú";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($date_err) && empty($cislo_err) && empty($adresa_err) && empty($email_err) && empty($priezvisko_err)  && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, priezvisko, email, cislo, adresa, password) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssiss", $param_username, $param_priezvisko, $param_email, $param_cislo, $param_adresa, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email = $email;
            $param_cislo = $cislo;
            $param_priezvisko = $priezvisko;
            $param_adresa = $adresa;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: prihlasenie.php");
                
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="vitajte v modernej športovo-vzdelávacej krajine ktorá sídli v mestskej časti Ružinov. Ponúkame obrovskú a fantastickú škálu športových a voľnočasových aktivít pre batoľatá, deti, mladých ľudí a rodiny. Ponúkame veľké množstvo aktivít vrátane cvičenia v telocvični pre deti a dospelých, narodeninových osláv, športových, umeleckých a hobby krúžkov, vzdelávacích aktivít alebo len tak príjemné posedenie pri kávičke.">
<meta name="robots" content="index, follow">
<meta name="keywords" content="športove kurzy, fyzio kurzy, doučovanie, jazykové kurzy, deti, Tvorivá zábava, športové Aktivity">
<meta name="author" content="Global Graphic & Design">
<link rel="icon" href="assets/logo.png" type="image/gif" sizes="16x16">
    <title>Registrácia</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="login_reg.css">
</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../assets/logo.png" class="img-fluid" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <input type="text" id="login" class="fadeIn second" name="username" value="<?php echo $username; ?>" placeholder="Meno">
            <div class="help-block"><?php echo $username_err; ?></div>
        </div>

        <div class="form-group <?php echo (!empty($priezvisko_err)) ? 'has-error' : ''; ?>">
            <input type="text" id="login" class="fadeIn second" name="priezvisko" value="<?php echo $priezvisko; ?>" placeholder="Priezvisko">
            <div class="help-block"><?php echo $priezvisko_err; ?></div>
        </div>

        <div class="form-group <?php echo (!empty($cislo_err)) ? 'has-error' : ''; ?>">
            <input type="number" id="login" class="fadeIn second" name="cislo" value="<?php echo $cislo; ?>" placeholder="Tel. číslo">
            <div class="help-block"><?php echo $cislo_err; ?></div>
        </div>

        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
            <input type="email" id="login" class="fadeIn second" name="email" value="<?php echo $email; ?>" placeholder="Email">
            <div class="help-block"><?php echo $email_err; ?></div>
        </div>

        <div class="form-group <?php echo (!empty($adresa_err)) ? 'has-error' : ''; ?>">
            <input type="text" id="login" class="fadeIn second" name="adresa" value="<?php echo $adresa; ?>" placeholder="Adresa">
            <div class="help-block"><?php echo $adresa_err; ?></div>
        </div>

        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Heslo" value="<?php echo $password; ?>">
            <div class="help-block"><?php echo $password_err; ?></div>
        </div>

        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <input type="password" id="password" class="fadeIn third" name="confirm_password" placeholder="Potvrdenie hesla" value="<?php echo $confirm_password ;?>">
            <div class="help-block"><?php echo $confirm_password_err; ?></div>
        </div>
      <input type="submit" class="fadeIn fourth" value="Registrácia">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="forgot.php">Zabudnuté heslo?</a><br>
      <a class="underlineHover" href="registracia.php">Registrácia</a>
    </div>

  </div>
</div>
    
</body>
</html>