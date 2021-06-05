<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['loggedin']);
    unset($_SESSION['aname']);
    header('Location: login.php');
}

?>