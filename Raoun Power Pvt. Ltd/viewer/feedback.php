<?php
include("function.php");

/*Feedback Form*/
$status = "";
if(isset($_POST["sub"]))
{
    extract($_POST);
    $qry = "INSERT INTO feedbackinfo(Name, Email, Message) VALUES('$name', '$mail', '$msg')";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "Feedback Send Successfully";
    }
    else
    {
        $status = "Faild To Feedback!";
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
    <title>Raoun Power Pvt. Ltd. ::Home</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--navigation section-->
    <?php include("navbar.php"); ?>
    <!--Customer Feedback form section-->
    <div class="container">
    <div class="row mt-3">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 shadow">
            <form class="p-3" method="post" id="frm" name="frm" enctype="multipart/form-data">
                    <div class="form-group">
                    <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center py-2">Customer Feedback Form</h1>
                        <hr class="my-2">
                    <p class="text-justify font-italic text-center">
                        Please take a few minutes to give us feedback about our service by filling in this short Customer Feedback Form. We are conducting this research <br> in order to measure your level of satisfaction with the quality of our service. We thank you for your participation.
                    </p>
                    <div class="form-group mt-3">
                        <label for="name">Your Name:</label>
                        <input type="text" id="unit" name="name" class="form-control" placeholder="Enter Your Full Name Here.." autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="mail" name="mail" class="form-control" placeholder="Enter E-Mail Address.." autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label for="msg">Message</label>
                        <textarea class="form-control" id="msg" name="msg" rows="3" cols="2" placeholder="Message/Note.."></textarea>
                    </div>
                    <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
                    <input type="submit" class="btn btn-outline-primary btn-md my-4" id="sub" name="sub" value="Submit" />
                </form>
            </div>
        </div>
    </div>
</div>
<!--//Customer Feedback form section-->
	<?php include("footer.php"); ?>
</body>
</html>
