<?php
include("function.php");
$status = "";
if(isset($_POST["sub"]))
{
    extract($_POST);
    $qry = "SELECT * FROM vendorinfo WHERE Email ='$email'";
    $rs = readrecord($qry);
    if(mysqli_num_rows($rs) > 0)
    {
        $row = mysqli_fetch_array($rs);
		$status.="<h4>userid: $row[Id]</h4>";
		$status.="<h4>password: $row[Password]</h4>";
		$status.="<h5><a href='vendorlogin.php'>Back To Login</a></h5>";
    }
    else
    {
        $status = "<h4>Please Enter Valid Email!</h4>";
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
    <title>Reset::Rouan Power Pvt. Ltd.::RESET</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--Vendor password reset form-->
<div class="container">
	<div class="row mt-4" id="login-container">
		<div class="col-lg-3"><!--use for left space left side-->
		</div>
		<div class="col-sm-6 shadow">
			<form class="text-center p-3" method="post" id="frm" name="frm">
				<h3 class="text-center py-2 text-info">Reset your password</h3>
				<p class="text-capitalize">To reset your password, enter your email.</p>
				<input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail" required autocomplete="off" />
				<input type="submit" class="btn btn-info btn-block my-4" id="sub" name="sub" value="Submit" />
			</form>
            <h4 class="text-warning font-weight-bold text-center"><?php echo $status; ?></h4>
		</div>
		<div class="col-lg-3"><!--use for left space right side-->
		</div>
	</div>
</div>
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
