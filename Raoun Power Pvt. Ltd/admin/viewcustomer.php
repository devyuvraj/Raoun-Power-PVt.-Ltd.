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
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
    <title>Raoun Power Pvt. ltd.::Customers</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--Admin Profile page-->
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--navbar end-->
<!--View Customer Information section--->
<div class="container">
	<div class="row mt-4">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 table-responsive shadow">
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th>Ivrs</th>
							<th>Meter No</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Address</th>
							<th>Postal</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Plan</th>
							<th>Status</th>
							<th>Bill</th>
						</tr>
					</thead>
					<tbody><?php
							$status = "";
							extract($_POST);
							$qry = "SELECT * FROM customerinfo";
							$rs = readrecord($qry);
							while($row = mysqli_fetch_array($rs))
							{
							$ivrs = $row["ivrs"];
							$mtr = $row["meterno"];
							$frstn = $row["firstname"];
							$lstn = $row["lastname"];
							$add = $row["address"];
							$zip = $row["postal"];
							$mob = $row["mobile"];
							$mail = $row["email"];
							$pln = $row["plan"];
							$sts = $row["status"];
							?>
						<tr>
							<td><?php echo $ivrs; ?></td>
							<td><?php echo $mtr; ?></td>
							<td><?php echo $frstn; ?></td>
							<td><?php echo $lstn; ?></td>
							<td><?php echo $add; ?></td>
							<td><?php echo $zip; ?></td>
							<td><?php echo $mob; ?></td>
							<td><?php echo $mail; ?></td>
							<td><?php echo $pln; ?></td>
							<td><?php echo $sts; ?></td>
							<td><a href="billgenerat.php">Bill Now</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
    </div>
</div>
<!--View Customer Information section end--->
<?php echo "$status"; ?>
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
