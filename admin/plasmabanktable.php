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
        <h5 class="modal-title" id="exampleModalLabel">Add Plasma Bank Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codetables.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label class="control-label" for="hospital">Hospital</label>
                    <select id="hospital" name="h_name" value="<?php echo $row['hid'] ?>" class="form-control">
                        <option value="20001">Hospital 1</option>
                        <option value="20002">Hospital 2</option>
                        <option value="20003">Hospital 3</option>
                        <option value="20004">Hospital 4</option>
                    </select>
                </div>
            <div class="form-group">
                <label>Blood Group</label>
                <select class="custom-select" name="blood_group_2"id="validationCustom04" required>
                    <option selected disabled value="">Choose</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="hh">hh Blood Group</option>
                </select>
            </div>
            <div class="form-group">
                <label>Availibility</label>
               <select class="custom-select" name="a" >
                   <option value ="YES">YES</option>
                   <option value ="No">NO</option>
                </select>

            </div>
           
            <div class="form-group">
              <label>Donar ID</label>
                <input type="text" name="donarid"  class = "form-control"  placeholder="Enter donar id">
              </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn_4" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-dark">Plasma Bank Profile 
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addadminprofile">
              Add Plasma Bank Profile 
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
        define('DB_username', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME','pms');
        
        // Try connecting to the Database
        $conn = mysqli_connect(DB_SERVER, DB_username, DB_PASSWORD, DB_NAME);
        
        //Check the connection
        if($conn == false){
            die('Error: Cannot connect');
        }
        $query = "SELECT *FROM plasmabank";
        $sql = mysqli_query($conn,$query)
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Hospital ID </th>
            <th>Blood Group</th>
           
            <th>Donar ID</th>
            <th>Availability </th>
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
            <td><?php  echo $row['sno'];?></td>
            <td><?php  echo $row['hid']; ?> </td>
            <td><?php  echo $row['bloodgroup'];?> </td>
            <td><?php  echo $row['donar_id'];?> </td>
            <td><?php  echo $row['availibility'];?> </td>
            
            <td>
                <form action="edit_plasmabank.php" method="post">
                    <input type="hidden" name="edit_id_4" value="<?php echo $row['sno']?>">
                    <button  type="submit" name="edit_btn_4" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="codetables.php" method="post">
                  <input type="hidden" name="delete_id_4" value="<?php echo $row['sno']?>">
                  <button type="submit" name="delete_btn_4" class="btn btn-danger"> DELETE</button>
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