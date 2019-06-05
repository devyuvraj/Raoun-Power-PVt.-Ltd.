<?php
session_start();
include("function.php");
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:customerlogin.php");
}
$status ="";
extract($_POST);
$ivrs = $_SESSION["ivrs"];
/* get customer ivrs */

$qry = "SELECT * FROM billinfo WHERE ivrs = '$ivrs'";
$rs = readrecord($qry);
$row = mysqli_fetch_array($rs);
$month = $row["month"];
$year = $row["year"];
$gdate = $row["generatedate"];
$ddate = $row["duedate"];
$schrg = $row["servicecharge"];
$dchrg = $row["dutycharge"];
$mchrg = $row["metercharge"];
$tx = $row["tax"];
$pnlty = $row["panelty"];
$unitrate = $row["unitrate"];
$plan = $row["plan"];
$totalunit = $row["totalunit"];
$totalbill = $row["totalbill"];

?>
<!doctype html>
<html lang="en-us">
<head>
<title>Raoun Power Pvt. ltd.::Bill</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--//navbar end-->
<!--Customer Bill information--->
<div class="container shadow p-1">
    <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center mt-3">View Bill</h1>
        <hr class="my-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <form class="mb-3" id="frm" name="frm" method="post">
			<div class="form-row">
				<div class="form-group col-md-4">
                    <label for="ivrs">Ivrs</label>
                    <input type="text" class="form-control" id="ivrs" name="ivrs" value="<?php echo $ivrs; ?>" readonly >
                </div>
                <div class="form-group col-md-4">
                    <label for="mnth" name="mnth">Month</label>
                    <input type="text" class="form-control" id="month" name="month" value="<?php echo $month; ?>" readonly >
                </div>
                <div class="form-group col-md-4">
                    <label for="year" name="year">Year</label>
                    <input type="text" class="form-control" id="year" name="year" value="<?php echo $year; ?>" readonly >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="gdate">Generate Date</label>
                    <input type="text" class="form-control" id="gdate" name="gdate" value="<?php echo $gdate; ?>" readonly autocomplete="off">
                </div>
                <div class="form-group col-md-4">
					<label for="ddate">Due Date</label>
					<input type="text" id="ddate" name="ddate" class="form-control" value="<?php echo $ddate; ?>" readonly autocomplete="off" />
                </div>
                <div class="form-group col-md-4">
					<label for="schrg">Service charge</label>
					<input type="text" id="schrg" name="schrg" class="form-control" value="<?php echo $schrg; ?>" readonly />
				</div>
            </div>
			<div class="form-row">
                <div class="form-group col-md-4">
					<label for="dchrg">Duty Charge</label>
					<input type="text" id="dchrg" name="dchrg" class="form-control" value="<?php echo $dchrg; ?>" readonly />
                </div>
                <div class="form-group col-md-4">
					<label for="mchrg">Meter Charge</label>
					<input type="text" id="mchrg" name="mchrg" class="form-control" value="<?php echo $mchrg; ?>" readonly />
                </div>
                <div class="form-group col-md-4">
					<label for="tx">Taxes</label>
					<input type="text" id="tx" name="tx" class="form-control" value="<?php echo $tx; ?>" readonly />
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
					<label for="pnlty">Panelty</label>
					<input type="text" id="pnlty" name="pnlty" class="form-control" value="<?php echo $pnlty; ?>" readonly autocomplete="off" />
                </div>
                <div class="form-group col-md-4">
					<label for="unitrate">Per Unit Rate</label>
					<input type="text" id="unitrate" name="unitrate" class="form-control" value="<?php echo $unitrate; ?>" readonly />
                </div>
                <div class="form-group col-md-4">
					<label for="plan">Plan</label>
					<input type="text" id="plan" name="plan" class="form-control" value="<?php echo $plan; ?>" readonly />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
					<label for="totalunit">Total Unit Consumed</label>
					<input type="text" id="totalunit" name="totalunit" class="form-control" value="<?php echo $totalunit; ?>" readonly />
                </div>
				<div class="form-group col-md-6">
					<label for="totalbill">Total Bill</label>
					<input type="text" id="totalbill" name="totalbill" class="form-control" value="<?php echo $totalbill; ?>" readonly />
                </div>
            </div>
            <a href="billdesk.php" role="button" class="btn btn-outline-success btn-md my-2 btn-block" id="sub" name="sub">Pay Now</a>
            <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
        </form>
    </div>
</div>
<!--//Customer Bill information--->
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
