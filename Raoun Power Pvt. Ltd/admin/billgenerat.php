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
$status = "";
/*generate bill Customer*/
if(isset($_POST["sub"]))
{
	extract($_POST);
	$qry = "SELECT * FROM billinfo WHERE ivrs = '$ivrs' AND month = '$mnth' AND year = '$year'";
	$rs = readrecord($qry);
	if (mysqli_num_rows($rs) > 0)
    {
        $status = "<h2>Bill Already Genrated</h2>";
    }
    else
    {
		$status = "<h2>Please Generate Bill</h2>";
		header("location:createbill.php?ivrs=$ivrs&month=$mnth&year=$year");
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
<title>Electricity Billing</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--navbar end-->
<!--bill generate section--->
<div class="container">
	<div class="row mt-4">
		<div class="col-lg-3"></div>
			<div class="col-lg-6 shadow">
				<form class="text-center p-3" method="post" id="frm" name="frm">
					<h1 class="text-center py-3 text-info">Bill Generat</h1>
					<input type="text" id="meter" name="ivrs" value="<?php echo $_GET["ivrs"]; ?>" class="form-control mb-4" placeholder="Enter ivrs No" required autocomplete="off" />
					<input type="text" id="mnth" name="mnth" class="form-control mb-4" value="<?php echo $_GET["month"]; ?>" required autocomplete="off" />
					<input type="text" id="year" name="year" class="form-control mb-4" value="<?php echo $_GET["year"]; ?>" required autocomplete="off" />
					<input type="submit" class="btn btn-primary btn-block btn-md my-2" id="sub" name="sub" value="submit" />
				</form>
				<h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
			</div>
		<div class="col-lg-3"></div>
    </div>
</div>
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>