<?php session_start(); ?>
<?php include("function.php") ?>
<?php
$status = "";
if(isset($_POST["login"]))
{
    extract($_POST);
    $qry = "SELECT * FROM login WHERE username='$user' AND password='$pwd'";
    $rs = executequery($qry);
    if(mysqli_num_rows($rs) > 0)
    {
        $_SESSION["user"]=$user;
        $row = mysqli_fetch_array($rs);
        //$_SESSION["logid"]=$row['logid'];
        header("location:admindashbord.php");
    }
    else
    {
        $status = "Record Not Found!";
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Login::Rouan Power Pvt. Ltd.</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--Admin login form-->
<div class="container-fluid">
	<div class="row" id="login-container">
		<div class="col-lg-3"><!--use for left space left side-->
		</div>
		<div class="col-lg-6 shadow">
			<form class="text-center p-3" method="post" id="frm" name="frm">
				<h1 class="text-center py-2 text-info"><i class="fas fa-user-edit"></i> Admin</h1>
				<p>To access this page, you have to log in.</p>
				<input type="text" id="user" name="user" class="form-control mb-4" placeholder="User-Id" required autocomplete="off" />
				<input type="password" id="pwd" name="pwd" class="form-control mb-4" placeholder="Password" required autocomplete="off" />
				<div class="d-flex justify-content-around">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" />
						<label class="custom-control-label" for="remember">Remember me</label>
					</div>
					<div>
						<a href="adminreset.php">Forget Password?</a>
					</div>
				</div>
				<input type="submit" class="btn btn-info btn-block my-4" id="login" name="login" value="Login" />
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
