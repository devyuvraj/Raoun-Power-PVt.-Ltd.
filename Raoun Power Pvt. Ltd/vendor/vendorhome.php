<?php
include("function.php");
session_start(); 
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:vendorlogin.php");
}
?>
<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Raoun Power Pvt. ltd.::Home</title>
    <?php include("links.php"); ?>
</head>

<body style="background-color:#EDF7F5" ;>
<!--Vendor home page-->
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--navbar end-->
<!--container-->
<!--container end-->
<!--footer-->
	<?php include("footer.php") ?>
</body>

</html>