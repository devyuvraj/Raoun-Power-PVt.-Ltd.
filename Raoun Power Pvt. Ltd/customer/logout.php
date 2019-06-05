<?php
session_start();
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:customerlogin.php");
}

unset($_SESSION["user"]);
unset($_SESSION["username"]);

header("location:customerlogin.php");
?>