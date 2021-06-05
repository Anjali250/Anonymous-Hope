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

            if(isset($_POST['edit_btn_2']))
            {
                $id = $_POST['edit_id_2'];
                
                $query = "SELECT * FROM hospital WHERE hid='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="codetables.php" method="POST">

                            <input type="hidden" name="edit_id_2"  value="<?php echo $row['hid'] ?>">

                            <div class="form-group">
                            <label> Hospital Name </label>
                            <input type="text" name="edit_hospitalname" class="form-control" value="<?php echo $row['hname'] ?>" placeholder="Enter hospitalname">
                            </div>
                            <div class="form-group">
                                <label>Hospital Email</label>
                                <input type="email" name="edit_hospitalemail" class="form-control" value="<?php echo $row['hemail'] ?>" placeholder="Enter hospital email">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="edit_addr" class="form-control" value="<?php echo $row['address'] ?>" placeholder="Enter hospital address">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" name="edit_ph_no_1" class="form-control" value="<?php echo $row['phno'] ?>" placeholder=" phone number">
                            </div>


                            

                            <a href="hospitaltable.php" class="btn btn-danger " > CANCEL </a>
                            <button type="submit" name="updatebtn_2"  class="btn btn-primary"> Update </button>

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
