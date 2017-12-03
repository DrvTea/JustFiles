<?php
$email = $mysqli->escape_string($_POST['email']);
$find = $mysqli->query("SELECT * FROM users WHERE email='$email'");

// We know user email exists if the rows returned are more than 0
if ( $find->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: ../error.php");
}
else { // Email doesn't already exist in a database, proceed...
    // active is 0 by DEFAULT (no need to include it here)
	$user = $result->fetch_assoc();
	if( password_verify($_POST['password'], $_SESSION['password'])) {
			$sql = "DELETE FROM users WHERE users.email='$email'";
			
	}

    // Add user to the database
    if ( $mysqli->query($sql) ){
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] ="A user has been added!";
		header ("location: admin.php");
    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: addError.php");
    }
}
?>
