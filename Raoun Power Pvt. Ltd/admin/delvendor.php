<?php session_start();
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:adminlogin.php");
}
?>
<?php include("function.php") ?>
<?php
$status = "";
/*Delete Customer*/
if(isset($_POST["sub"]))
{
    extract($_POST);
	$qry = "DELETE FROM vendorinfo WHERE Id='$id'";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "<h2>Record Deleted Succesfully</h2>";
    }
    else
    {
        $status = "<h2>Error To Delete</h2>";
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
<title>Raoun Power Pvt. ltd.::Vendor</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--Admin home page-->
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--navbar end-->
<!--Del Vendor Section section--->
<div class="container">
	<div class="row mt-4">
		<div class="col-lg-3"></div>
			<div class="col-lg-6 shadow">
				<form class="text-center p-3" method="post" id="frm" name="frm">
					<h1 class="text-center py-2 text-info">Delete Customer Info</h1>
					<p>Enter Only Vendor Id To Delete</p>
					<input type="text" id="id" name="id" class="form-control mb-4" placeholder="Id" required />
					<input type="submit" class="btn btn-outline-danger btn-md my-2 btn-block" onclick="warning();" id="sub" name="sub" value="Delete" />
				</form>
			</div>
        <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
		<div class="col-lg-3"></div>
    </div>
</div>
<?php echo "$status"; ?>
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
