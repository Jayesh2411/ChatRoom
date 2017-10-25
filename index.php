<?php 
	include 'server.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ChatRoom</title>
</head>
<body background="back.jpg">
	
	<h1>Welcome to Chat Room!</h1>
	<h2>Login</h2>
	<form action="" method="POST">
		Username<input type="text" name="uid" />
		<br>Password<input type="Password" name="pwd" />
		<input type="submit" value="Login" name="login" />
	</form>
	<h2>Haven't Registered yet ? Register Now!</h2>
	<a href="register.php" ><h2 color="white">Sign Up!</h2></a>

	<h4>Contact: Jayesh Sinha </h4>
	<a href="jsinha2411@gmail.com"></a>
	<?php
		session_start();
		if (isset($_POST["login"])) {
			# code...
			$uid=$_POST['uid'];
			$pwd=$_POST['pwd'];
		    $query="SELECT *FROM USERS WHERE uid='$uid' and pwd='$pwd'";
		    $run=$db->query($query);
		    if(mysqli_num_rows($run)==1){
		    	
		    	$_SESSION['userid']=$uid;
		    	header('Location:chatRoom.php');
		    }
		}
	?>
</body>
</html>