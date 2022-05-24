<?php
ob_start();
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
    <title>Update Book Details</title>
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
            <a class="nav-link fs-5" href="index.php">
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
            <a class="nav-link active fs-5" href="book.php">
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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Public Library Management System</h1>
      </div>
      <div>
        <div>
          <center>
            <div class="module">
                <div class="module-head">
                    <h3>Update Book Details</h3>
            </div>
            <div class="module-body">


            <?php
                $bookid = $_GET['id'];
                $sql = "select * from LMS.book where Bookid='$bookid'";
                $result=$conn->query($sql);
                $row=$result->fetch_assoc();
                $name=$row['Title'];
                $publisher=$row['Publisher'];
                $year=$row['Year'];
                $avail=$row['Availability'];
            ?>
                    			
            <br >
                <form class="form-horizontal row-fluid" action="edit_book_details.php?id=<?php echo $bookid ?>" method="post">

            <div class="d-grid gap-3">
                <div class="p-2 bg-light border">
                    <div class="mb-3 row ">
                    <label for="Title" class="col-sm-2 col-form-label fs-5">Book Title:</label>
                    <div class="col-sm-10">
                    <input type="text" id= "Title"class="form-control" name="Title" value= "<?php echo $name?>" required>
                    </div>
                    </div>
                </div>
                        

                <div class="p-2 bg-light border">
                <div class="mb-3 row">
                    <label for="Publisher" class="col-sm-2 col-form-label fs-5 ">Publisher:</label>
                    <div class="col-sm-10">
                    <input type="text" id= "Publisher"class="form-control" name="Publisher" value= "<?php echo $publisher?>" required>
                    </div>
                    </div>
                </div>

                <div class="p-2 bg-light border">
                <div class="mb-3 row">
                    <label for="Year" class="col-sm-2 col-form-label fs-5">Year:</label>
                    <div class="col-sm-10">
                    <input type="text" id= "Year"class="form-control" name="Year" value= "<?php echo $year?>" required>
                    </div>
                    </div>
                </div>

                <div class="p-2 bg-light border">
                <div class="mb-3 row">
                    <label for="Availability" class="col-sm-2 col-form-label fs-5">Availability</label>
                    <div class="col-sm-10">
                    <input type="text" id= "Availability"class="form-control" name="Availability" value= "<?php echo $avail?>" required>
                    </div>
                    </div>
                </div>
                
            </div>


                    <div class="control-group p-5 shadow p-3 mb-5 bg-body rounded">
                        <div class="controls">
                            <button type="submit" name="submit"class="btn btn-primary btn-lg ">
                         <center>Update Book</center></button>
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
            $bookid = $_GET['id'];
            $name=$_POST['Title'];
            $publisher=$_POST['Publisher'];
            $year=$_POST['Year'];
            $avail=$_POST['Availability'];

        $sql1="update LMS.book set Title='$name', Publisher='$publisher', Year='$year', Availability='$avail' where BookId='$bookid'";



        if($conn->query($sql1) === TRUE){
        echo "<script type='text/javascript'>alert('Success')</script>";
        header( "Refresh:0.01; url=book.php", true, 303);
        }
        else
        {//echo $conn->error;
        echo "<script type='text/javascript'>alert('Error')</script>";
        }
        }
        ?>
            
    </body>

</html>


<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>