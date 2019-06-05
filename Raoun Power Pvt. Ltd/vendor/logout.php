<?php
session_start();
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:vendorlogin.php");
}

unset($_SESSION["user"]);
header("location:vendorlogin.php");
?>