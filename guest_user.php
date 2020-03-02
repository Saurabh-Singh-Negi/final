<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
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
<section class="guest">
<div class="container">	
<div class="row">
<div class="col-md-6 col-md-offset-3">
<h1>GUEST USER</h1>
    <div class="row">
	<div class="col-md-4 col-md-offset-2">NAME</div>
	
	<div class="col-md-4 bmr" ><input class="form-control" type="text" id="NAME"></div>
	</div>
	<div class="row">
	<div class="col-md-4 col-md-offset-2">EMAIL</div>
	<div class="col-md-4 bmr"><input class="form-control" type="text" id="EMAIL"></div>
	</div>
	<div class="row">
	<div class="col-md-4 col-md-offset-2">MOBILE NO</div>
	<div class="col-md-4 bmr"><input class="form-control" type="text" id="MNO"></div>
	</div>
	<div class="col-md-2 col-md-offset-2">	
	  <input type="button" id="ADD" class=" btn btn-primary" name="btn" value="ADD"/>
	</div>
	<div class="col-md-2">
      <input type="button" id="SUBMIT" class=" btn btn-primary" name="btn" value="SUBMIT"/>
	</div>
</div>
</div>	
</div>	
<section>	 
</body>
</html>