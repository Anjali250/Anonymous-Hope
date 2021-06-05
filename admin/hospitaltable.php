<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Hospital Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codetables.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Hospital Name </label>
                <input type="text" name="hospitalname" class="form-control" placeholder="Enter hospitalname">
            </div>
            <div class="form-group">
                <label>Hospital Email</label>
                <input type="email" name="hospitalemail" class="form-control" placeholder="Enter hospital email">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="addr" class="form-control" placeholder="Enter hospital address">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" name="ph_no_1" class="form-control" placeholder=" phone number">
            </div>

            
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn_2" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-dark">Hospital Profile 
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addadminprofile">
              Add Hospital Profile 
            </button>
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
        define('DB_hospitalNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME','pms');
        
        // Try connecting to the Database
        $conn = mysqli_connect(DB_SERVER, DB_hospitalNAME, DB_PASSWORD, DB_NAME);
        
        //Check the connection
        if($conn == false){
            die('Error: Cannot connect');
        }
        $query = "SELECT *FROM hospital";
        $sql = mysqli_query($conn,$query)
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>HospitalName </th>
            <th>Email </th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>EDIT </th>
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
            <td><?php  echo $row['hid']; ?> </td>
            <td><?php  echo $row['hname'];?></td>
            <td><?php  echo $row['hemail'];?> </td>
            <td><?php  echo $row['address'];?> </td>
            <td><?php  echo $row['phno'];?> </td>
            <td>
                <form action="edit_hospital.php" method="post">
                    <input type="hidden" name="edit_id_2" value="<?php echo $row['hid']?>">
                    <button  type="submit" name="edit_btn_2" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="codetables.php" method="post">
                  <input type="hidden" name="delete_id_2" value="<?php echo $row['hid']?>">
                  <button type="submit" name="delete_btn_2" class="btn btn-danger"> DELETE</button>
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

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>