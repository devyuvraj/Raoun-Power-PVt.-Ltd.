<?php include("function.php") ?>
<?php
$status = "";
if(isset($_POST["submit"]))
{
    extract($_POST);
    $qry = "SELECT * FROM login WHERE email='$temail'";
    $rs = readrecord($qry);
    if(mysqli_num_rows($rs) > 0)
    {
        $row = mysqli_fetch_array($rs);
		$status.="<h4>username: $row[username]</h4>";
		$status.="<h4>password: $row[password]</h4>";
		$status.="<h5><a href='adminlogin.php'>Back To Login</a></h5>";
    }
    else
    {
        $status = "<h4>Record Not Found!</h4>";
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
<!--Admin password reset form-->
<div class="container">
	<div class="row" id="login-container">
		<div class="col-lg-3"><!--use for left space left side-->
		</div>
		<div class="col-sm-6">
			<form class="text-center p-3 border border-secondary" method="post" id="frm" name="frm">
				<h3 class="text-center py-2 text-info">Reset your password</h3>
				<p>To reset your password, enter your email.</p>
				<input type="text" id="temail" name="temail" class="form-control mb-4" placeholder="E-mail" required />
				<input type="submit" class="btn btn-info btn-block my-4" id="submit" name="submit" value="Submit" />
			</form>
		</div>
		<div class="col-lg-3"><!--use for left space right side-->
		</div>
	</div>
</div>
<h4 class="text-warning font-weight-bold text-center"><?php echo $status; ?></h4>
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
