<?php
include("function.php");
session_start();
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:vendorlogin.php");
}
/*upload reading record*/
$status = "";
$path ="";
if(isset($_POST["sub"]))
{
    extract($_POST);
    if($_FILES["photo"]["error"]==0)
    {
        $path = "upload/".$_FILES["photo"]["name"];
        move_uploaded_file($_FILES["photo"]["tmp_name"],$path);
    }
    $qry = "INSERT INTO readinginfo(ivrs, meterno, readdate, month, year, unitconsumed, vendorid, msg, photo) VALUES('$ivrs', '$meter', '$rdate', '$mnth', '$year', '$unit', '$vid', '$msg', '$path')";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "Reading Uploaded Successfully";
    }
    else
    {
        $status = "Error To Upload Reading!";
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Rouan Power Pvt. Ltd.::Reading</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--navbar top-->
	<?php include("navbar.php"); ?>
<!--navbar end-->
<!--upload meter reading info section--->
<div class="container shadow p-1">
    <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center mt-3">Upload Reading Info</h1>
        <hr class="my-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <form class="mb-3" id="frm" name="frm" method="post" enctype="multipart/form-data">
			<div class="form-row">
				<div class="form-group col-md-6">
                    <label for="ivrs">Ivrs</label>
                    <input type="text" class="form-control" id="ivrs" name="ivrs" placeholder="Enter Ivrs No." required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
					<label for="meter">Meter No</label>
					<input type="text" id="meter" name="meter" class="form-control" placeholder="Enter Meter No" required autocomplete="off" />
				</div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-2">
                    <label for="reddate">Reading Date</label>
                    <input type="date" class="form-control" id="rdate" name="rdate" required autocomplete="off">
                </div>
                <div class="form-group col-md-2">
                <label for="plan" name="plan">Month</label>
                <select id="mnth" name="mnth" class="form-control">
						<option selected>Month..</option>
						<option>January</option>
						<option>Febury</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>Auguest</option>
						<option>September</option>
						<option>october</option>
						<option>November</option>
						<option>December</option>
					</select>
                </div>
                <div class="form-group col-md-2">
					<label for="year">Year</label>
					<input type="text" id="year" name="year" class="form-control" placeholder="Enter Year" required autocomplete="off" />
				</div>
                <div class="form-group col-md-6">
					<label for="unit">Unit Consumed</label>
					<input type="text" id="unit" name="unit" class="form-control" placeholder="Enter Consumed Unit" required autocomplete="off" />
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="vid">Vendor Id</label>
					<input type="text" id="vid" name="vid" class="form-control" placeholder="Enter vendor id" required autocomplete="off" />
				</div>
                <div class="form-group col-md-6">
					<label for="postal">Message</label>
					<textarea class="form-control" id="msg" name="msg" rows="3" cols="2" placeholder="Message/Note.."></textarea>
                </div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-6">
                    <input type="file" class="custom-file-input" id="photo" name="photo">
                    <label class="custom-file-label" for="file">Choose file</label>
                </div>
			</div>
            <input type="submit" class="btn btn-outline-success btn-md my-2 btn-block" id="sub" name="sub" value="Submit" />
            <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
        </form>
    </div>
</div>
<!--//upload reading form section--->
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
