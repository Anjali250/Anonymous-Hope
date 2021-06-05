<?php

$fn = filter_input(INPUT_POST,'fn');
$ln = filter_input(INPUT_POST,'ln');
$email_id= filter_input(INPUT_POST,'email_id');
$addres=filter_input(INPUT_POST,'address');
$ph_no = filter_input(INPUT_POST,'phno');
$blood_group= filter_input(INPUT_POST,'blood_group');
$gender = filter_input(INPUT_POST,'gender');
$age = filter_input(INPUT_POST,'age');


        $host= "localhost";
        $dbusername = "root";
        $dbpassword="";
        $dbname="pms";

        $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error())
        {
            die('Connect Error ('.
            mysqli_connect_errno().')'.
            mysqli_connect_error());
            
        }
        else
        {
            
            
        
            $sql= "INSERT INTO donar (fname,lname,email,addrr,phno,bg,gender,age) VALUES ('$fn','$ln', '$email_id','$addres','$ph_no','$blood_group','$gender', '$age')";
            if($conn->query($sql))
            {
                echo"Record inserted";
                header('location: appointment.html');
        
            }

        }
     $conn->close();
?>
