<?php session_start();
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:adminlogin.php");
}
?>
<?php include("function.php") ?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
    <title>Raoun Power Pvt. ltd.::Vendor</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--Admin Profile page-->
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--navbar end-->
<!--View Vendor Information section--->
<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-lg-1"></div>
			<div class="col-lg-10 table-responsive shadow">
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Email</th>
							<th>Password</th>
							<th>Name</th>
							<th>Address</th>
							<th>Postal</th>
							<th>Mobile</th>
						</tr>
					</thead>
					<tbody><?php
							$status = "";
							extract($_POST);
							$qry = "SELECT * FROM vendorinfo";
							$rs = readrecord($qry);
							while($row = mysqli_fetch_array($rs))
							{
							$id = $row["Vendorid"];
							$email = $row["Email"];
							$pwd = $row["Password"];
							$name = $row["Name"];
							$address = $row["Address"];
							$postal = $row["Postal"];
							$mobile = $row["Mobile"];
							?>
						<tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $pwd; ?></td>
							<td><?php echo $name; ?></td>
							<td><?php echo $address; ?></td>
							<td><?php echo $postal; ?></td>
							<td><?php echo $mobile; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
        <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
		<div class="col-lg-1"></div>
    </div>
</div>
<!--View Customer Information section end--->
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
