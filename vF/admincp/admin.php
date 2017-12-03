<?php
/* Displays all error messages */
session_start();
require '../connect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="../css/admin-css.css">
</head>
<?php
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == false || ($_SESSION['type'] && $_SESSION['type'] == 2)) {
    header('location: ../index.php');
}
if (isset($_POST['adduser'])) { //user logging in
	require 'adduser.php';
}	
?>
<body>
<div>
	<div class="admin-panel">
		<h1>Hello, <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name'] ?></h1>
		<h3>Admin CP</h3>
		<button onclick="document.getElementById('add-user').style.display='block'" class="btn btn-primary btn-block btn-large admin-tab admin-add"/>Add User</button>
		<button onclick="document.getElementById('remove-user').style.display='block'" class="btn btn-primary btn-block btn-large admin-tab admin-add"/>Remove User</button>
		<a href="../logout.php"><button class="btn btn-primary btn-block btn-large admin-tab" name="logout" />Logout</button></a>
	</div>
	<div class="add-user modal" id="add-user">
		<span onclick="document.getElementById('add-user').style.display='none'" class="close" title="Close PopUp">&times;</span>
		<div class="form-container">
		<h1 style="text-shadow: 0px 0px 15px black;">New Employee</h1>
			<form method="post" action="admin.php" class="modal-content animate">
				<input type="text" name="firstname" placeholder="First Name" required="required" />
				<input type="text" name="lastname" placeholder="LastName" required="required" />
				<input type="text" name="email" placeholder="Email" required="required" />
				<input type="password" name="password" placeholder="Password" required="required" />
				<button type="Add" class="btn btn-primary btn-block btn-large" name="adduser">Finish!</button>
			</form>
		</div>
	</div>
	<div class="add-user modal" id="remove-user">
		<span onclick="document.getElementById('remove-user').style.display='none'" class="close" title="Close PopUp">&times;</span>
		<div class="form-container">
		<h1>Remove Employee</h1>
			<form method="post" action="admin.php" class="modal-content animate">
				<input type="text" name="email" placeholder="Employee Email" required="required" />
				<input type="password" name="password" placeholder="Admin Password" required="required" />
				<button type="Remove" class="btn btn-primary btn-block btn-large" name="removeuser">Finish!</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>