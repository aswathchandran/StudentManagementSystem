<?php
?>

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
	<form action="register.php" method="post" class="login_form">
		<strong><label>UserName</label></strong>
		<input type="text" class="inputvalue" placeholder="Type your name"><br><br>
		<strong><label>Email</label></strong>
		<input type="text" class="inputvalue" placeholder="Type your name"><br><br>
		<strong><label>Password</label></strong>
		<input type="password" class="inputvalue" placeholder="Type your name"><br><br>
		<strong><label>Repeat Password</label></strong>
		<input type="password" class="inputvalue" placeholder="Type your name"><br><br>
		<button type="submit" id="register_button">Register</button>
		<button type="reset" id="reset_button">Reset</button>
		<input type="button" id="backtologin" href="../index.php" value="Back To Login">
	</form>
	</div>
</body>
</html>