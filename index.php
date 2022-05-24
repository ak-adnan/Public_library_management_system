<?php
require('dbconn.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Login Pannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e3d8f46d80.js" crossorigin="anonymous"></script>
    <link href="css/style1.css" rel="stylesheet">
  </head>
  <body>
    
	<h1>PUBLIC LIBRARY MANAGEMENT SYSTEM</h1>



	<div class="container">
  <div class="row row-cols-4">
    <div class="col-md-6"><div class="login">
					<h2 class =" fs-2">Sign In</h2>
					<form action="index.php" method="post">

					<div class="mb-3">
    					<input type="text" class="form-control"Name="RollNo" placeholder="ID" required="">
    
  					</div>
					  <div class="mb-3">
    					<input type="text" class="form-control"type="password" Name="Password" placeholder="Password" required="">
    
  					</div>

						
					
					
					<div class="send-button">
						<!--<form>-->
							<input class="btn btn-primary" type="submit" name="signin"; value="Sign In">
						</form>
					</div>
					
					<div class="clear"></div>
				</div></div>
    <div class="col-md-6">
		<div class="register">
					<h2>Sign Up</h2>
					<form action="index.php" method="post">
					<div class="mb-3">
    					<input class="form-control"type="text" Name="Name" placeholder="Name" required >
    
  					</div>
					  <div class="mb-3">
    					<input class="form-control"type="text" Name="Email" placeholder="Email" required >
    
  					</div>
					  <div class="mb-3">
    					<input class="form-control" type="password"   Name="Password" placeholder="Password" required >
    
  					</div>
					  <div class="mb-3">
    					<input class="form-control" type="text" Name="PhoneNumber" placeholder="Phone Number" required >
    
  					</div>

					  <div class="mb-3">
    					<input class="form-control" type="text" Name="RollNo" placeholder="ID" required="" >
    
  					</div>
					  
					
					
					<div class="send-button">
						<input class="btn btn-primary" type="submit" name="signup" value="Sign Up">
						</form>
					</div>

  </div>
</div>

			<?php
			if(isset($_POST['signin']))
			{$u=$_POST['RollNo'];
			$p=$_POST['Password'];

			$sql="select * from LMS.user where RollNo='$u'";

			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$x=$row['Password'];
			$y=$row['Type'];
			if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
			{//echo "Login Successful";
			$_SESSION['RollNo']=$u;


			if($y=='Admin')
			header('location:admin/index.php');
			else
			header('location:student/index.php');
				
			}
			else 
			{ echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
			}


			}

			if(isset($_POST['signup']))
			{
			$name=$_POST['Name'];
			$email=$_POST['Email'];
			$password=$_POST['Password'];
			$mobno=$_POST['PhoneNumber'];
			$rollno=$_POST['RollNo'];
			$category=$_POST['Category'];
			$type='Student';

			$sql="insert into LMS.user (Name,Type,Category,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rollno','$email','$mobno','$password')";

			if ($conn->query($sql) === TRUE) {
			echo "<script type='text/javascript'>alert('Registration Successful')</script>";
			} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<script type='text/javascript'>alert('User Exists')</script>";
			}
			}

			?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>
