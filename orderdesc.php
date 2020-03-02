<?php
include("config.php");

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
		<section class="wel">
	  <div class="row">
	  <div class="container">
			<div class="col-md-4">
						<ul class="userlink">
						<li><a href="user.php" class="alink form-control">User</a></li><br>
						<li><a href="category.php" class="alink form-control">Category</a></li><br>
						<li><a href="fooditem.php" class="alink form-control">Food Item</a></li><br>
						<li><a href="order.php" class="alink form-control">Order</a></li><br>
						
						<li><a href="changepassword.php" class="alink form-control">Change Password</a></li><br>
						<li><a href="adminlogout.php" class="alink form-control">Log Out</a></li><br>

						</ul>
			</div>
			<div class="col-md-8 welcomebg">
				
					<table  class="tbl1 table table-condensed">
						<tr>
						<th>Serial no</th>
						
						<th>Food Name</th>
						<th>Quantity</th>
						<th>Rate</th>
						<th>Total</th>
						</tr>
							<?php
							$ctr=1;
							// $sql="select * from orderdesc where orderid='".$_REQUEST["orderid"]."'";
							$sql="select * from orderdesc";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result))
							{
							?>
							<tr>
							  <td><?php echo $ctr;?></td>
							  <td><?php echo $row["foodname"];?></td>
							  <td><?php echo $row["qty"];?></td>
							  <td><?php echo $row["rate"];?></td>
							  <td><?php echo $row["total"];?></td>
							  
							</tr>
							<?php
							 $ctr++;
							}
							?>	
					</table>
			
			</div>
			
				
	</div>
	</div>
	</section>
	
		
	</body>
</html>