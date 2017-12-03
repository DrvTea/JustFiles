<?php
	require 'connect.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<?php
if (isset($_POST['login'])) { //user logging in
	require 'login.php';
}
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
	if($_SESSION['type'] == 1) {
		header ("location: admincp/admin.php");
	} else {
		header ("location: employee/employee.php");
	}
}
?>
<body>
  <div class="login">
	<h1>Member Login</h1>
    <form method="post" action="index.php">
    	<input type="text" name="email" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
    </form>
</div>
</body>
</html>
