<?php

$username = "root";
$password = "";
$server='localhost';
$db = 'pms';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    ?>
    <script> 
    alert("connection successful");
    </script>


<?php
}else
{
    die("No connection".mysqli_connect_error());
}
?>
