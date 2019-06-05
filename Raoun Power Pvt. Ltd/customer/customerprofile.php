<?php
include("function.php");
session_start();
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:customerlogin.php");
}
/*update customer*/
$status = "";
if(isset($_POST["sub"]))
{
	extract($_POST);
	$_SESSION["ivrs"]=$ivrs;
	$qry ="UPDATE customerinfo SET firstname = '$fname', lastname = '$lname', address = '$adr', postal = '$zip', email = '$mail', mobile = '$mob', password = '$psw' WHERE ivrs = $ivrs";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status ="Record Updated Successfully";
    }
    else
    {
        $status ="Record Updated Faild!";
    }
}
/*readrecord from customer database*/
	extract($_POST);
	$ivrs = $_SESSION["ivrs"];
	$qry = "SELECT * FROM customerinfo WHERE ivrs = '$ivrs'";
	$rs = readrecord($qry);
	$row = mysqli_fetch_array($rs);
	$ivrs = $row["ivrs"];
	$mtrno = $row["meterno"];
	$fname = $row["firstname"];
	$lname = $row["lastname"];
	$adr = $row["address"];
	$zip = $row["postal"];
	$mob = $row["mobile"];
	$mail = $row["email"];
	$psw = $row["password"];
	$plan = $row["plan"];
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Rouan Power Pvt. Ltd.::Customer</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--Customer Profile page-->
<!--navbar top-->
	<?php include("navbar.php"); ?>
<!--navbar end-->
<!--Customer Profile--->
<div class="container shadow p-1">
    <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center mt-3">Profile</h1>
        <hr class="my-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <form class="mb-3" id="frm" name="frm" method="post">
			<div class="form-row">
				<div class="form-group col-md-6">
                    <label for="ivrs">Ivrs No</label>
                    <input type="text" id="ivrs" name="ivrs" class="form-control" value="<?php echo $ivrs; ?>" readonly="true" />
                </div>
                <div class="form-group col-md-6">
					<label for="meter">Meter No</label>
					<input type="text" id="mtrno" name="mtrno" class="form-control" value="<?php echo $mtrno; ?>" readonly="true" />
				</div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" class="form-control" value="<?php echo $fname; ?>" required autocomplete="off" />
                </div>
                <div class="form-group col-md-6">
					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lname" class="form-control" value="<?php echo $lname; ?>" autocomplete="off" required />
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="adrs">Full Address</label>
					<input type="text" id="adr" name="adr" class="form-control" value="<?php echo $adr; ?>" autocomplete="off" required />
				</div>
				<div class="form-group col-md-6">
					<label for="postal">Postal/Zip Code</label>
					<input type="text" id="zip" name="zip" class="form-control" value="<?php echo $zip; ?>" autocomplete="off" required />
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="mobile">Mobile No</label>
					<input type="text" id="mob" name="mob" class="form-control" value="<?php echo $mob; ?>" autocomplete="off" required />
				</div>
				<div class="form-group col-md-6">
					<label for="email">Email</label>
					<input type="text" id="mail" name="mail" class="form-control" value="<?php echo $mail; ?>" autocomplete="off" required />
				</div>
			</div>
			<div class="form-row">
			<div class="form-group col-md-6">
					<label for="psw">Password</label>
					<input type="text" id="psw" name="psw" class="form-control" value="<?php echo $psw; ?>" autocomplete="off" required />
                </div>
                <div class="form-group col-md-6">
                    <label for="plan" name="plan">Plan..</label>
                    <input type="text" id="plan" name="plan" class="form-control" value="<?php echo $plan; ?>" readonly="true" required />
				</div>
			</div>
            <input type="submit" class="btn btn-outline-warning btn-block my-2" id="sub" name="sub" value="Update" />
            <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
        </form>
    </div>
</div>
<!--//Customer Profile--->
<!--footer-->
	<?php include("footer.php"); ?>
<!--footer end-->
</body>
</html>
