<?php
$name = filter_input(INPUT_POST,'name');
$email_id= filter_input(INPUT_POST,'email_id');
$pdate = filter_input(INPUT_POST,'date');
$ptime = filter_input(INPUT_POST,'time');
$hid = filter_input(INPUT_POST,'hid');

         $host= "localhost";
        $dbusername = "root";
        $dbpassword="";
        $dbname="pms";

        $conn1=new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error())
        {
            die('Connect Error ('.
            mysqli_connect_errno().')'.
            mysqli_connect_error());
            
        }
        else{
            $sql1="INSERT INTO appointment(username,email_id,pdate,ptime,hid) VALUES ('$name','$email_id','$pdate','$ptime','$hid')";
            if($conn1->query($sql1))
            {?>
               <script> 
                 alert("Appointmentdone successfully!Thank you for registering!");
                </script>
                 
                

                <?php header('location: loginpage.php');
        
            }

            }
           
            $conn1->close();
?>
