<?php
?>

<html>
<head>
<title>Login</title>

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
</style>
</head>
<body style="background-color:#ced6e0">
	<div id="main-wrapper">
	<center>
	<h2>Login Form</h2>
	<img src="images/avatar.png" class="avatar"/>
	</center><br>
	<form action="index.php" method="post" class="login_form">
		<strong><label>UserName</label></strong>
		<input type="text" class="inputvalue" placeholder="Type your name"><br><br>
		<strong><label>Password</label></strong>
		<input type="password" class="inputvalue" placeholder="Type your name"><br><br>
		<button type="submit" id="login_button">Login</button>
		<button type="button" id="registeration_button">Registeration</button><br>
	</form>
	</div>
</body>
</html>