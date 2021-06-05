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
    
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"> EDIT User Profile </h6>
        </div>
        <div class="card-body">
        <?php
         
         define('DB_SERVER', 'localhost');
         define('DB_USERNAME', 'root');
         define('DB_PASSWORD', '');
         define('DB_NAME','pms');
         
         //Try connecting to the Database
         $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
         
         //Check the connection
         if($conn == false){
             die('Error: Cannot connect');
         }

            if(isset($_POST['edit_btn_4']))
            {
                $id = $_POST['edit_id_4'];
                
                $query = "SELECT * FROM plasmabank WHERE sno='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="codetables.php" method="POST">
                        <input type="hidden" name="edit_id_4"  value="<?php echo $row['sno'] ?>">

                        <div class="form-group">
                            <label class="control-label" for="hospital">Hospital</label>
                                <select id="hospital" name="edit_h_name" value="<?php echo $row['hid'] ?>" class="form-control">
                                    <option value="20001">Hospital 1</option>
                                    <option value="20002">Hospital 2</option>
                                    <option value="20003">Hospital 3</option>
                                    <option value="20004">Hospital 4</option>
                                </select>
                        </div>
                            <div class="form-group">
                                <label>Blood Group</label>
                                <select class="custom-select" name="edit_blood_group_2" value="<?php echo $row['bloood'] ?>" id="bg1" required>
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
                                <select class="custom-select" name="edit_a" value="<?php echo $row['availibility'] ?>" >
                                   <option value ="YES">YES</option>
                                    <option value ="NO">NO</option>
                                </select>
                            </div>
                            

                            <div class="form-group">
                                <label>Donar ID</label>
                                    <input type="text" name="edit_donarid"  class = "form-control" value="<?php echo $row['donar_id'] ?>" placeholder="Enter donar id">
                                </div>
                        
                             </div>


                            

                            <a href="hospitaltable.php" class="btn btn-danger " > CANCEL </a>
                            <button type="submit" name="updatebtn_4"  class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
   
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
