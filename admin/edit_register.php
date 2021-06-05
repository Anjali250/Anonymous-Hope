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
            <h6 class="m-0 font-weight-bold text-dark"> EDIT Admin Profile </h6>
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

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM admins WHERE id='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id"  value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="edit_username" class = "form-control"  value="<?php echo $row['aname'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="edit_email"  class = "form-control"   value="<?php echo $row['email'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="edit_password"  class = "form-control"   value="<?php echo $row['passwd'] ?>"
                                    class="form-control" placeholder="Enter Password">
                            </div>
                

                            

                            <a href="register.php" class="btn btn-danger " > CANCEL </a>
                            <button type="submit" name="updatebtn"  class="btn btn-primary"> Update </button>

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
