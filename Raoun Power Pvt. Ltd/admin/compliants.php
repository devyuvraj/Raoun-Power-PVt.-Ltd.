<?php
session_start();
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:adminlogin.php");
}
include("function.php");
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Raoun Power Pvt. ltd.::Compliants</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--navbar end-->
<!--complaint view--->
<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-lg-1"></div>
			<div class="col-lg-10 table-responsive shadow">
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th>Compliant Id</th>
							<th>Title</th>
							<th>Compliant</th>
							<th>Email</th>
							<th>Mobile</th>
						</tr>
					</thead>
					<tbody><?php
							$status = "";
							extract($_POST);
							$qry = "SELECT * FROM complaintinfo";
							$rs = readrecord($qry);
							while($row = mysqli_fetch_array($rs))
							{
							$id = $row["id"];
							$title = $row["Title"];
							$compliant = $row["Compliant"];
							$email = $row["Email"];
							$mobile = $row["Mobile"];
							?>
						<tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $title; ?></td>
							<td><?php echo $compliant; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $mobile; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		<div class="col-lg-1"></div>
    </div>
</div>
<!--View Customer Information section end--->
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
