<?php
   require '../dbconfig/config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Registeration</title>

<link rel="stylesheet" href="../css/style.css">
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
</style>
</head>
<body style="background-color:#ced6e0">
	<div id="main-wrapper">
	<center>
	<h2>Registeration Form</h2>
	<img src="../images/avatar.png" class="avatar"/>
	</center><br>
	<form action="registeration.php" method="post" class="login_form">
		<strong><label>UserName</label></strong>
		<input type="text" class="inputvalue" placeholder="Type your name" name="username" required><br><br>
				
		<strong><label>FirstName</label></strong>
		<input type="text" class="inputvalue" placeholder="Type your name" name="firstname" required><br><br>
		
		<strong><label>LastName</label></strong>
		<input type="text" class="inputvalue" placeholder="Type your name" name="lastname" required><br><br>
		
		<strong><label>LastName</label></strong> 
			<select name="department" class="inputvalue" style="width:98%">
				<option value="CSE">B.E.Computer Science and Engineering</option>
				<option value="IT">B.Tech.Information Technology</option>
				<option value="EEE">B.E.Electrical and Electronics Engineering</option>
				<option value="EIE">B.E.Electrical Instrumenatation and Engineering</option>
				<option value="ECE">B.E.Electronics and Communication Engineering</option>
				<option value="MECHANICAL">B.E.MECHANCAL Engineering</option>
				<option value="MECHATRONICS">B.E.MECTRONICS Engineering</option>
				<option value="CIVIL">B.E.CIVIL Engineering</option>
				<option value="FT">B.TECH.Food Technology</option>
				<option value="CHEM">B.Tech.Chemical Engineering</option>
			</select><br><br>
		
		<strong><label>Email</label></strong>
		<input type="email" class="inputvalue" name="email" placeholder="Type your email" required><br><br>
		
		<strong><label>PhoneNumber</label></strong>
		<input type="tel" class="inputvalue" name="phonenumber" placeholder="Type your phonenumber" required><br><br>
		
		<strong><label>Password</label></strong>
		<input type="password" class="inputvalue" name="password" placeholder="Type your password" required><br><br>
		<strong><label>Repeat Password</label></strong>
		<input type="password" name="confrom-password" name="confirm-password" class="inputvalue" placeholder="Repeat your password" required><br><br>
		<button name="submit-button" type="submit" id="register_button">Submit</button>
		<button type="reset" id="reset_button">Reset</button>
		<a href="../index.php"><input type="button" id="backtologin" href="../index.php" value="Back To Login"></a>
	</form>
        <?php
			if(isset($_POST["submit-button"]))
			{
				//echo '<script type="text/javascript">alert("signup button clicked")</script>';
				$username=$_POST['username'];
				$firstname=$_POST['firstname'];
				$lastname=$_POST['lastname'];
				$dept=$_POST['department'];
				$email=$_POST['email'];
				$phonenumber=$_POST['phonenumber'];
				$password=$_POST['password'];
				$repeat_password=$_POST['confrom-password'];
				if($password==$repeat_password)
				{
					$query="select * from registeration WHERE username='$username'";
					$query_run=mysqli_query($con,$query);
					if(mysqli_num_rows($query_run)>0)
					{
						echo '<script type="text/javascript">alert("the user name alerady exits")</script>';
					}
					else
					{
						$query="select * from registeration WHERE email='$email'";
						$query_run=mysqli_query($con,$query);
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("the email already used")</script>';
						}
						else
						{
							$query="select * from registeration WHERE phonenumber='$phonenumber'";
							$query_run=mysqli_query($con,$query);
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript">alert("the phone number already used")</script>';
							}
							else
							{
								//$encrypted_password=md5($password);
								$query="insert into registeration values('$username','$firstname','$lastname','$dept','$email','$phonenumber','$password')";	
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript">alert("registeration sucessful")</script>';
								}
								else
								{
									echo '<script type="text/javascript">alert("registeration failed")</script>';
								}
							}
						}
					}				
				}
				else
				{
					echo '<script type="text/javascript">alert("password doesnt match")</script>';
				}
			}
						
        ?>
	</div>
</body>
</html>