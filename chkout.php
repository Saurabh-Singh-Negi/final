<?php
include("config.php");
if(isset($_REQUEST["login"]))
{
	$mobile_no=$_REQUEST["mobile_no"];
	$password=$_REQUEST["password"];
	$sql="select * from user where mobile_no='$mobile_no' and password='$password'";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)>0)
	{
		$row=mysql_fetch_array($result);
		?>
		<script>
		window.location.href="customer_confirm.php?id=<?php echo $row["userid"]; ?>";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("wrong mobile no or password")
		</script>
		<?php
	}
	
}
if(isset($_REQUEST["guest"]))
{
	
}
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
			</ul>
                
		  </div>
		  
		  </div>
         
        </div><!--/.nav-collapse -->
	</div>
	</nav>
	<section class="wel">
	  <div class="container">
	<div class="row">
  	<div class="col-md-4 userlink">
	<h1><center>Confirm Login</center></h1>
	<form action="chkout.php" method="post">
		
		<input type="text" class="form-control" placeholder="Mobile Number" name="mobile_no" required><br>
		
		<input type="password" class="form-control" placeholder="Password" name="password" required><br>
		
		<button type="submit" class="btn btn-block btn-primary" id="submit" name="login" class="btn">SUBMIT</button>
	</form>
	</div>

	<div class="col-md-8 welcomebg">
	   <h1><center><a href="guest_confirm.php">Guest Checkout</a></center></h1>
	   </div>
	</section>
	
	</body>
	</html>
	