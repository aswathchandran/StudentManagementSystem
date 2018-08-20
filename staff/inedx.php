<?php
   require './dbconfig/config.php'; 
?>

<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css">
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
		+
		text-decoration: none;
	}
</style>
</head>
<body style="background-color:#ced6e0">
	<div id="main-wrapper">
	<center>
	<h2>Staff Login Form</h2>
	<img src="images/avatar.png" class="avatar"/>
	</center><br>
	<form action="index.php" method="post" class="login_form">
		<strong><label>UserName</label></strong>
		<input type="text" name="username" class="inputvalue" placeholder="Type your name"><br><br>
		<strong><label>Password</label></strong>
		<input name="password" type="password" class="inputvalue" placeholder="Type your name"><br><br>
		<button class ="btn"  type="submit" name="login" id="login_button">Login</button>
		<a href="php/registeration.php"><button type="button" class ="btn" id="registeration_button">Registeration</button></a><br>
	<a href="./php/forgotpassword.php">forgot password</a>
	</form>
	
	<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$encrypted_password=md5($password);
			$query="select * from staff_register WHERE username='$username' AND password='$password'";
			$query_run=mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				session_start();
				$_SESSION['username']=$username;
				header('location:./php/home.php');
			}
			else
			{
				echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
				
			}
			
		}
	?>
	</div>
	<nav class="navbar bg-dark fixed-top ">
		<h2 style="color:white">Student Management System</h2>
	</nav>
</body>
</html>