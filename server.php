<?php

	$uid="";
	$name="";
	$age="";
	$mail="";
	$_SESSION['start']="";

	$db=mysqli_connect('localhost','root','','registration');
	if(isset($_POST['submit'])){
		$uid=mysqli_real_escape_string($db, $_POST['uid']);
		$name=mysqli_real_escape_string($db, $_POST['name']);
		$age=mysqli_real_escape_string($db, $_POST['age']);
		$mail=mysqli_real_escape_string($db, $_POST['mail']);
		$pwd=mysqli_real_escape_string($db, $_POST['pwd']);
		echo $uid;
		echo $name;
		$query="INSERT INTO users (	uid,pwd,NAME,age,mail) VALUES('$uid','$pwd','$name','$age','$mail')";
		$run = $db->query($query);

	}
?>