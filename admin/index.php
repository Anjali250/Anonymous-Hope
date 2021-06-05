<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

include('includes/header.php'); 
include('includes/navbar.php'); 


?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Total admins Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Registered Admins</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                 
                 define('DB_SERVER', 'localhost');
                define('DB_USERNAME', 'root');
                define('DB_PASSWORD', '');
                define('DB_NAME','pms');
                
                // Try connecting to the Database
                $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                
                //Check the connection
                if($conn == false){
                    die('Error: Cannot connect');
                }
                

                $query = "SELECT id FROM admins ORDER BY id";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);
                
              ?>
              <h4><?php echo '<h4> Total Admins:* '.$row.'</h4>';?></h4>
              </div>
              
              
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>   

    </div>

      <!-- Total users Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Registered Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
    
                $query = "SELECT id FROM users ORDER BY id";  
                $query_run = mysqli_query($conn, $query);
                $row1 = mysqli_num_rows($query_run);
                
              ?>
              <h4><?php echo '<h4> Total Users:* '.$row1.'</h4>';?></h4>
              </div>
              
              
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>   

    </div>



     <!-- Total hospitals Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Hospitals</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               
              <?php
    
                $query1 = "SELECT hid FROM hospital ORDER BY hid";  
                $query_run1 = mysqli_query($conn, $query1);
                $row2 = mysqli_num_rows($query_run1);
                
              ?>
              <h4><?php echo '<h4> Total Hospitals:* '.$row2.'</h4>';?></h4>
              </div>
              
              
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>   

    </div>

    <!-- Total appointments Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Appointments:*</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                 <?php
    
                $query = "SELECT aid FROM appointment ORDER BY aid";  
                $query_run = mysqli_query($conn, $query);
                $row2 = mysqli_num_rows($query_run);
                
              ?>
              <h4><?php echo '<h4> Total Appointments:* '.$row2.'</h4>';?></h4>
    
               
              </div>
              
              
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>   

    </div>

    

    




  
  </div>
</div>

  <!-- Content Row -->








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>