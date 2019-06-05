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
/*insert record into chargesinfo*/
$status = "";
if(isset($_POST["sub"]))
{
    extract($_POST);
    $qry = "INSERT INTO chargesinfo
    (
        setdate, unitcharge, dutycharge, servicecharge, panelty, tax, depositamount, mitercharge, plan , reason
    )
    VALUES
    (
        '$stdate', '$unitchrge', '$dtcharge', '$srchrg', '$pnlty', '$tx', '$depoamt', '$mtrchrg', '$plan', '$resn'
    )";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "Successfully";
    }
    else
    {
        $status = "Error To Insert!";
    }
}
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
<!--//navbar-->
<!--Chargesinfo setup section--->
<div class="container shadow p-1">
    <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center mt-3">Charges Add Form</h1>
        <hr class="my-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <form class="mb-3" id="frm" name="frm" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="stdate">Enter Date</label>
                    <input type="date" class="form-control" id="stdate" name="stdate" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                    <label for="unitchrge">Unit Charge</label>
                    <input type="text" class="form-control" id="unitchrge" name="unitchrge" placeholder="Enter Unit Charges" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dtcharge">Duty Charges</label>
                    <input type="text" class="form-control" id="dtcharge" name="dtcharge" placeholder="Enter Duty Charges" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                    <label for="srchrg">Service Charge</label>
                    <input type="text" class="form-control" id="srchrg" name="srchrg" placeholder="Enter Service Charges" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pnlty">Penalty</label>
                    <input type="text" class="form-control" id="pnlty" name="pnlty" placeholder="Enter Penalty" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                    <label for="tx">Tax</label>
                    <input type="text" class="form-control" id="tx" name="tx" placeholder="Enter Tax" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="depoamt">Deposite Amount</label>
                    <input type="text" class="form-control" id="depoamt" name="depoamt" placeholder="Enter Depostie Amount" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                    <label for="mtrchrg">Mitter Charges</label>
                    <input type="text" class="form-control" id="mtrchrg" name="mtrchrg" placeholder="Enter Miter Charge" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="plan" name="plan">Plan..</label>
                    <select id="plan" name="plan" class="form-control">
						<option selected>Choose Plan..</option>
						<option>Domestic Plan</option>
						<option>Comercial Plan</option>
						<option>Industrial Plan</option>
					</select>
                </div>
                <div class="form-group col-md-6">
                    <label for="reason">Reason For Changes</label>
                    <textarea class="form-control" id="resn" name="resn" rows="3" cols="2" placeholder="Message/Note.."></textarea>
                </div>
            </div>
            <button type="submit" id="sub" name="sub" class="btn btn-outline-primary btn-block">+ Add</button>
            <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
        </form>
    </div>
</div>
<!--//chargesinfo setup section--->
<!--footer-->
	<?php include("footer.php") ?>
<!--//footer-->
</body>
</html>
