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
    <title>Add Books</title>
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
            <a class="nav-link fs-5" href="book.php">
              All Books
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-5" href="addbook.php">
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
                    <h3>Add Books to Library</h3>
            </div>
            <div class="module-body">
                    			
            <br >
            <form class="form-horizontal row-fluid" action="addbook.php" method="post">

            <div class="d-grid gap-3">
                <div class="p-2 bg-light border">
                    <div class="mb-3 row ">
                    <label for="Title" class="col-sm-2 col-form-label fs-5">Book Title:</label>
                    <div class="col-sm-10">
                    <input type="text" id= "title"class="form-control" name="title" placeholder="Title" required>
                    </div>
                    </div>
                </div>
                        

                <div class="p-2 bg-light border">
                <div class="mb-3 row">
                    <label for="Author" class="col-sm-2 col-form-label fs-5 ">Author:</label>
                    <div class="col-sm-10">
                    <input type="text" id= "author1"class="form-control" name="author1" required>
                    </div>
                    </div>
                </div>

                <div class="p-2 bg-light border">
                <div class="mb-3 row">
                    <label for="Publisher" class="col-sm-2 col-form-label fs-5">Publisher:</label>
                    <div class="col-sm-10">
                    <input type="text" id= "publisher"class="form-control" name="publisher" placeholder="Publisher" required>
                    </div>
                    </div>
                </div>

                <div class="p-2 bg-light border">
                <div class="mb-3 row">
                    <label for="Availability" class="col-sm-2 col-form-label fs-5">Add Number Of Copies</label>
                    <div class="col-sm-10">
                    <input type="text" id= "availability"class="form-control" name="availability" placeholder="Number of Copies" required>
                    </div>
                    </div>
                </div>
                
            </div>


                    <div class="control-group p-5 shadow p-3 mb-5 bg-body rounded">
                        <div class="controls">
                            <button type="submit" name="submit"class="btn btn-primary btn-lg ">
                         <center>Add Book</center></button>
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
                $title=$_POST['title'];
                $author1=$_POST['author1'];
                $author2=$_POST['author2'];
                $author3=$_POST['author3'];
                $publisher=$_POST['publisher'];
                $year=$_POST['year'];
                $availability=$_POST['availability'];

            $sql1="insert into LMS.book (Title,Publisher,Year,Availability) values ('$title','$publisher','$year','$availability')";

            if($conn->query($sql1) === TRUE){
            $sql2="select max(BookId) as x from LMS.book";
            $result=$conn->query($sql2);
            $row=$result->fetch_assoc();
            $x=$row['x'];
            $sql3="insert into LMS.author values ('$x','$author1')";
            $result=$conn->query($sql3);
            if(!empty($author2))
            { $sql4="insert into LMS.author values('$x','$author2')";
            $result=$conn->query($sql4);}
            if(!empty($author3))
            { $sql5="insert into LMS.author values('$x','$author3')";
            $result=$conn->query($sql5);}

            echo "<script type='text/javascript'>alert('Success')</script>";
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