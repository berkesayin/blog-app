<?php
session_start();  

if(isset($_SESSION["email"]))  
{  
    echo '<h3>Login Success, Welcome - '.$_SESSION["email"].'</h3>';  
    echo '<br /><br /><a href="log_out.php">Logout</a>';  
}  
else  
{  
    header("location:login.php");  
} 

?>