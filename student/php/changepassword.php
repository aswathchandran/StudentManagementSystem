<?php
   require '../dbconfig/config.php'; 
   session_start();
?>
<html>
	<head>
		<title>ChangePassword</title>
		<style>
			@viewport
			{
				zoom:1.0;
				width:extended-to-zoom;	
			}
			@-ms-viewport
			{
				width:extended-to-zoom;	
				zoom:1.0;
			}
			a{
				color: red;
			}
			a:hover
			{
			text-decoration: none;
			}
</style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<link rel="stylesheet" href="../css/style.css">
	</head>
	<body style="background-color:#ced6e0">
		<div id="main-wrapper">
			<form class="password-change" action="changepassword.php" method="post">
				<strong><label>OldPassword</label></strong>
				<input type="password" name="oldpassword" class="inputvalue" placeholder="Type your name"><br><br>
				<hr>
				<strong><label>NewPassword</label></strong>
				<input type="password" name="newpassword" class="inputvalue" placeholder="Type your name"><br><br>
				<strong><label>ConfirmPassword</label></strong>
				<input type="password" name="confirmpassword" class="inputvalue" placeholder="Type your name" ><br><br>
				<button class="btn btn-success" type="submit"  name="changepassword-button">Change Password</button>
			</form>
			<?php
				if(isset($_POST['changepassword-button']))
				{
					$oldpassword=$_POST['oldpassword'];
					$username=$_SESSION['username'];
					$query="select * from registeration WHERE username='$username' AND password='$oldpassword'";
					$query_run=mysqli_query($con,$query);
					if(mysqli_num_rows($query_run)>0)
					{
						$newpassword=$_POST['newpassword'];
						$repeatpassword=$_POST['confirmpassword'];
						if($newpassword==$repeatpassword)
						{
							$query="update registeration SET password='$newpassword' WHERE username='$username'";
							$query_run=mysqli_query($con,$query);
							if($query_run)
							{
								session_destroy();
								//echo '<script type="text/javascript">alert("password changed")</script>';
								header('location:../index.php');	
							}
							else
							{
								echo '<script type="text/javascript">alert("password unchanged")</script>';
							}
						}
						else
						{
							echo '<script type="text/javascript">alert("Your password doesnt match")</script>';
							
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("please enter the Old password correctly...!")</script>';
					}
					
					
				}
			?>
		</div>
	</body>	
</html>