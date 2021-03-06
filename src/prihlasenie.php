<?php
// Initialize the session
session_start();
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Prosím zadajte váš email!";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Prosím zadajte vaše heslo!";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $email, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: user_dashboard/profile.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Heslo ktoré ste zadali nieje správne!";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $email_err = "Účet neexistuje!";
                }
            } else{
                echo "Oops! Niečo zlyhalo skúste to prosím neskôr.";
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
    <title>Prihlasenie</title>
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
        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
            <input type="text" id="login" class="fadeIn second" name="email" value="<?php echo $email; ?>" placeholder="E-mail">
            <div class="help-block"><?php echo $email_err; ?></div>
        </div>

        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Heslo">
            <div class="help-block"><?php echo $password_err; ?></div>
        </div>
      <input type="submit" class="fadeIn fourth" value="Prihlásenie">
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