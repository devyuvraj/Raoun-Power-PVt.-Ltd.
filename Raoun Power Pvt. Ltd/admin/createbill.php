<?php
session_start();
include("function.php");
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:adminlogin.php");
}
$status = "";
/*Generat bill*/
if(isset($_POST["sub"]))
{
    extract($_POST);
    $qry = "INSERT INTO billinfo
    (
        ivrs, month, year, generatedate, duedate, servicecharge, dutycharge, metercharge, tax, panelty, unitrate, plan, totalunit, totalbill
    )
    VALUES
    (
        '$ivrs', '$month', '$year', '$gdate', '$ddate', '$schrg', '$dchrg', '$mchrg', '$tx', '$pnlty', '$unitrate', '$plan', '$totalunit', '$totalbill'
    )";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "<h2>Bill Genrate Succesfully</h2>";
    }
    else
    {
        $status = "<h2>Error To Generate Bill</h2>";
    }
}
/* get plan from customerinfo */
extract($_POST);
$ivrs=$_GET['ivrs'];
$qry = "SELECT * FROM customerinfo where ivrs = '$ivrs'";
$rs = readrecord($qry);
$row = mysqli_fetch_array($rs);
$plan = $row["plan"];

/*auto fill charges amount*/
$qry = "SELECT * FROM chargesinfo where plan = '$plan'";
$rs = readrecord($qry);
$row = mysqli_fetch_array($rs);
$srvchrg = $row["servicecharge"];
$pnltys = $row["panelty"];
$tax = $row["tax"];
$ducharg = $row["dutycharge"];
$unitrate = $row["unitcharge"];
$mtrchrg = $row["mitercharge"];

/*get unit consumed value from readinginfo*/
$ivrs=$_GET['ivrs'];
$qry = "SELECT * FROM readinginfo WHERE ivrs = '$ivrs'";
$rs = readrecord($qry);
$row = mysqli_fetch_array($rs);
$unitconsumed = $row["unitconsumed"];

/* get total bill amount */
$qry = "SELECT * FROM chargesinfo where plan = '$plan'";
$rs = readrecord($qry);
$row = mysqli_fetch_array($rs);
$schrg = $row["servicecharge"];
$dchrg = $row["dutycharge"];
$mchrg = $row["mitercharge"];
$tx = $row["tax"];
$pnlty = $row["panelty"];
$totalamt = $schrg + $dchrg + $mchrg + $tx + $pnlty;

$ivrs=$_GET['ivrs'];
$qry = "SELECT * FROM readinginfo WHERE ivrs = '$ivrs'";
$rs = readrecord($qry);
$row = mysqli_fetch_array($rs);
$unitconsumed = $row["unitconsumed"];

$unit = $unitconsumed * $unitrate;
$tot = $unit + $totalamt;
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
<!--New Custumer Add Section section--->
<div class="container shadow p-1">
    <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center mt-3">Generate New Bill</h1>
        <hr class="my-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <form class="mb-3" id="frm" name="frm" method="post">
			<!--Customer Personal Information-->
			<div class="form-row">
				<div class="form-group col-md-4">
                    <label for="ivrs">Ivrs</label>
                    <input type="text" class="form-control" id="ivrs" name="ivrs" value="<?php echo $_GET["ivrs"]; ?>" readonly >
                </div>
                <div class="form-group col-md-4">
                    <label for="mnth" name="mnth">Month</label>
                    <input type="text" class="form-control" id="month" name="month" value="<?php echo $_GET["month"]; ?>" readonly >
                </div>
                <div class="form-group col-md-4">
                    <label for="year" name="year">Year</label>
                    <input type="text" class="form-control" id="year" name="year" value="<?php echo $_GET["year"]; ?>" readonly >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="gdate">Generate Date</label>
                    <input type="date" class="form-control" id="gdate" name="gdate" required autocomplete="off">
                </div>
                <div class="form-group col-md-4">
					<label for="ddate">Due Date</label>
					<input type="date" id="ddate" name="ddate" class="form-control" required autocomplete="off" />
                </div>
                <div class="form-group col-md-4">
					<label for="schrg">Service charge</label>
					<input type="text" id="schrg" name="schrg" class="form-control" value="<?php echo $srvchrg; ?>" readonly />
				</div>
            </div>
			<div class="form-row">
                <div class="form-group col-md-4">
					<label for="dchrg">Duty Charge</label>
					<input type="text" id="dchrg" name="dchrg" class="form-control" value="<?php echo $ducharg; ?>" readonly />
                </div>
                <div class="form-group col-md-4">
					<label for="mchrg">Meter Charge</label>
					<input type="text" id="mchrg" name="mchrg" class="form-control" value="<?php echo $mtrchrg; ?>" readonly />
                </div>
                <div class="form-group col-md-4">
					<label for="tx">Taxes</label>
					<input type="text" id="tx" name="tx" class="form-control" value="<?php echo $tax; ?>" readonly />
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
					<label for="pnlty">Panelty</label>
					<input type="text" id="pnlty" name="pnlty" class="form-control" value="<?php echo $pnltys; ?>" required autocomplete="off" />
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
					<input type="text" id="totalunit" name="totalunit" class="form-control" value="<?php echo $unitconsumed; ?>" readonly />
                </div>
				<div class="form-group col-md-6">
					<label for="totalbill">Total Bill</label>
					<input type="text" id="totalbill" name="totalbill" class="form-control" value="<?php echo $tot; ?>" readonly />
                </div>
            </div>
			<!--//Customer Personal Information-->
            <input type="submit" class="btn btn-outline-success btn-md my-2 btn-block" id="sub" name="sub" value="Generate" />
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
