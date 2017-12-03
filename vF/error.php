<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Failed!</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="error-fail">
    <h1>Error!</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button class="btn btn-primary btn-block btn-large"/>Back</button></a>
</div>
</body>
</html>