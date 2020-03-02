<?php
include("config.php");
if(isset($_SESSION["userid"]))
{

	if(isset($_REQUEST["submit"]))
	{
			$password=$_REQUEST["oldpwd"];
			$newpassword=$_REQUEST["newpwd"];
			$confirmpwd=$_REQUEST["confirmpwd"];
			$match=strcmp($newpassword,$confirmpwd);
			if($match==0)
			{
				$sql="select password from user where userid='".$_SESSION["userid"]."'";
				$result=mysql_query($sql);
				if(mysql_num_rows($result)>0)
				{
						$sql="update user set password='$newpassword' where userid='".$_SESSION["userid"]."'";
						$result=mysql_query($sql);
							if($result)
							{
										?>
										<script>
										alert("password changed succuessfully !!!");
										window.location.href="login.php";
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
	

}
else
{
	?>
	<script>window.location.href="login.php";</script>
	<?php
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
	  <div class="row">
	  <div class="container">
			<div class="col-md-4">
			<ul class="userlink">
						<li><a href="myprofile.php" class="alink form-control">My Profile</a></li><br>
						<li><a href="orderhistory.php" class="alink form-control">Order History</a></li><br>
						<li><a href="changepassword.php" class="alink form-control">Change Password</a></li><br>
						<li><a href="logout.php" class="alink form-control">Log Out</a></li><br>

						</ul>
			</div>
			<div class="col-md-8 welcomebg">
			<form action="changepassword.php" method="post">  
				<div class="col-md-6 space">Old Password</div>
				<div class="col-md-6 space bmr"><input type="password" class="form-control" name="oldpwd" value="" required></div>
				<div class="col-md-6 space">New Password</div>
				<div class="col-md-6 space bmr"><input type="password"  class="form-control" name="newpwd" value="" required></div>
				<div class="col-md-6 space">Confirm Password</div>
				<div class="col-md-6 space bmr"><input type="password"  class="form-control" name="confirmpwd" value="" required></div>
				 <input type="submit" id="submit" name="submit" class="btn btn-success btn-lg" value="Reset"/>
				  </form>
			</div>
	</div>
	</div>
	</section>
	
</html>