<?php
include("config.php");
if(isset($_SESSION["adminid"]))
{
}
else
{
	?>
	<script>window.location.href="adminlogin.php";</script>
	<?php
}
if(isset($_REQUEST["submit"]))
{
	$password=$_REQUEST["oldpwd"];
	$newpassword=$_REQUEST["newpwd"];
	$confirmpwd=$_REQUEST["confirmpwd"];
	$match=strcmp($newpassword,$confirmpwd);
	if($match==0)
	{
		$sql="select * from admin where password='$password' and adminid='".$_SESSION["adminid"]."'";
		$result=mysql_query($sql);
		if(mysql_num_rows($result)>0)
		{
			$sql="update admin set password='$newpassword'";
			$result=mysql_query($sql);
		if($result)
		{
			?>
			<script>
			alert("password changed succuessfully !!!");
			window.location.href="adminlogin.php";
			</script>
			<?php
		}
	}
	else
	{
		?>
		<script>
		alert("you have entered wrong password !!!");
		</script>
		<?php
	}
	}
		else
	{
		?>
		<script>
		alert(" entered password are not same !!!");
		</script>
		<?php
	}
	
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
						
						<li><a href="adminchangepwd.php" class="alink form-control">Change Password</a></li><br>
						<li><a href="adminlogout.php" class="alink form-control">Log Out</a></li><br>

						</ul>
			            </div>
			<div class="col-md-8 welcomebg">
			<form action="adminchangepwd.php" method="post">  
				<div class="col-md-6 space">Old Password</div>
				<div class="col-md-6 space bmr"><input class=" form-control" type="password" name="oldpwd" value="" required></div>
				<div class="col-md-6 space">New Password</div>
				<div class="col-md-6 space bmr"><input class=" form-control" type="password" name="newpwd" value="" required></div>
				<div class="col-md-6 space">Confirm Password</div>
				<div class="col-md-6 space bmr"><input class=" form-control" type="password" name="confirmpwd" value="" required></div>
				 <input type="submit" id="submit" name="submit" class="move-right btn btn-primary" value="Change"/>
				  </form>
			</div>
	</div>
	</div>
	</section>
	
</html>