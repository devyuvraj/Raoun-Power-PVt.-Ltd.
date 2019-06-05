<?php
session_start();
include("function.php");
if(isset($_SESSION["user"]))
{
}
else
{
    header("location:customerlogin.php");
}
$status ="";
if(isset($_POST["sub"]))
{
    extract($_POST);
    $qry = "INSERT INTO billdesk
    (
        ivrs, firstname, lastname, email, password, contactno, payoption, cardname, cardno, cvv, cardexpire, billamount
    )
    VALUES
    (
        '$ivrs', '$fname', '$lname', '$email', '$psw', '$contactno', '$payoptn', '$cardname', '$cardno', '$cvv', '$exprdt', '$billamt'
    )";
    $rs = executequery($qry);
    if($rs == "success")
    {
        $status = "Bill Paid Successfully";
    }
    else
    {
        $status  = "Please Try Again!";
    }
}
?>
<!doctype html>
<html lang="en-us">
<head>
<title>Raoun Power Pvt. ltd.::Billdesk</title>
    <?php include("links.php"); ?>
</head>
<body style="background-color:#EDF7F5";>
<!--navbar top-->
	<?php include("navbar.php") ?>
<!--//navbar end-->
<!--Billdesk form--->
<div class="container shadow p-1">
    <h1 style="font-family: 'Work Sans', sans-serif;" class="display-6 text-primary text-center mt-3">Pay Your Bill Online</h1>
        <hr class="my-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <form class="mb-3" id="frm" name="frm" method="post">
			<div class="form-row">
				<div class="form-group col-md-3">
                    <label for="ivrs">Ivrs</label>
                    <input type="text" class="form-control" id="ivrs" name="ivrs" placeholder="Enter Your Ivrs Id" required autocomplete="off" >
                </div>
                <div class="form-group col-md-3">
                    <label for="fname" name="mnth">FirstName</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Your Firstname" required autocomplete="off" />
                </div>
                <div class="form-group col-md-3">
                    <label for="lname" name="year">LastName</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Your Last Name" required autocomplete="off" />
                </div>
                <div class="form-group col-md-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email-Id" required autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
					<label for="psw">Password</label>
					<input type="password" id="psw" name="psw" class="form-control" placeholder="Enter Your password" required autocomplete="off" />
                </div>
                <div class="form-group col-md-3">
					<label for="contactno">Contact No</label>
					<input type="contactno" class="form-control" id="contactno" name="contactno" placeholder="Enter Your contact no" required autocomplete="off" />
                </div>
                <div class="form-group col-md-3">
                    <label for="payoptn" name="payoptn">Payment Option..</label>
                    <select id="payoptn" name="payoptn" class="form-control">
						<option selected>Choose Option..</option>
						<option>Debit Card</option>
						<option>Credit Card</option>
					</select>
                </div>
                <div class="form-group col-md-3">
					<label for="cardname">Name On Card</label>
					<input type="text" id="cardname" name="cardname" class="form-control" placeholder="Enter Name On Card" required autocomplete="off" />
                </div>
            </div>
			<div class="form-row">
                <div class="form-group col-md-3">
					<label for="cardno">Card No</label>
					<input type="text" id="cardno" name="cardno" class="form-control" placeholder="Enter 16 Digit Card No" required autocomplete="off" />
                </div>
                <div class="form-group col-md-3">
					<label for="cvv">CVV</label>
					<input type="text" id="cvv" name="cvv" class="form-control" placeholder="Enter CVV No" required autocomplete="off" />
                </div>
                <div class="form-group col-md-3">
					<label for="exprdt">Expire Date</label>
					<input type="date" id="exprdt" name="exprdt" class="form-control" placeholder="Enter Expire Date" required autocomplete="off" />
                </div>
                <div class="form-group col-md-3">
					<label for="billamt">Bill Amount</label>
					<input type="text" id="billamt" name="billamt" class="form-control" placeholder="Enter Bill Amount" required autocomplete="off" />
                </div>
            </div>
            <input type="submit" class="btn btn-outline-success btn-md my-2 btn-block" id="sub" name="sub" value="Pay" />
            <h4 class="text-success font-weight-bold text-center"><?php echo $status; ?></h4>
        </form>
    </div>
</div>
<!--//Billdesk form--->
<!--footer-->
	<?php include("footer.php") ?>
<!--footer end-->
</body>
</html>
