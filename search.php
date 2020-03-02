<?php
include("config.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="row mail">
	<div class="container">
		<div class="col-md-6">
		<h1 class="mail"><i class="icon fa fa-envelope-o"></i>Give us a mail at -   abc@.com</h1>
		</div>
		<div class="col-md-6 follow">
		<h1 class="follow">Follow Us On -
		<i class="icon fa fa-facebook-square follow"></i>
		<i class="icon fa fa-twitter-square follow"></i>
		<i class="icon fa fa-linkedin-square follow"></i>
		</h1>
		</div>
	</div>
</div>
<div class="container">
<div class="row">
	<div class="col-md-6"><img class="logoimg" src="images/logo.png"/></div>
	<div class="col-md-6 srch">	
	
		<div class="col-md-6 search1">
			<input type="text" placeholder="search product">
			<input type="button" value="search">
						    
		</div>
        <div class="col-md-6">
			<a href="login.php">login/Register</a>
		</div>		
	</div>
	
</div>
</div>
</section>
<nav class="navbar navbar-default navbar-top menu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
		
		<div id="navbar" class="navbar-collapse collapse">
		 <div class="row">
		 <div class="col-md-3">
		    <a class="navbar-brand" href="#"></a>
		 </div>
		 <div class="col-md-6">
          <ul class="nav navbar-nav">

            <li class="active"><a href="#">			 <i class="icon fa fa-home navicon"></i>Home</a></li>
			<li class="#"></li>
			<li class="#"><a href="#">About-us</a></li>
			
			
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our-Menu<span class="caret"></span></a></li>
			<ul class="dropdown-menu">
				<li><a href="indian.php">Indian</a></li>
                <li><a href="#">South Indian</a></li>
                <li><a href="#">Chinese</a></li>
				<li><a href="#">Chinese</a></li>
				<li><a href="#">Continental</a></li>
				<li><a href="#">Desert</a></li>
				<li><a href="#">Mocktail</a></li>
			</ul>
			    <li><a href="#">Contact</a></li>
			</ul>
		</div>
		</div>
		</div>
		</div>
	</nav>
<section class="product">
	 <div class="container">
	   <div class="row">
		<?php
	   $sql="select * from fooditem where foodname like '%".$_REQUEST["search"]."%'";
	  
	   $result=mysql_query($sql);
	   while($row=mysql_fetch_array($result))
	   {
	   ?>
		    <div class="col-md-2 box">
		    <center>
			
		    <img src="<?php echo $row["image"]; ?>" class="img-responsive">
			</center>
			<center>
			    <?php echo $row["foodname"]; ?>
				<?php echo $row["unit"]; ?>
				<?php echo $row["rate"]; ?>
			
			<a href="cart.php?foodid=<?php echo $row["foodid"];?>"> Add to cart </a>
			</center>
			
		  </div>

    <?php
	   }
	?>





	 </div>
</section>	 
</body>
</html>