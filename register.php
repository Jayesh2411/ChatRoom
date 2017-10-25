<?php
	include 'server.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register!</title>
</head>

<body>
	<h1>Welcome to ChatRoom! </h1>
	<h2>Fill your info !</h2>
	<form action="" method="POST">
		ID<input type="text" name="uid">
		<br>
		Name<input type="text" name="name">
		<br>
		Age<input type="text" name="age">	
		<br>
		Enter Password<input type="password" name="pwd">
		<br>
		Enter mail <input type="text" name="mail">
		<br>
		<input type="submit" value="Submit" name="submit">
	</form>
	<?php
		if(isset($_POST["submit"])){
			echo "Your data is saved!";
		}
	?>
</body>
</html>