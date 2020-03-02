<?php
include("config.php");
if(isset($_SESSION["adminid"]))
{



}
else
{
	
}
if(isset($_REQUEST["submit"]))
{
	$foodname=$_REQUEST["foodname"];
	$unit=$_REQUEST["unit"];
	$categoryid=$_REQUEST["categoryid"];
	$rate=$_REQUEST["rate"];
	if(!empty($_FILES["image"]["name"]))
	{
	$target_dir = "upload/";
    $image = $target_dir . basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"], $image);
	$sql="update fooditem set foodname='$foodname',unit='$unit',categoryid='$categoryid',rate='$rate',image='$image' where foodid='".$_REQUEST["foodid"]."'";
	}
	else
	{
	$sql="update fooditem set foodname='$foodname',unit='$unit',categoryid='$categoryid',rate='$rate' where foodid='".$_REQUEST["foodid"]."'";
	
	}
	$result=mysql_query($sql);
	?>
	<script>alert("Fooditem updated")</script>
	<?php
}
$sql="select * from fooditem where foodid='".$_REQUEST["foodid"]."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$foodname=$row["foodname"];
$unit=$row["unit"];
$categoryid=$row["categoryid"];
$rate=$row["rate"];
$image=$row["image"];
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
					<form action="" method="post" enctype="multipart/form-data">  
				
				<div class="col-md-6 space">Food Name</div>
				<div class="col-md-6 space bmr"><input type="text" class=" form-control" name="foodname" value="<?php echo $row["foodname"];?>" required></div>
				<div class="col-md-6 space">Unit</div>
				<div class="col-md-6 space bmr"><input type="text" class=" form-control"  name="unit" value="<?php echo $row["unit"];?>" required></div>
				<div class="col-md-6 space">Category</div>
				<div class="col-md-6 space">
					<select name="categoryid" class="bmr form-control" required>
					<option value="" class="bmr"> Select Category </option>
					<?php
						$sql="select * from category";
						$result=mysql_query($sql);
						while($row=mysql_fetch_array($result))
						{
					?>
					<option value="<?php echo $row["categoryid"];?>" <?php if($row["categoryid"]==$categoryid) echo "selected";?>><?php echo $row["categoryname"];?></option>
					<?php
						}
					?>
					</select>
				</div>
				
				<div class="col-md-6 space">Rate</div>
				<div class="col-md-6 space bmr"><input type="text" class=" form-control"  name="rate" value="<?php echo $rate;?>" required></div>
				<div class="col-md-6 txtbox">Image :</div>
		        <div class="col-md-6 txtbox"><input type="file" class=" form-control"  name="image" value="<?php echo $image; ?>"></div><br>
				 <input type="submit" id="submit" name="submit" class="move-right btn btn-success" value="Update"/>
				  <!-- <input type="submit" id="submit" name="submit" class="move-right btn" value="reset"/> -->
				  </form>
			</div>
	</div>
	</div>
	</section>
	
</html>