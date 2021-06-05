<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: loginpage.php");
    exit;
}
require_once "connection.php";

//login system
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $sql = "SELECT  id, username, password FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1)
    
    {
        while($row=mysqli_fetch_assoc($result))
        {
            if (password_verify($password, $row['password']))
            {  
              // this means the password is correct. Allow user to login
              session_start();
              $_SESSION["username"] = $username;
              $_SESSION["id"] = $id;
              $_SESSION["loggedin"] = true;
              //Redirect user to loginpage page
              header("location: loginpage.php");
            }
            else
            {
            $_SESSION['status'] = "username / Password is Invalid";
            header('Location:login1.php');
            }
        }
       
    }
    else
    {
    $_SESSION['status'] = "username / Password is Invalid";
    header('Location:login1.php');
    }
}



?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>AnonymousHope</title>
  </head>

<body>
  
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><strong>Anonymous<sup>Hope</sup></strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          </li>
        </ul>
      </div>
    <!-- <div class="mx-2">
            <button class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#loginModal">login</button>-->
           <!-- <a class="btn btn-outline-light"  href="/signup.php">Signup</a>-->
      <div>     
          <a class="btn btn-outline-light"  href="signup.php">Signup</a>
      </div>
    </ul>
    </div>
    </div>

  </nav>



<div class="row justify-content-center">

<div class="col-xl-6 col-lg-6 col-md-6">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-12">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
                  <?php

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>WARNING!</strong> '.$_SESSION['status'].'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                      </div>  ';
                      unset($_SESSION['status']);
                    }
                  ?>
            </div>
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Enter Username..." required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword1" placeholder="Enter Password"
                      required>
                    </div>
                    <br>
                    <hr>
                    <button type="submit" name = "login_btn1"class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                  </form>
                  </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>

            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



