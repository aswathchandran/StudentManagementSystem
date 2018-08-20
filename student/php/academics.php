<?php
   require '../dbconfig/config.php'; 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Student Management System</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 5rem;
        }
        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
		.btn
		{
			width: 100px;
		}
    </style>
</head>

    
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">SMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Profile<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">LeaderBoard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="academics.php">Academics</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
                    <div class="dropdown-menu" aria -labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Placements</a>
                        <a class="dropdown-item" href="#">Co-curricular</a>
                        <a class="dropdown-item" href="#">Extra Curicular</a>
						<a class="dropdown-item" href="#">Settings</a>
						<a class="dropdown-item" href="changepassword.php">Change password</a>
                    </div>
                </li>
            </ul>
           	<form method="post" action="home.php">
				
				<button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="logout-button">LogOut</button>
           	</form>
        </div>
    </nav>
	<?php
		echo "WELCOME ";echo $_SESSION['username'];
	?>
	<div class="container">
		<form action="academics.php" method="post">
			<table class="table table-bordered">
				<thead>
				<tr style="width:99%">
					<td style="width:25%">semester</td>
					<td style="width:25%">GPA</td>
					<td style="width:44%">Link to Marksheet</td>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td style="width:25%" >
							<select class="inputvalue" style="width:100%" name="sem" required>
								<option value="1">I</option>
								<option value="2">II</option>
								<option value="3">III</option>
								<option value="4">IV</option>
								<option value="5">V</option>
								<option value="6">VI</option>
								<option value="7">VII</option>
								<option value="8">VIII</option>
							</select>
						</td>
						<td style="width:25%"><input type="text" style="width:90%" class="inputvalus" placeholder="Enter your GPA" name="gpa"></td>
						<td style="width:44%" required><input type="text" style="width:90%" class="inputvalus" placeholder="Enter Your Link To Marksheet" name="link" required></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" name="academics-submit" class="btn btn-success ">submit</button>
		</form>
	</div>
	<?php
		if(isset($_POST["logout-button"]))
		{
			session_destroy();
			header('location:../index.php');
		}
		if(isset($_POST["academics-submit"]))
		{
			$username=$_SESSION['username'];
			//echo $username;
			$sem=$_POST['sem'];
			$str_gpa=$_POST['gpa'];
			$link=$_POST['link'];
			$int_gpa=floatval($str_gpa);
			switch($sem)
			{
				case '1':
					$query="update semester SET semester1='$int_gpa',result1='$link' WHERE username ='$username'";
					$query_run=mysqli_query($con,$query);
					if($query_run)
					{
						echo '<script type="text/javascript">alert("Entered sucessfully")</script>';
					}
					else
					{
						echo '<script type="text/javascript">alert("Failed")</script>';
					}
					break;
			}
		}
		
	?>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    
</body>
</html>