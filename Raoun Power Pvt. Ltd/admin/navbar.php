<!--navbar top-->
    <nav class="navbar navbar-expand-lg navbar-light shadow bg-light">
	    <a class="navbar-brand" href="admindashbord.php" title="Admin"><i class="fab fa-r-project"></i> Raoun Power Pvt. ltd.</a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
		    </button>
<div class="collapse navbar-collapse" id="navbarToggler">
 <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
 </ul>
 <ul class="navbar-nav">
<!--Customer Section-->
  <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Customer</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item nav-link" href="addcustomer.php" title="Add Customer">Add Customer</a>
					<a class="dropdown-item nav-link" href="viewcustomer.php" title="View Customer">View Customers</a>
					<a class="dropdown-item nav-link" href="updtcustomer.php" title="Update Customer">Update Customer</a>
					<a class="dropdown-item nav-link" href="delcustomer.php" title="Delete Customer">Del Customer</a>
				</div>
            </li>
			<!--Vendor Section-->
			<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vendor
                </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item nav-link" href="addvendor.php" title="Add Customer">Add Vendor</a>
					<a class="dropdown-item nav-link" href="viewvendor.php" title="View Customer">View Vendor</a>
					<a class="dropdown-item nav-link" href="updtvendor.php" title="Update Customer">Update Vendor</a>
					<a class="dropdown-item nav-link" href="delvendor.php" title="Delete Customer">Del Vendor</a>
				</div>
            </li>
			<!--Admin Section-->
			<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item nav-link" href="notice.php" title="Add Customer">Notice</a>
                    <a class="dropdown-item nav-link" href="addcharges.php" title="add charges">Add Charges</a>
                    <a class="dropdown-item nav-link" href="updtcharges.php" title="update charges">Update Charges</a>
                    <a class="dropdown-item nav-link" href="viewiupldreading.php" title="view Upload Reading">View Reading</a>
                </div>
            </li>
      <li class="nav-item avatar dropdown">
        <a href="" class="nav-link dropdown-toggle" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0" alt="avatar" height="30">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user">
          <a class="nav-link dropdown-item" href="adminprofile.php" title="View Profile"><i class="fas fa-user"></i> Profile</a>
          <a class="nav-link dropdown-item" href="logout.php" title="Logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
      </li>
    </ul>
    </div>
</nav>