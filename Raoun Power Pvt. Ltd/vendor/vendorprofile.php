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
/*readrecord from admin info*/
    extract($_POST);
	$qry = "SELECT * FROM vendorinfo";
    $rs = readrecord($qry);
	$row = mysqli_fetch_array($rs);
	$id = $row["Vendorid"];
	$email = $row["Email"];
	$password = $row["Password"];
	$name = $row["Name"];
	$address = $row["Address"];
	$postal = $row["Postal"];
	$mobile = $row["Mobile"];
/*update record*/
$status = "";
if(isset($_POST["sub"]))
{
    extract($_POST);
    $qry = "UPDATE vendorinfo SET Email = '$email', Password = '$pwd', Name = '$name', Address = '$address', Postal = '$postal', Mobile = '$mob'";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "Record Update Successfully";
    }
    else
    {
        $status = "Error To Update Record";
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Rouan Power Pvt. Ltd.::Profile</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--Vendor Profile page-->
<!--navbar top-->
	<?php include("navbar.php"); ?>
<!--navbar end-->
<!--profile section--->
<div class="container">
	<div class="row mt-4">
		<div class="col-lg-3"></div>
			<div class="col-lg-6 shadow">
				<form class="text-center p-3" method="post" id="frm" name="frm">
					<h1 class="text-center py-2 text-info">Profile</h1>
					<input type="text" id="id" name="id" class="form-control mb-4" value="<?php echo $id; ?>" readonly="true" />
					<input type="text" id="email" name="email" class="form-control mb-4" value="<?php echo $email; ?>" autocomplete="off" />
					<input type="text" id="pwd" name="pwd" class="form-control mb-4" value="<?php echo $password; ?>" autocomplete="off" />
					<input type="text" id="name" name="name" class="form-control mb-4" value="<?php echo $name; ?>" autocomplete="off" />
					<input type="text" id="address" name="address" class="form-control mb-4" value="<?php echo $address; ?>" autocomplete="off" />
					<input type="text" id="postal" name="postal" class="form-control mb-4" value="<?php echo $postal; ?>" autocomplete="off" />
					<input type="tmob" id="mob" name="mob" class="form-control mb-4" value="<?php echo $mobile; ?>" autocomplete="off" />
					<input type="submit" class="btn btn-outline-warning btn-block my-4" id="sub" name="sub" value="Update" />
                    <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
				</form>
			</div>
		<div class="col-lg-3"></div>
    </div>
</div>
<!--profile section end--->
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
