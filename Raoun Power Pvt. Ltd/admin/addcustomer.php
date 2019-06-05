<?php session_start(); ?>
<?php include("function.php") ?>
<?php
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:adminlogin.php");
}
?>
<?php
$status = "";
/*Add Customer*/
if(isset($_POST["sub"]))
{
    extract($_POST);
	$qry = "INSERT INTO customerinfo(ivrs, meterno, firstname, lastname, address, postal, mobile, email, password, Plan, status) VALUES('$ivrs', '$meter', '$fname', '$lname', '$adrs', '$postal', '$mobile', '$email', '$psw', '$plan', '$stats')";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "<h2>New Customer Added Succesfully</h2>";
    }
    else
    {
        $status = "<h2>Error To Insert</h2>";
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
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--//navbar end-->
<!--New Custumer Add Section section--->
<div class="container shadow p-1">
    <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center mt-3">Add New Customer</h1>
        <hr class="my-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <form class="mb-3" id="frm" name="frm" method="post">
			<!--Customer Personal Information-->
			<div class="form-row">
				<div class="form-group col-md-6">
                    <label for="ivrs">New Ivrs</label>
                    <input type="text" class="form-control" id="ivrs" name="ivrs" placeholder="Enter New Ivrs No." required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
					<label for="meter">Meter No</label>
					<input type="text" id="meter" name="meter" class="form-control" placeholder="Enter Meter No" required autocomplete="off" />
				</div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name." required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lname" class="form-control" placeholder="Enter Last Name" required autocomplete="off" />
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="adrs">Full Address</label>
					<input type="text" id="adrs" name="adrs" class="form-control" placeholder="Enter Full Address" required autocomplete="off" />
				</div>
				<div class="form-group col-md-6">
					<label for="postal">Postal/Zip Code</label>
					<input type="text" id="postal" name="postal" class="form-control" placeholder="Enter Postal/Zip" required autocomplete="off" />
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="mobile">Mobile No</label>
					<input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Contact No" required autocomplete="off" />
				</div>
				<div class="form-group col-md-6">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" class="form-control" placeholder="Enter Customer Email-Id" required autocomplete="off" />
				</div>
			</div>
			<div class="form-row">
			<div class="form-group col-md-6">
					<label for="psw">Password</label>
					<input type="password" id="psw" name="psw" class="form-control" placeholder="Generate New Password" required autocomplete="off" />
                </div>
                <div class="form-group col-md-3">
                    <label for="plan" name="plan">Plan..</label>
                    <select id="plan" name="plan" class="form-control">
						<option selected>Choose Plan..</option>
						<option>Domestic Plan</option>
						<option>Comercial Plan</option>
						<option>Industrial Plan</option>
					</select>
				</div>
				<div class="form-group col-md-3">
                    <label for="stats">Status..</label>
                    <select id="stats" name="stats" class="form-control">
						<option selected>Choose..</option>
						<option>Active</option>
						<option>Inactive</option>
					</select>
                </div>
			</div>
			<!--//Customer Personal Information-->
            <input type="submit" class="btn btn-outline-success btn-md my-2 btn-block" id="sub" name="sub" value="Add" />
            <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
        </form>
    </div>
</div>
<!--//New Custumer Add Section section--->
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
