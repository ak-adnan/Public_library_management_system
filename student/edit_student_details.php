<?php
ob_start();
require('dbconn.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Update Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e3d8f46d80.js" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 " href="#">
            <img src="images/logo.jpg" alt="" width="140" height="35" class="d-inline-block align-text-top">
      </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap ">
      <a class="nav-link px-3 fs-6 "href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active fs-5" href="index.php">
              <span ><i class="fa-solid fa-house-user"></i></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="book.php">
            <i class="fa-solid fa-books"></i>
              All Books
            </a>
          <li class="nav-item">
            <a class="nav-link fs-5" href="current.php">
              Current Books
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Public Library Management System</h1>
      </div>
      <div>
        <div>
          <center>
            <div class="module">
                <div class="module-head">
                    <h3>Update Details</h3>
            </div>
            <div class="module-body">


            <?php
                $rollno = $_SESSION['RollNo'];
                $sql="select * from LMS.user where RollNo='$rollno'";
                $result=$conn->query($sql);
                $row=$result->fetch_assoc();

                $name=$row['Name'];
                $email=$row['EmailId'];
                $mobno=$row['MobNo'];
                $pswd=$row['Password'];
            ?>    
                    			
            <form class="form-horizontal row-fluid" action="edit_student_details.php?id=<?php echo $rollno?>" method="post">

            <div class="d-grid gap-3">
                <div class="p-2 bg-light border">
                    <div class="mb-3 row ">
                    <label for="Name" class="col-sm-2 col-form-label fs-5">Name:</label>
                    <div class="col-sm-10">
                    <input type="text" id= "Name"class="form-control" name="Name" value= "<?php echo $name?>" required>
                    </div>
                    </div>
                </div>
                        

                <div class="p-2 bg-light border">
                <div class="mb-3 row">
                    <label for="EmailId" class="col-sm-2 col-form-label fs-5 ">Email Id:</label>
                    <div class="col-sm-10">
                    <input type="text" id= "EmailId"class="form-control" name="EmailId" value= "<?php echo $email?>" required>
                    </div>
                    </div>
                </div>

                <div class="p-2 bg-light border">
                <div class="mb-3 row">
                    <label for="MobNo" class="col-sm-2 col-form-label fs-5">Mobile Number:</label>
                    <div class="col-sm-10">
                    <input type="text" id= "MobNo"class="form-control" name="MobNo" value= "<?php echo $mobno?>" required>
                    </div>
                    </div>
                </div>

                <div class="p-2 bg-light border">
                <div class="mb-3 row">
                    <label for="Password" class="col-sm-2 col-form-label fs-5">New Password:</label>
                    <div class="col-sm-10">
                    <input type="password" id= "Password"class="form-control" name="Password" value= "<?php echo $pswd?>" required>
                    </div>
                    </div>
                </div>
                
            </div>


                    <div class="control-group p-5 shadow p-3 mb-5 bg-body rounded">
                        <div class="controls">
                            <button type="submit" name="submit"class="btn btn-primary btn-lg ">
                         <center>Update Details</center></button>
                        </div>
                    <div>                                                                     

            </form>
                    		           
            </div>
            </div> 
                 
                <!-- footer starts  -->
                <div class="position-absolute top-100 start-50 translate-middle footer">
                 <div class="container">
                <b class="copyright">&copy; 2022 Public Library Management System </b>All rights reserved.
                </div>
                </div>
            </center> 

        </div>
      </div>
    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<?php
    if(isset($_POST['submit']))
    {
        $rollno = $_GET['id'];
        $name=$_POST['Name'];
        $category=$_POST['Category'];
        $email=$_POST['EmailId'];
        $mobno=$_POST['MobNo'];
        $pswd=$_POST['Password'];

    $sql1="update LMS.user set Name='$name', Category='$category', EmailId='$email', MobNo='$mobno', Password='$pswd' where RollNo='$rollno'";



    if($conn->query($sql1) === TRUE){
    echo "<script type='text/javascript'>alert('Success')</script>";
    header( "Refresh:0.01; url=index.php", true, 303);
    }
    else
    {//echo $conn->error;
    echo "<script type='text/javascript'>alert('Error')</script>";
    }
    }
?>

</body>
</html>
