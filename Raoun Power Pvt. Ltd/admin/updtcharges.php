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
/*update record*/
$status = "";
if(isset($_POST["sub"]))
{
    extract($_POST);
    $qry = "UPDATE chargesinfo SET setdate = '$stdate', dutycharge = '$dtcharge', servicecharge = '$srchrg', panelty = '$pnlty', texes = '$tx', mittercharge = '$mtrchrg', depositamount = '$depositamt', plan = '$plan', reason = '$resn' WHERE id = '$id'";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "Update Successfully";
    }
    else
    {
        $status = "Error To Update!";
    }
}
/*read record from charges table*/
extract($_POST);
$qry = "SELECT * FROM chargesinfo";
$rs = readrecord($qry);
$row = mysqli_fetch_array($rs);
$date = $row["setdate"];
$dutycharge = $row["dutycharge"];
$servicechrage = $row["servicecharge"];
$panelty = $row["panelty"];
$tex = $row["tax"];
$depoamt = $row["depositamount"];
$mtrchrg = $row["mitercharge"];
$plan = $row["plan"];
$reason = $row["reason"];
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Rouan Power Pvt. Ltd.::Charges</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--navbar top-->
	<?php include("navbar.php"); ?>
<!--navbar end-->
<!--Chargesinfo setup section--->
<div class="container shadow p-1">
    <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center mt-3">Charges Update Form</h1>
        <hr class="my-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <form class="mb-3" id="frm" name="frm" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="id">Enter Id</label>
                    <input type="id" class="form-control" id="id" name="id" placeholder="Enter Id To Update" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                    <label for="stdate">Enter Date</label>
                    <input type="date" class="form-control" id="stdate" name="stdate" value="<?php echo $date; ?>" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dtcharge">Duty Charges</label>
                    <input type="text" class="form-control" id="dtcharge" name="dtcharge" value="<?php echo $dutycharge; ?>" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                    <label for="srchrg">Service Charge</label>
                    <input type="text" class="form-control" id="srchrg" name="srchrg" value="<?php echo $servicechrage; ?>" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pnlty">Penalty</label>
                    <input type="text" class="form-control" id="pnlty" name="pnlty" value="<?php echo $panelty; ?>" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                    <label for="tx">Tax</label>
                    <input type="text" class="form-control" id="tx" name="tx" value="<?php echo $tex; ?>" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="depositamt">Deposit Amount</label>
                    <input type="text" class="form-control" id="depositamt" name="depositamt" value="<?php echo $tex; ?>" required autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <label for="plan" name="plan" value="<?php echo $plan; ?>">Plan..</label>
                    <select id="plan" name="plan" class="form-control">
						<option selected>Choose Plan..</option>
						<option>Domestic Plan</option>
						<option>Comercial Plan</option>
						<option>Industrial Plan</option>
					</select>
                </div>
                <div class="form-group col-md-4">
                    <label for="reason">Reason For Changes</label>
                    <textarea class="form-control" id="resn" name="resn" rows="3" cols="2" value="<?php echo $reason; ?>" ></textarea>
                </div>
            </div>
            <button type="submit" id="sub" name="sub" class="btn btn-outline-warning btn-block">Update</button>
            <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
            </form>
        </div>
    </div>
</div>
<!--//chargesinfo setup section--->
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
