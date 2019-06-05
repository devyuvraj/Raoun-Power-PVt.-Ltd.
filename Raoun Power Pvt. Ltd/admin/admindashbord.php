<?php
include("function.php");
session_start();
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:adminlogin.php");
}
?>
<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Raoun Power Pvt. ltd.::Admin</title>
    <?php include("links.php"); ?>
</head>

<body style="background-color:#EDF7F5";>
<!--Admin Dashbord-->

<!--navbar top-->
	<?php include("navbar.php") ?>
<!--navbar end-->

<!--image slider-->
    <?php include("main.php") ?>
<!--//image slider-->

<!--footer-->
    <?php include("footer.php") ?>
<!--//footer-->
</body>
</html>