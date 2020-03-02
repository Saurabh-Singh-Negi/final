<?php
include("config.php");
?>
<html>
<head>
<title>HomePage</title>
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

	<section name="first">
<div class="row">
	<div class="container"><br><br>
	<center class="topdeals"><h2>How to Use Spoon and Fork ?</h2></center><br><br>
		<div class="col-md-3">
			<img src="images\foodcategory.png" class="img-responsive how2use">
			<p class="useheader">Select  Food Category</p>
		</div>
		<div class="col-md-3">
			<img src="images\foodorder.png" class="img-responsive how2use">
			<p class="useheader">  </p>
			<p class="usetxt">Order food on your mobile</p>
		</div>
		<div class="col-md-3">
		<img src="images\mobilefood.png" class="img-responsive how2use">	
			<p class="useheader">Place Your Order !!!</p>
		</div>
		<div class="col-md-3">
		<img src="images\shopping.jpg" class="img-responsive how2use">	
			<p class="useheader">Customer Checkout  </p>
		</div>
	</div>
</div>
</section>
<section id="footer">
	<div class="row footbg">
	<div class="col-md-12">
		<div class="container">
			<div class="col-md-4">
			<img src="images\logo.png" class="img-responsive footlogo"/>
			<!-- <p class="foottxt">Spoon and Fork</p> -->
			</div>	
			
			<div class="col-md-4">
				<p class="footheader">Follow Us On</p>
				<p class="footertxt"><i class="icon fa fa-facebook-square footicon"></i>Facebook</p>
				<p class="footertxt"><i class="icon fa fa-instagram footicon"></i>Instagram</p>
				<p class="footertxt"><a class="foottxt" href="#">Go To Top...</a></p>
			</div>
			
			<div class="col-md-4">
				<p class="footheader">Quick Contacts :</p>
				<p class="footertxt">Mail us @ support@spoonandfork.com</p>
				<p class="footertxt">Drop a call at  +91- 8989898989</p>
			</div>
		</div>
	</div>
	</div>
	
	<div class="row footbar">
		<div class="col-md-12">
		<p class="footertxt"><p>&copy; 2019 Spoon&Fork. All rights reserved.</p>
 </p>
		</div>
	</div>
	</section>

</body>
	<script src="js/jQuery-3.3.1.min.js"></script>  
   
	<script src="js/bootstrap.min.js"></script>
	
</html>