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
/*update Customer*/
if(isset($_POST["sub"]))
{
    extract($_POST);
	$qry = "UPDATE vendorinfo SET Id ='$id', Email ='$email', Password ='$pwd', Name ='$name', Address ='$address', Postal ='$postal', Mobile ='$mobile' WHERE Id='$id'";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "<h2>Record Updated Succesfully</h2>";
    }
    else
    {
        $status = "<h2>Error To Update</h2>";
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
<!--update Section section--->
<div class="container">
	<div class="row mt-4">
		<div class="col-lg-3"></div>
			<div class="col-lg-6 shadow">
				<form class="text-center p-3" method="post" id="frm" name="frm">
					<h1 class="text-center py-2 text-info">Update Vendor Info</h1>
					<input type="text" id="id" name="id" class="form-control mb-4" placeholder="Id" required autocomplete="off" />
					<input type="email" id="email" name="email" class="form-control mb-4" placeholder="Email" required autocomplete="off" />
					<input type="password" id="pwd" name="pwd" class="form-control mb-4" placeholder="Password" required autocomplete="off" />
					<input type="text" id="name" name="name" class="form-control mb-4" placeholder="Full Name" required autocomplete="off" />
					<input type="text" id="address" name="address" class="form-control mb-4" placeholder="Full Address" required autocomplete="off" />
					<input type="text" id="postal" name="postal" class="form-control mb-4" placeholder="Postal / Zip Code" required autocomplete="off" />
					<input type="text" id="mobile" name="mobile" class="form-control mb-4" placeholder="Mobile No" required autocomplete="off" />
					<input type="submit" class="btn btn-outline-warning btn-md my-2 btn-block" id="sub" name="sub" value="Update" />
				</form>
			</div>
        <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
		<div class="col-lg-3"></div>
    </div>
</div>
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
