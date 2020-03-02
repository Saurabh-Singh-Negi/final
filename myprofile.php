<?php
include("config.php");
if(isset($_SESSION["userid"]))
{
}
else
{
	?>
	<script>window.location.href="login.php";</script>
	<?php
}
if(isset($_REQUEST["submit"]))
{
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$mobile_no=$_REQUEST["mobile_no"];
$delivery_add=$_REQUEST["delivery_add"];
$pincode=$_REQUEST["pincode"];

$sql="update user set name='$name', email='$email', mobile_no='$mobile_no', delivery_add='$delivery_add', pincode='$pincode' where userid='".$_SESSION["userid"]."'";
$result=mysql_query($sql);
?>
<script>
			alert("Profile Updated Successfully!");
			window.location.href="welcome.php";
</script>
<?php
	
}
$sql="select * from user where userid='".$_SESSION["userid"]."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$name=$row["name"];
$email=$row["email"];
$mobile_no=$row["mobile_no"];
$delivery_add=$row["delivery_add"];
$pincode=$row["pincode"];
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

</head>
<body>
<section class="mail">
	<div class="container mail">
		<div class="col-md-6">
		<h1 class="mail"><i class="icon fa fa-envelope-o"></i>Give us a mail at - support@spoonandfork.com</h1>
		</div>
		<div class="col-md-6 follow">
		<h1 class="follow">Follow Us &nbsp&nbsp
		<i class="icon fa fa-facebook-square follow"></i>
		<i class="icon fa fa-instagram follow"></i>
		</h1>
		</div>
	</div>
</section>

<nav class="navbar navbar-dark navbar-top menu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
    		</div>
		    <a class="navbar-brand" href="index.php"><i class="icon fa fa-home navicon"></i>Spoon&Fork</a>
		
		<div id="navbar" class="navbar-collapse collapse">
		 <div class="row">		 		
		 <div class="col-md-6">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="index.php">			 
			<i class="icon fa fa-home navicon"></i>Home</a></li> -->
			<li class=""></li>
			<li class=""><a href="about.php">About-us</a></li>
			
			
			<li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our-Menu<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<?php
				$ctr=1;
				$sql="select * from category";
				$result=mysql_query($sql);
				while($row=mysql_fetch_array($result))
				{
				?>
				<li><a href="food.php?categoryid=<?php echo $row["categoryid"];?>"><?php echo $row["categoryname"];?> </a></li>
				<?php
				
				}
				?>
			
			</ul>
				<li><a href="how2use.php">How to Use ?</a></li>
					<li class=""><a href="contact.php">Contact</a></li>
					<li><a href="logout.php">Log Out</a></li>
					<li><a href="myprofile.php"><?php echo $name; ?></a></li>
			</ul>
                
		  </div>
		  
		  </div>
         
        </div><!--/.nav-collapse -->
	</div>
	</nav>
	<section class="wel">
	  <div class="row">
	  <div class="container">
	  <form action="myprofile.php" method="post">  
			<div class="col-md-4">
					<ul class="userlink">
						<li><a href="myprofile.php" class="alink form-control">My Profile</a></li><br>
						<li><a href="orderhistory.php" class="alink form-control">Order History</a></li><br>
						<li><a href="changepassword.php" class="alink form-control">Change Password</a></li><br>
						<li><a href="logout.php" class="alink form-control">Log Out</a></li><br>

					</ul>
			</div>
			<div class="col-md-8 welcomebg">
				<div class="col-md-6 ">Name</div>
				<div class="col-md-6  bmr"><input type="text" class="form-control" name="name" value="<?php echo $name ?>" required></div>
				<div class="col-md-6 ">Email Address</div>
				<div class="col-md-6  bmr"><input type="email" class="form-control"  name="email" value="<?php echo $email ?>" required></div>
				<div class="col-md-6 ">Mobile No</div>
				<div class="col-md-6  bmr"><input type="number" class="form-control"  name="mobile_no" value="<?php echo $mobile_no ?>" required></div>
				<div class="col-md-6 ">Delivery Address</div>
				<div class="col-md-6  bmr"><input type="text" class="form-control"  name="delivery_add" value="<?php echo $delivery_add ?>" required></div>
				<div class="col-md-6 ">Pin Code</div>
				<div class="col-md-6  bmr"><input type="number" class="form-control"  name="pincode" value="<?php echo $pincode ?>" required></div>
				
				 <input type="submit" id="submit" name="submit" class="move-right btn btn-success" value="Update Profile"/>
			</div>
			
		</form>
	</div>
	</div>
	</section>
	
</html>