<?php 
include("function.php");
session_start(); 
?>
<?php
$status = "";
if(isset($_POST["sub"]))
{
    extract($_POST);
    $qry = "SELECT * FROM vendorinfo WHERE Vendorid ='$id' AND Password='$pwd'";
    $rs = executequery($qry);
    if(mysqli_num_rows($rs) > 0)
    {
        $_SESSION["user"]=$id;
        $row = mysqli_fetch_array($rs);
        //$_SESSION["logid"]=$row['logid'];
        header("location:vendorhome.php");
    }
    else
    {
        $status = "Invalid User Name And Password!";
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
    <title>Rouan Power Pvt. Ltd.::Vendor</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#AEC5D6";>
<!--Vendor login form-->
<div class="container">
	<div class="row" id="login-container">
		<div class="col-lg-3"><!--use for left space left side-->
		</div>
		<div class="col-lg-6 shadow">
			<form class="text-center p-3" method="post" id="frm" name="frm">
				<h1 class="text-center py-2 text-info"><i class="fas fa-user-cog"></i> Vendor</h1>
				<p class="text-capitalize">To access this page, enter your id & password.</p>
				<input type="text" id="id" name="id" class="form-control mb-4" placeholder="Log-Id" required autocomplete="off" />
				<input type="password" id="pwd" name="pwd" class="form-control mb-4" placeholder="Password" required autocomplete="off" />
				<div class="d-flex justify-content-around">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" />
						<label class="custom-control-label" for="remember">Remember me</label>
					</div>
					<div>
						<a href="vendorreset.php">Forget Password?</a>
					</div>
				</div>
				<input type="submit" class="btn btn-info btn-block my-4" id="sub" name="sub" value="Login" />
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
