<?php
include("config.php");
if(isset($_REQUEST["submit"]))
{
	 $name=$_REQUEST["name"];
	 $email=$_REQUEST["email"];
	 $mobile_no=$_REQUEST["mobile_no"];
	 $delivery_add=$_REQUEST["delivery_add"];
	 $pincode=$_REQUEST["pincode"];
	 $password=$_REQUEST["password"];
	 $confirm_password=$_REQUEST["confirm_password"];
	 $sql="select * from user where mobile_no='$mobile_no'";
	 $result=mysql_query($sql);
	 if(mysql_num_rows($result)>0)
	 {
		 ?>
		 <script>alert("This mobile no is already exists  !!!")</script>
		 <?php
	 }
	 else
	 {
	 $match=strcmp($password,$confirm_password);
	 if($match==0)
	 {
		 $sql="insert into user (userid,name,email,mobile_no,delivery_add,pincode,password) 
		 values('','$name','$email','$mobile_no','$delivery_add','$pincode','$password')";
		 $result=mysql_query($sql);
		 if($result)
		 {
			  ?>
				<script>alert("Your Registration completed successfully  !!!")</script>
			<?php
		 }
	 }
	 else
	 {
		 ?>
		  <script>alert("Both password not matched")</script>
		 <?php
	 }
	 }
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
<section>
<div class="container-fluid">
<div class="row">
	<!-- <div class="col-md-6"><img class="logoimg" src="images/logo.png"/></div> -->

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
					<li><a href="login.php">Login/Register</a></li>
			</ul>
                
		  </div>
		  
		  </div>
         
        </div><!--/.nav-collapse -->
	</div>
	</nav>
		<section class="register">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				<h2>Create an account...</h2>
				</div>
			</div>


			<div class="row abc">
				<form action="newuser.php" method="post">  
				<div class="col-md-6 col-md-offset-3 mydiv">
				<div class="col-md-6 space">Name</div>
				<div class="col-md-6 space bmr"><input type="text" class="form-control" name="name" required></div>
				<div class="col-md-6 space">Email Address</div>
				<div class="col-md-6 space bmr"><input type="email" class="form-control"  name="email" required></div>
				<div class="col-md-6 space">Mobile No</div>
				<div class="col-md-6 space bmr"><input type="number" class="form-control"  name="mobile_no" required></div>
				<div class="col-md-6 space">Delivery Address</div>
				<div class="col-md-6 space bmr"><input type="text"  class="form-control" name="delivery_add" required></div>
				<div class="col-md-6 space">Pin Code</div>
				<div class="col-md-6 space bmr"><input type="number" class="form-control"  name="pincode" required></div>
				<div class="col-md-6 space">Password</div>
				<div class="col-md-6 space bmr"><input type="password"  class="form-control" name="password" required></div>
				<div class="col-md-6 space">Confirm Password</div>
				<div class="col-md-6 space bmr"><input type="password" class="form-control"  name="confirm_password" required></div>
				
				<div class="col-md-6 col-md-offset-4"> 
				  <input type="submit" id="submit" name="submit" class="move-right btn btn-success" value="SUBMIT"/>
				  
				</div> 
				</div>
				</form>
			</div>
		</div>
	</section>	  
	</body>
	<script src="js/jQuery-3.3.1.min.js"></script>  
   	<script src="js/bootstrap.min.js"></script>
</html>