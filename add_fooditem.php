<?php
include("config.php");
if(isset($_SESSION["adminid"]))
{


if(isset($_REQUEST["submit"]))
{
	
 $foodname=$_REQUEST["foodname"];
 $unit=$_REQUEST["unit"];
 $categoryid=$_REQUEST["categoryid"];
 $rate=$_REQUEST["rate"];
 	$target_dir = "upload/";
    $image = $target_dir . basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"], $image);

 
 $sql="select * from fooditem where foodname='$foodname'";
 $result=mysql_query($sql);
 if(mysql_num_rows($result)>0)
 {
	 ?>
	 <script>alert("This Food already exist")</script>
	 <?php
 }
 else
 {
 $sql="insert into fooditem (foodname,unit,categoryid,rate,image)
 values('$foodname','$unit','$categoryid','$rate','$image')";
 $result=mysql_query($sql);
  ?>
	 <script>alert("Food Item Added")</script>
	 <?php
 }
 

}	
}
else
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
<section>
<div class="container">
<div class="row">
	<div class="col-md-6"><img class="logoimg" src="images/logo.png"/></div>
	<div class="col-md-6 srch">	
	<!--
		<div class="col-md-6 search1">
			<input type="text" placeholder="search product">
			<input type="button" value="search">
						    
		</div>
	-->
        <div class="col-md-6">
			<a href="login.php"><h3 class=logreg>Login/Register<h3></a>
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

            <li class="#"><a href="index.php">			 <i class="icon fa fa-home navicon"></i>Home</a></li>
			<li class="#"></li>
			<li class="#"><a href="about.php">About-us</a></li>
			
			
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
				<li><a href="how2use.php">How to Use ?</a></li>
			    <li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		</div>
		</div>
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
			<form action="add_fooditem.php" method="post" enctype="multipart/form-data">  
				
				<div class="col-md-6 space">Food Name</div>
				<div class="col-md-6 space bmr"><input type="text"class=" form-control" name="foodname" value="" required></div>
				<div class="col-md-6 space">Unit</div>
				<div class="col-md-6 space bmr"><input type="text" class=" form-control" name="unit" value="" required></div>
				<div class="col-md-6 space">Category</div>
				<div class="col-md-6 space">
					<select name="categoryid" class=" form-control" class="bmr" required>
					<option value="" class="bmr"> Select Category </option>
					<?php
						$sql="select * from category";
						$result=mysql_query($sql);
						while($row=mysql_fetch_array($result))
						{
					?>
					<option value="<?php echo $row["categoryid"];?>"><?php echo $row["categoryname"];?></option>
					<?php
						}
					?>
					</select></br>
				</div>
				
				<div class="col-md-6 space">Rate</div>
				<div class="col-md-6 space bmr"><input type="text" class=" form-control" name="rate" value="" required></div>
				<div class="col-md-6 space">Image</div>
				<div class="col-md-6 space bmr"><input type="file" class=" form-control" name="image" value="" required></div>
				
				 <input type="submit" id="submit" name="submit" class="move-right btn btn-success" value="save"/>
				  </form>
			</div>
	</div>
	</div>
	</section>
	
</html>