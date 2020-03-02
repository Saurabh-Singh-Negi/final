<?php
include_once("config.php");
if(isset($_REQUEST["login"]))
{
	$mobile_no=$_REQUEST["mobile_no"];
	$password=$_REQUEST["password"];
	
	$sql="select * from user where mobile_no='$mobile_no' and password='$password'";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)>0)
	{
		$row=mysql_fetch_array($result);
		$_SESSION["userid"]=$row["userid"];
	  ?>
	   <script>window.location.href="welcome.php";</script>
      <?php	  
	}
	else
	{
		?>
	    <script>alert("Mobile no or Password is not Correct!!!")</script>
        <?php	  
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
				
				</div>
			</div>


			<div class="row abc">
				<form action="login.php" method="post">  
				<div class="col-md-6 col-md-offset-3 mydiv">
				<div class="col-md-6 space">Mobile No.</div>
				<div class="col-md-6 space bmr"><input class="form-control" type="text" name="mobile_no"></div>
				<div class="col-md-6 space">Password</div>
				<div class="col-md-6 space bmr"><input class="form-control"  type="password" name="password"></div>
				<div class="col-md-6 col-md-offset-4"> 
				  <input type="submit" name="login" class="move-right btn btn-success" value="LOGIN"/>
				  <input type="button" onclick="window.location.href='newuser.php'" class="btn btn-primary" id="register" name="btn" value="REGISTER"/>
						</a>
				 </div> 
				</div>
			</form>
			</div>
		</div>
	</section>	  


	<br><br><br><br>
	  
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