<?php session_start(); ?>
<?php
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
/*Update Customer Information*/
if(isset($_POST["sub"]))
{
    extract($_POST);
	$qry = "UPDATE customerinfo SET meterno = '$meter', firstname = '$fname',  lastname = '$lname', address = '$adrs', postal = '$postal', mobile = '$mobile', email = '$email', password = '$psw', plan = '$plan', status = '$stats' WHERE ivrs = '$ivrs'";
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
/*read record from table*/
extract($_POST);
$qry = "SELECT * FROM customerinfo";
$rs = executequery($qry);
$row = mysqli_fetch_array($rs);
$mtr = $row["meterno"];
$firstn = $row["firstname"];
$lastn = $row["lastname"];
$add = $row["address"];
$zip = $row["postal"];
$mbl = $row["mobile"];
$mail = $row["email"];
$pwd = $row["password"];
$pln = $row["plan"];
$sts = $row["status"];
?>
<!doctype html>
<html lang="en-us">
<head>
    <title>Raoun Power Pvt. ltd.::Customers</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--navbar end-->
<!--update record Section section--->
<div class="container shadow p-1">
    <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center mt-3">Update Customer Record</h1>
        <hr class="my-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <form class="mb-3" id="frm" name="frm" method="post">
			<!--Customer Personal Information-->
			<div class="form-row">
				<div class="form-group col-md-6">
                    <label for="ivrs">Ivrs</label>
                    <input type="text" class="form-control" id="ivrs" name="ivrs" placeholder="Enter Ivrs No." required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
					<label for="meter">Meter No</label>
					<input type="text" id="meter" name="meter" class="form-control" value="<?php echo $mtr; ?>" required autocomplete="off" />
				</div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $firstn; ?>" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lname" class="form-control" value="<?php echo $lastn; ?>" required autocomplete="off" />
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="adrs">Full Address</label>
					<input type="text" id="adrs" name="adrs" class="form-control" value="<?php echo $add; ?>" required autocomplete="off" />
				</div>
				<div class="form-group col-md-6">
					<label for="postal">Postal/Zip Code</label>
					<input type="text" id="postal" name="postal" class="form-control" value="<?php echo $zip; ?>" required autocomplete="off" />
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="mobile">Mobile No</label>
					<input type="text" id="mobile" name="mobile" class="form-control" value="<?php echo $mbl; ?>" required autocomplete="off" />
				</div>
				<div class="form-group col-md-6">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" class="form-control" value="<?php echo $mail; ?>" required autocomplete="off" />
				</div>
			</div>
			<div class="form-row">
			<div class="form-group col-md-6">
					<label for="psw">Password</label>
					<input type="text" id="psw" name="psw" class="form-control" value="<?php echo $pwd; ?>" required autocomplete="off" />
                </div>
                <div class="form-group col-md-3">
                    <label for="plan" name="plan">Plan..</label>
                    <select id="plan" name="plan" value="<?php echo $pln; ?>" class="form-control">
						<option selected>Choose Plan..</option>
						<option>Domestic Plan</option>
						<option>Comercial Plan</option>
						<option>Industrial Plan</option>
					</select>
				</div>
				<div class="form-group col-md-3">
                    <label for="stats">Status..</label>
                    <select id="stats" name="stats" value="<?php echo $sts; ?>" class="form-control">
						<option selected>Choose..</option>
						<option>Active</option>
						<option>Inactive</option>
					</select>
                </div>
			</div>
			<!--//Customer Personal Information-->
            <input type="submit" class="btn btn-outline-warning btn-md my-2 btn-block" id="sub" name="sub" value="Update " />
            <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
        </form>
    </div>
</div>
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
