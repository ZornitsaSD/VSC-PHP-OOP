<?php 
include('User.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
</head>
<body>
<?php 
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$user = new User();
	$user->login($username, $password, $role);

}
?>
	<form action="" method="post">
		<p>Username</p>
		<input type="text" name="username" value="">
		<p>Password</p>
		<input type="password" name="password" value="">
		<p>Role</p>
		<input type="text" name="role" value="">
		<input type="submit" name="submit" value="login">
	</form>
</body>
</html>