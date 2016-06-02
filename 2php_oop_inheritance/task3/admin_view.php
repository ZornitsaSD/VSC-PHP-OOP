<?php 
include('includes.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<body>
<?php
if (isset($_POST['submit'])){
	$title = $_POST['title'];
	$content = $_POST['content'];

$admin = new Admin();
$admin->publish_messages($title, $content);

} else
{

 ?>
	<form action='' method='post'>
	The title:
	<input type='text' name='title'>
	<p>The Content:
	<input type='text' name='content'>
	</p>
	<input type='submit' name='submit' value='submit'>
	</form>
<?php 
}
?>
</body>
</html>