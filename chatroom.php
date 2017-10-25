<?php include 'server.php';
	session_start();
	$userid=$_SESSION['userid'];
 ?>	
<!DOCTYPE html> 
<html> 
<head> <title>ChatRoom</title> 
	<meta http-equiv="refresh" content="8" > 
<link rel="stylesheet" href="style.css" media="all" /> 
</head> 
<body> 
	<h2><i>Welcome to Chat Room!</i></h2>	
		<?php
		$query2="Select * from users where uid='$userid' ";
		$run2=$db->query($query2);
		if ($row=$run2->fetch_assoc()) {
			# code...
			$dn= $row['NAME'];
			$da= $row['age'];
			$dmail=$row['mail'];

		}
		?>
	<p>
		<h4>
			Name: <?php echo $dn?>
			<br>
			Age: <?php echo $da ?>
			<br>
			Mail: <?php echo $dmail?>
			<form action="" method="POST">
			<input type="submit" value="Delete MSGS" name="del">
			</form>
			<?php
				if(isset($_POST['del'])){
					$q="DELETE FROM chat1 where uid='$userid'";
					$run4=$db->query($q);

				}

			?>
		</h4>
	</p>
<div id="container"> 
	<div id="chat_box"> 
		<?php 

		$query1 = "SELECT * FROM chat1 ORDER BY date1";
		$run = $db->query($query1); 
		while($row = $run->fetch_assoc()):
		?>
		<div id="chat_data">
			<span style="color:green;">
				<?php echo $row['uid']; ?>
			 </span> 
			<span style="color:brown;">
				<?php echo $row['msg']; ?>
			</span>
			<span style="float:right;">
				<?php echo $row['date1']; ?>
				</span> </div> 
			<?php endwhile; ?>
		</div> 
	</div> 
 <form method="post" action="chatroom.php">
 	ID:<?php  echo $userid  ?>

 <textarea name="enter_message" placeholder="Enter Message">
 </textarea> <input type="submit" name="chat" value="Send!" /> 
 </form> 
 <?php if(isset($_POST['chat'])){ 
	 
		$msg = $_POST['enter_message']; 
		$query = "INSERT INTO chat1 (uid,msg)VALUES('$userid','$msg')"; 
		$run=$db->query($query); } 

?>
 </div>
 </body> 
 </html>

