<?php
include_once("config.php");
if(isset($_REQUEST["login"]))
{
	$username=trim($_REQUEST["username"]);
	$password=trim($_REQUEST["password"]);
	
	$sql="select * from admin where username='$username' and password='$password'";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)>0)
	{
		$row=mysql_fetch_array($result);
		$_SESSION["adminid"]=$row["adminid"];
	  ?>
	   <script>window.location.href="adminwelcome.php";</script>
      <?php	  
	}
	else
	{
		?>
	    <script>alert("Username or Password is not Correct!!!")</script>
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
				<form action="adminlogin.php" method="post">  
				<div class="col-md-6 col-md-offset-3 mydiv">
				<div class="col-md-6 space">User Name</div>
				<div class="col-md-6 space bmr"><input  class=" form-control" type="text" name="username"></div>
				<div class="col-md-6 space">Password</div>
				<div class="col-md-6 space bmr"><input class=" form-control" type="password" name="password"></div>
				<div class="col-md-6 col-md-offset-4"> 
				  <input type="submit" name="login" class="move-right btn btn-primary" value="LOGIN"/>
				  <input type="button" name="reset" class="btn btn-danger" value="CANCEL"/>
				  		
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