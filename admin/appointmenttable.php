<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-dark">Appointment  
    </h6>
  </div>

  <div class="card-body">
  <?php
    if(isset($_SESSION['success']) && $_SESSION['success']!='')
    {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>'.$_SESSION['success'].'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    unset($_SESSION['success']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status']!='')
    {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong>'.$_SESSION['status'].'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    unset($_SESSION['status']);
    }
    ?>

    <div class="table-responsive">
    <?php
        define('DB_SERVER', 'localhost');
        define('DB_AppointmentNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME','pms');
        
        // Try connecting to the Database
        $conn = mysqli_connect(DB_SERVER, DB_AppointmentNAME, DB_PASSWORD, DB_NAME);
        
        //Check the connection
        if($conn == false){
            die('Error: Cannot connect');
        }
        $query = "SELECT *FROM appointment";
        $sql = mysqli_query($conn,$query)
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Donar name </th>
            <th>pdate</th>
            <th>ptime</th>
            <th>hid</th>
            
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(mysqli_num_rows($sql) > 0)        
          {
            while($row = mysqli_fetch_assoc($sql))
            {
          ?>
          <tr>
            <td><?php  echo $row['aid']; ?> </td>
            <td><?php  echo $row['username'];?></td>
            <td><?php  echo $row['pdate'];?> </td>
            <td><?php  echo $row['ptime'];?> </td>
            <td><?php  echo $row['hid'];?> </td>
           
            <td>
                <form action="codetables.php" method="post">
                  <input type="hidden" name="delete_id_3" value="<?php echo $row['aid']?>">
                  <button type="submit" name="delete_btn_3" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
              } 
            }
            else
            {
              echo "No Record Found";
            }
            ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<?php

include('includes/scripts.php');
include('includes/footer.php');
?>