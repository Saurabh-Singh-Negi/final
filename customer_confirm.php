<?php
include("config.php");
$sql="select * from user where userid='".$_REQUEST["id"]."'";
$result=mysql_query($sql);
if(mysql_num_rows($result)>0)
{
	$row=mysql_fetch_array($result);
}
else
{
	?>
	<script>window.location.href="chkout.php";</script>
	<?php
}
if(isset($_REQUEST["confirm"]))
{
	$name=$_REQUEST["name"];
	$email=$_REQUEST["email"];
	$mobile_no=$_REQUEST["mobile_no"];
	$delivery_add=$_REQUEST["delivery_add"];
	$pincode=$_REQUEST["pincode"];
	$total=$_REQUEST["ordertotal"];
	$delivery_date=$_REQUEST["delivery_date"];
	$orderdate=date("Y-m-d");
	$userid=$_REQUEST["id"];
	$sql="INSERT INTO `onlinefooddelivery`.`order` 
	( `orderdate`, `delivery_date`, `userid`, `name`, `email`, `mobile_no`, `delivery_add`, `pincode`, `total`) 
	VALUES
	('$orderdate','$delivery_date','$userid','$name','$email','$mobile_no','$delivery_add','$pincode','$total')";
	
	mysql_query($sql);
	$orderid=mysql_insert_id();
	$ctr=1;
	$sql="insert into orderdesc (orderid,foodname,rate,qty,total)values";
	$len=sizeof($_REQUEST["foodid"]);
	
	foreach($_REQUEST["foodid"] as $key=>$value)
	{
		$foodname=$_REQUEST["foodname"][$key];
		$rate=$_REQUEST["rate"][$key];
		$qty=$_REQUEST["qty"][$key];
		$total=$_REQUEST["total"][$key];
		if($ctr==$len)
			$sql=$sql."('$orderid','$foodname','$rate','$qty','$total')";
		else
			$sql=$sql."('$orderid','$foodname','$rate','$qty','$total'),";
		$ctr++;
	}
	   $result=mysql_query($sql);
	   if($result)
	   {
		  
		  $_SESSION["foodid"]="";
			$_SESSION["cart"]="";
		   ?>
		   <script>
		   alert("Your order Placed Successfully");
		   window.location.href="thankyou.php?orderid=<?php echo $orderid?>";
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
	        <form method="post" action="">
			<div class="col-md-6 userlink">
				<h1> Customer Checkout</h1>
				<div class="col-md-6 space">Name</div>
				<div class="col-md-6 space bmr"><input type="text" class="form-control" name="name" value="<?php echo $row["name"] ?>" required></div>
				<div class="col-md-6 space">Email Address</div>
				<div class="col-md-6 space bmr"><input type="email" class="form-control" name="email" value="<?php echo $row["email"] ?>" required></div>
				<div class="col-md-6 space">Mobile No</div>
				<div class="col-md-6 space bmr"><input type="number" class="form-control" name="mobile_no" value="<?php echo $row["mobile_no"] ?>" required></div>
				<div class="col-md-6 space">Delivery Address</div>
				<div class="col-md-6 space bmr"><input type="text" class="form-control" name="delivery_add" value="<?php echo $row["delivery_add"] ?>" required></div>
				<div class="col-md-6 space">Pin Code</div>
				<div class="col-md-6 space bmr"><input type="number" class="form-control" name="pincode" value="<?php echo $row["pincode"] ?>" required></div>
                <div class="col-md-6 space">Delivery Date</div>
				<div class="col-md-6 space bmr"><input type="date" class="form-control" name="delivery_date"  required></div>
				<div class="col-md-6 space"></div>
				<div class="col-md-6 space bmr"><input type="submit" class="form-control btn btn-primary" name="confirm" value="Confirm Order"></div>
 
			</div>
			<div class="col-md-6">
			  <div class="welcomebg col-md-12">
			  <center><h2>Order Details</h2></center>
			    <table class="col-md-12 table table-condensed tbl1">
					<tr>
					<th>Si No.</th>
					<th>Food</th>
					<th>Quantity</th>
					<th>Rate</th>
					<th>Total</th>
					</tr>
					<?php
					$ctr=1;
					$i=0;
					$total=0;
					$foodid=$_SESSION["foodid"];
					$arr=explode(",",$_SESSION["qty"]);
					$sql="select * from fooditem where foodid in ($foodid)";	
					$result=mysql_query($sql);
					while($row=mysql_fetch_array($result))
					{
					?>
					<tr>
					<input type="hidden" name="foodid[]" value="<?php  echo $row["foodid"]; ?>">
					<input type="hidden" name="foodname[]" value="<?php  echo $row["foodname"]; ?>">
					<input type="hidden" name="rate[]" value="<?php  echo $row["rate"]; ?>">
					<input type="hidden" name="qty[]" value="<?php  echo $arr[$i]; ?>">
					<input type="hidden" name="total[]" value="<?php   echo $arr[$i]*$row["rate"]; ?>">
					<td><?php echo $ctr;?></td>
					<td><?php echo $row["foodname"];?></td>
					<td><?php echo $arr[$i];?></td>
					<td><?php echo $row["rate"];?></td>
					<td><?php echo $arr[$i]*$row["rate"];?></td>
					</tr>
					<?php
					
					$total=$total+($arr[$i]*$row["rate"]);
					$i++;
					$ctr++;
					}
					?>
					<input type="hidden"  value="<?php echo $total;?>" name="ordertotal">
					<tr>
					  <td colspan="4">
					    Total
					  </td>
					  <td>
					    <?php echo $total; ?>
					  </td>
					</tr>
				</table>	
			  </div>
				
			</div>
			</form>
	</div>
	</div>
	</section>
	
	
	
	
	</body>
	</html>
	
	
	
	
	