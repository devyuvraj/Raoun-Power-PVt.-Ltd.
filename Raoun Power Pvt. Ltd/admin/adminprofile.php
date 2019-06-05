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
<?php
    $status="";
    /*update admininfo*/
    if(isset($_POST["sub"]))
    {
        extract($_POST);
        $qry = "UPDATE userinfo SET Firstname = '$tfname', Lastname = '$tlname', Gender = '$tgender', Dob = '$tdob', Address = '$tadd', Postal = '$tpostal', Email = '$temail', Mobile = '$tmob' where id = 'id'";
        $rs = executequery($qry);
        if($rs == "success")
        {
            $status = "Record Update Successfully!";
        }
        else
        {
            $status = "Error To Update Record!";
        }
    }
?>
<?php
/*readrecord from admin info*/
    extract($_POST);
	$qry = "SELECT * FROM userinfo";
    $rs = readrecord($qry);
	$row = mysqli_fetch_array($rs);
	$firstname = $row["Firstname"];
	$lastname = $row["Lastname"];
	$gender = $row["Gender"];
	$dob = $row["Dob"];
	$address = $row["Address"];
	$postal = $row["Postal"];
	$email = $row["Email"];
	$mobile = $row["Mobile"];
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Rouan Power Pvt. Ltd.</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--Admin Profile page-->
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--navbar end-->
<!--profile section--->
<div class="container">
	<div class="row mt-4">
		<div class="col-lg-3"></div>
			<div class="col-lg-6 shadow">
				<form class="text-center p-3" method="post" id="frm" name="frm">
					<h1 class="text-center py-2 text-info">Profile</h1>
					<input type="text" id="tfname" name="tfname" class="form-control mb-4" value="<?php echo $firstname; ?>" autocomplete="off" />
                    <span name="spname"></span>
					<input type="text" id="tlname" name="tlname" class="form-control mb-4" value="<?php echo $lastname; ?>" autocomplete="off" />
					<input type="text" id="tgender" name="tgender" class="form-control mb-4" value="<?php echo $gender; ?>" autocomplete="off" />
					<input type="text" id="tdob" name="tdob" class="form-control mb-4" value="<?php echo $dob; ?>" autocomplete="off" />
					<input type="text" id="tadd" name="tadd" class="form-control mb-4" value="<?php echo $address; ?>" autocomplete="off" />
					<input type="text" id="tpostal" name="tpostal" class="form-control mb-4" value="<?php echo $postal; ?>" autocomplete="off" />
					<input type="text" id="temail" name="temail" class="form-control mb-4" value="<?php echo $email; ?>" autocomplete="off" />
					<input type="tmob" id="tmob" name="tmob" class="form-control mb-4" value="<?php echo $mobile; ?>" autocomplete="off" />
                    <span name="spmobile"></span>
					<input type="submit" onsubmit="validation();" class="btn btn-outline-warning btn-block my-4" id="sub" name="sub" value="Update" />
				</form>
                <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
			</div>
		<div class="col-lg-3"></div>
    </div>
</div>
<!--profile section end--->

<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
    <script type="text/javascript" src="validation.js"></script>
    <script type="text/javascript">
        function validation()
        {
            data1= document.getElementById("tfname");
            result1= document.getElementById("spname");
            if(namecheck(data1,result1)==0)
                {
                    return false;
                }
            mobile=document.getElementById("tmob");
            result2=document.getElementById("spmobile");
            if(mobilecheck(mobile,result2)==0)
                {
                    return false;
                }
        }
    </script>

</body>
</html>



