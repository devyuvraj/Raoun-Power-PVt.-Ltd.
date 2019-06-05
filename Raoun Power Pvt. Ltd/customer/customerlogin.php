<?php
session_start();
include("function.php");
$status = "";
if(isset($_POST["login"]))
{
    extract($_POST);
    $qry = "SELECT * FROM customerinfo WHERE email='$id' AND password='$psw'";
    $rs = readrecord($qry);
    if(mysqli_num_rows($rs) > 0)
    {
		$row = mysqli_fetch_array($rs);
		$ivrs = $row["ivrs"];
		$_SESSION["user"]=$id;
		$_SESSION["ivrs"]=$ivrs;

        header("location:customerdashbord.php");
    }
    else
    {
        $status = "Invalid User Name And Password!";
    }
}
/* get user ivrs */

?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Rouan Power Pvt. Ltd.::Customer</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--Admin login form-->
<div class="container">
	<div class="row" id="login-container">
		<div class="col-lg-3"><!--use for left space left side-->
		</div>
		<div class="col-lg-6 shadow">
			<form class="text-center p-3" method="post" id="frm" name="frm">
				<h1 class="text-center py-2 text-info"><i class="fas fa-users"></i> Customer</h1>
				<p class="text-capitalize">To access this page, enter email-id & password.</p>
				<input type="text" id="id" name="id" class="form-control mb-4" placeholder="Customer-Id" required autocomplete="off" />
				<input type="password" id="psw" name="psw" class="form-control mb-4" placeholder="Password" required autocomplete="off"/>
				<div class="d-flex justify-content-around">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" />
						<label class="custom-control-label" for="remember">Remember me</label>
					</div>
					<div>
						<a href="Customerreset.php">Forget Password?</a>
					</div>
				</div>
				<input type="submit" class="btn btn-info btn-block my-4" id="login" name="login" value="Login" />
			</form>
		</div>
		<div class="col-lg-3"><!--use for left space right side-->
		</div>
	</div>
</div>
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
<h4 class="text-warning font-weight-bold text-center"><?php echo $status; ?></h4>
</body>
</html>
