<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Employee Panel</title>
  <link rel="stylesheet" href="../css/emp-css.css">
</head>
<?php
	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == false || ($_SESSION['type'] && $_SESSION['type'] == 1)) {
    header('location: ../index.php');
}
?>
<body>
<body>
<div>
	<div class="emp-panel">
		<h1>Hello, <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name'] ?></h1>
		<h3>Employee CP</h3>
		<a href="../logout.php"><button class="btn btn-primary btn-block btn-large admin-tab" name="logout" />Logout</button></a>
	</div>
	<div class="right-container">
		<p>asdsada</p>
	</div>
</div>
</body>
</html>