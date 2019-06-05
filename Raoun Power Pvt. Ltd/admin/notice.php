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
<?php
$status = "";
/*Add notice*/
if(isset($_POST["sub"]))
{
    extract($_POST);
	$qry = "INSERT INTO noticeinfo(id, Notice_Date, Notice_title, Notice_Message) VALUES('$notid', '$notdate', '$nottitle', '$notmsg')";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "<h2>Notice Send Succesfully</h2>";
    }
    else
    {
        $status = "<h2>Faild</h2>";
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
<title>Raoun Power Pvt. ltd.::Notice</title>
	<?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--Admin home page-->
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--navbar end-->
<!--Notice Form--->
<div class="container">
	<div class="row mt-4">
		<div class="col-lg-3"></div>
			<div class="col-lg-6 shadow">
				<form class="text-center p-3" method="post" id="frm" name="frm">
					<h1 class="text-center py-2 text-info">Notice</h1>
					<p>Enter New Notice</p>
					<input type="text" id="notid" name="notid" class="form-control mb-4" placeholder="Notice Id No" required />
					<input type="text" id="notdate" name="notdate" class="form-control mb-4" placeholder="Notice Date" required />
					<input type="text" id="title" name="nottitle" class="form-control mb-4" placeholder="Notice Title" required />
					<textarea id="notmsg" name="notmsg" class="form-control mb-4" rows="7" placeholder="Notice Message...." required ></textarea>
					<input type="submit" class="btn btn-outline-primary btn-md my-2 btn-md" id="sub" name="sub" />
				</form>
			</div>
		<div class="col-lg-3">
            <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
        </div>
    </div>
</div>
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
