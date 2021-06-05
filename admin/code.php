<?php
session_start();
/*
This file contains database configuration using user "root" and password ""
*/

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


//registering a new admin
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM admins WHERE aname='$username' ";
    $email_query_run = mysqli_query($conn, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Username Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO admins (aname,email,passwd) VALUES ('$username','$email','$hash')";
            $query_run = mysqli_query($conn, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}
//update the admin profile
if(isset($_POST['updatebtn']))
{   
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $q = "UPDATE admins SET aname ='$username', email = '$email', passwd = '$hash' WHERE id ='$id'";
    $sql = mysqli_query($conn,$q);

    if($sql)
    {
        $_SESSION['success'] = "Your Data Is Updated";
        header('location:register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data Is Not updated";
        header('location:register.php');
    }
}

//To delete a admin profile
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM admins WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}


//login system
if(isset($_POST['login_btn']))
{
    $username_login = $_POST['name']; 
    $password_login = $_POST['passwordd']; 
    $sql = "SELECT *FROM admins WHERE aname='$username_login'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            if (password_verify($password_login, $row['passwd']))
            { 
                //$login = true;
                
                $_SESSION['loggedin'] = true;
                $_SESSION['aname'] = $username_login;
                header("location: index.php");
            }
            else
            {
            $_SESSION['status'] = "username / Password is Invalid";
            header('Location: login.php');
            }
        }
       
    }
    else
    {
        $_SESSION['status'] = "username / Password is Invalid";
        header('Location: login.php');

    }
}

?>