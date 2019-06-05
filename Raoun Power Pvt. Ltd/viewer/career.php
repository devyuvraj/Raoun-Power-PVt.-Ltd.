<?php
include("function.php");
$status = "";
if(isset($_POST["sub"]))
{
    extract($_POST);
    if($_FILES["doc"]["error"]==0)
    {
        $path = "document/".$_FILES["doc"]["name"];
        move_uploaded_file($_FILES["doc"]["tmp_name"],$path);
    }
    $qry = "INSERT INTO careerinfo(firstname, lastname, email, password, company, designation, document) VALUES('$fname', '$lname', '$email', '$psw', '$company', '$designation', '$path')";

    $rs =executequery($qry);
    if($rs == "success")
    {
        $status = "Submited Successfully";
    }
    else
    {
        $status = "Error To Submit!";
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
    <title>Raoun Power Pvt. Ltd. ::Career</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--navigation section-->
    <?php include("navbar.php"); ?>
<!--//navigation section end-->

<!--career form section-->
<div class="container shadow p-1">
            <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center mt-3">CAREER WITH US</h1>
            <hr class="my-2">
            <p class="text-justify font-italic text-center">
                Dont hesitate to get touch please fill out this form and we'll get back to you within 48hrs.
                <br>We hand picked to provide the right balance of skills to work.
            </p>
    <div class="row mt-1">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 mt-2 border-right text-center">
            <h2 class="font-italic">Get In Touch</h2>
            <hr class="my-1">
            <p>Mon-Sat: 9:30-7:00</p>
            <h3><i class="fas fa-map-marked-alt"></i> Address</h3>
            <p>Raoun Power Pvt. Ltd.</p>
            <h3><i class="fas fa-phone-square"></i> Call Us</h3>
            <p>0121-25695</p>
            <h3><i class="fas fa-envelope-open"></i> Email</h3>
            <p><a href="mailto:yuvrajsoni92@gmail.com" target="_blank">info@raoun.co.in</a></p>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 mt-2">
        <form class="mb-3" id="frm" name="frm" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="inputPassword4" name="lname" placeholder="Enter Last Name" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Password</label>
                    <input type="password" class="form-control" id="psw" name="psw" placeholder="Enter Password" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="company">Current Company</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Enter Current Company" required autocomplete="off">
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Designation</label>
                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="position" name="position">Position Applying For..</label>
                    <select id="position" class="form-control">
                        <option selected>Choose...</option>
                        <option>General Manager</option>
                        <option>Project Manager</option>
                        <option>Vendor</option>
                        <option>Computer Operator</option>
                    </select>
                </div>
                <div class="form-group col-md-8">
                    <label for="doc">Document/Resume</label>
                    <input type="file" class="form-control" id="doc" name="doc">
                </div>
            </div>
            <button type="submit" id="sub" name="sub"class="btn btn-primary btn-md">Apply Now</button>
            <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
            </form>
        </div>
    </div>
</div>
<!--//career form section-->

<!--footer section -->
    <?php include("footer.php"); ?>
</body>
</html>
