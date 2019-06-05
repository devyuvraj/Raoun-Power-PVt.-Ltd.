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
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
    <title>Raoun Power Pvt. ltd.::Vendor</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--//navbar-->
<!--View Uploaded Reading from vendor section--->
<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-lg-1"></div>
			<div class="col-lg-10 table-responsive shadow">
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th>Ivrs</th>
							<th>Meter No</th>
							<th>Reading Date</th>
							<th>Month</th>
							<th>Year</th>
							<th>Unit Consumed</th>
							<th>Vendor Id</th>
							<th>Message</th>
							<th>Photo</th>
							<th>Bill Now</th>
						</tr>
					</thead>
					<tbody><?php
							$status = "";
							extract($_POST);
							$qry = "SELECT * FROM readinginfo";
							$rs = readrecord($qry);
							while($row = mysqli_fetch_array($rs))
							{
							$ivrs = $row["ivrs"];
							$mtr = $row["meterno"];
							$regdt = $row["readdate"];
							$month = $row["month"];
							$year = $row["year"];
							$unitconsumed = $row["unitconsumed"];
							$vndrid = $row["vendorid"];
							$msg = $row["msg"];
							$photo = $row["photo"];
							?>
						<tr>
							<td><?php echo $ivrs; ?></td>
							<td><?php echo $mtr; ?></td>
							<td><?php echo $regdt; ?></td>
							<td><?php echo $month; ?></td>
							<td><?php echo $year; ?></td>
							<td><?php echo $unitconsumed; ?></td>
							<td><?php echo $vndrid; ?></td>
							<td><?php echo $msg; ?></td>
							<td><?php echo $photo; ?></td>
							<td><a href="billgenerat.php?ivrs=<?php echo $ivrs; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>">Bill Now</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		<div class="col-lg-1"></div>
    </div>
</div>
<!--View Customer Information section end--->
<?php echo "$status"; ?>
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
