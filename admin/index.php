<?php
require('dbconn.php');
?>

<?php 
if ($_SESSION['RollNo']) {
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Admin Homepage</title>
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
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 fs-6" href="logout.php">Sign out</a>
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

          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="student.php">
              <span data-feather="file"></span>
              Library Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="book.php">
              All Books
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="addbook.php">
              Add BooK
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="issue_requests.php">
              Book Issue Request
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="current.php">
              Issued Books
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-color">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Home Admin!</h1>
      </div>
      <div>
          <center>
                 <div class="card shadow-sm p-3 mb-5 bg-body rounded" style="width: 50%"> 
                 <center><img class="position-relative" style="width: 25%" src="images/profile2.png" alt="Card image cap"></center>
              
              <div class="card-body">
                        <?php
                            $rollno = $_SESSION['RollNo'];
                            $sql="select * from LMS.user where RollNo='$rollno'";
                            $result=$conn->query($sql);
                            $row=$result->fetch_assoc();

                            $name=$row['Name'];
                            $category=$row['Category'];
                            $email=$row['EmailId'];
                            $mobno=$row['MobNo'];
                        ?>    
                <table class="table text-primary ">
                    <h1 class="card-title text-danger "><center>Hello <?php echo $name ?></center></h1>
                    <tbody>
                        <tr>
                        <td Class="fs-6">Email ID: </td>
                        <td><?php echo $email ?></td>
                        </tr>
                        <tr>
                        <td Class="fs-6">Mobile number: </td>
                        <td><?php echo $mobno ?></td>
                        </tr>
                    </tbody>
                    </table>   

                </div>
                </div>
                    <br>
                    <a href="edit_admin_details.php" class="btn btn-primary">Update Details</a>    
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

</body>

</html> 


<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>