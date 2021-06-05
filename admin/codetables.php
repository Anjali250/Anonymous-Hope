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


//Adding  a new user by the admin
if(isset($_POST['registerbtn_1']))
{
    $username = $_POST['username_1'];
    $email = $_POST['email_1'];
    $password = $_POST['password_1'];
    $cpassword = $_POST['confirmpassword_1'];
    $phno = $_POST['ph_no'];

    $email_query = "SELECT * FROM users WHERE username='$username' ";
    $email_query_run = mysqli_query($conn, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Username Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: usertable.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (username,email,password,phno) VALUES ('$username','$email','$hash','$phno')";
            $query_run = mysqli_query($conn, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "User Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: usertable.php');
            }
            else 
            {
                $_SESSION['status'] = "User Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: usertable.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: usertable.php');  
        }
    }

}


//update the user profile
if(isset($_POST['updatebtn_1']))
{   
    $id = $_POST['edit_id_1'];
    $username = $_POST['edit_username_1'];
    $email = $_POST['edit_email_1'];
    $password = $_POST['edit_password_1'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $phonenumber = $_POST['edit_phonenumber_1'];

    $q = "UPDATE users SET username ='$username', email = '$email', password = '$hash',phno = '$phonenumber' WHERE id ='$id'";
    $sql = mysqli_query($conn,$q);

    if($sql)
    {
        $_SESSION['success'] = "Your Data Is Updated";
        header('location:usertable.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data Is Not updated";
        header('location:usertable.php');
    }
}

//To delete a user profile
if(isset($_POST['delete_btn_1']))
{
    $id = $_POST['delete_id_1'];

    $query = "DELETE FROM users WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: usertable.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: usertable.php'); 
    }    
}







//Adding  a new Hospital data by the admin
if(isset($_POST['registerbtn_2']))
{
    $hospitalname = $_POST['hospitalname'];
    $hemail = $_POST['hospitalemail'];
    $address = $_POST['addr'];
    $phno = $_POST['ph_no_1'];

    $name_query = "SELECT * FROM `hospital` WHERE hname = '$hospitalname'  ";
    $name_query_run = mysqli_query($conn, $name_query);
    if(mysqli_num_rows($name_query_run) > 0)
    {
        $_SESSION['status'] = "Hosiptal Already Registered. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: hospitaltable.php');  
    }
    else
    {
        $query = "INSERT INTO hospital (hname,hemail,address,phno) VALUES ('$hospitalname','$hemail',' $address','$phno')";
        $query_run = mysqli_query($conn, $query);
            
        if($query_run)
        {
            // echo "Saved";
            $_SESSION['success'] = "Hospital Profile Added";
            $_SESSION['status_code'] = "success";
            header('Location: hospitaltable.php');
        }
        else 
        {
            $_SESSION['status'] = "Hospital Profile Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: hospitaltable.php');  
        }
        
    }

}


//update the hospital profile
if(isset($_POST['updatebtn_2']))
{   
    $id = $_POST['edit_id_2'];
    $Hname = $_POST['edit_hospitalname'];
    $Hemail = $_POST['edit_hospitalemail'];
    $haddress = $_POST['edit_addr'];
    $phonenumber1 = $_POST['edit_ph_no_1'];

    $q = "UPDATE hospital SET hname ='$Hname',hemail = '$Hemail',address = '$haddress',phno = '$phonenumber1' WHERE hid ='$id'";
    $sql = mysqli_query($conn,$q);

    if($sql)
    {
        $_SESSION['success'] = "Your Data Is Updated";
        header('location:hospitaltable.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data Is Not updated";
        header('location:hospitaltable.php');
    }
}

//To delete a hospital profile
if(isset($_POST['delete_btn_2']))
{
    $id = $_POST['delete_id_2'];

    $query = "DELETE FROM hospital WHERE hid='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: hospitaltable.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: hospitaltable.php'); 
    }    
}






//To delete a appointment data
if(isset($_POST['delete_btn_3']))
{
    $id = $_POST['delete_id_3'];

    $query = "DELETE FROM appointment WHERE aid='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: appointmenttable.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: appointmenttable.php'); 
    }    
}






//Adding  a new Plasma bank data by the admin
if(isset($_POST['registerbtn_4']))
{
    $hospital = $_POST['h_name'];
    $bg = $_POST['blood_group_2'];
    $a = $_POST['a'];
    $donar_id = $_POST['donarid'];

    
        $query = "INSERT INTO `plasmabank` (`sno`, `hid`, `bloodgroup`, `availibility`, `donar_id`) VALUES (NULL, '$hospital', '$bg', '$a', '$donar_id');";
        $query_run = mysqli_query($conn, $query);
            
        if($query_run)
        {
            // echo "Saved";
            $_SESSION['success'] = "Plasma Bank Data Added";
            $_SESSION['status_code'] = "success";
            header('Location: plasmabanktable.php');
        }
        else 
        {
            $_SESSION['status'] = "Plasma Bank Data Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: plasmabanktable.php');  
        }
        
    

}



//update the plasmabank 
if(isset($_POST['updatebtn_4']))
{   
    $id = $_POST['edit_id_4'];
    $h_id = $_POST['edit_h_name'];
    $bloodgroup = $_POST['edit_blood_group_2'];
    $availibilty = $_POST['edit_a'];
    $donar_id_1 = $_POST['edit_donarid'];

    $q = "UPDATE plasmabank SET hid ='$h_id',bloodgroup ='$bloodgroup',availibility = '$availibilty', donar_id = '$donar_id_1' WHERE sno ='$id'";
    $sql = mysqli_query($conn,$q);

    if($sql)
    {
        $_SESSION['success'] = "Your Data Is Updated";
        header('location:plasmabanktable.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data Is Not updated";
        header('location:plasmabanktable.php');
    }
}

//To delete a hospital profile
if(isset($_POST['delete_btn_4']))
{
    $id = $_POST['delete_id_4'];

    $query = "DELETE FROM plasmabank WHERE donar_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: plasmabanktable.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: plasmabanktable.php'); 
    }    
}




//To delete a donar 
if(isset($_POST['delete_btn_5']))
{
    $id = $_POST['delete_id_5'];

    $query = "DELETE FROM donar WHERE d_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: donartable.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: donartable.php'); 
    }    
}





?>