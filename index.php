<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<style>
		.container
		{
			
			height: 300px;
			width:500px;
			margin: 150px auto;
		}
		.btn
		{
			margin-top: 130px;
			margin-left: 3px;
			width:150px;
		}
	</style>
</head>
<body>
    <nav class="navbar bg-dark fixed-top ">
		<h2 style="color:white">Student Management System</h2>
	</nav>
    <div class="container">
		<a href="student/index.php"><button type="button" style="width:150ox" class="btn btn-success">Student</button></a>
		<a href="staff/index.php"><button type="button" class="btn btn-success" style="width:150ox">Teacher</button></a>
		<a href="admin/index.php"><button type="button" class="btn btn-success" style="width:150ox">Admin</button></a>
    </div>
    
</body>
</html>