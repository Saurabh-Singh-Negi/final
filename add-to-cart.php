<?php
include("config.php");
$cart=explode(",",$_SESSION["cart"]);
$cart=array_unique($cart);
$cart=implode(",",$cart);
if(isset($_REQUEST["foodid"]))
{
	$cart=explode(",",$_SESSION["cart"]);
	$cart=array_diff($cart,array($_REQUEST["foodid"]));
	$_SESSION["cart"]="";
	$ctr=1;
	foreach($cart as $k=>$v)
	{
		if(empty($_SESSION["cart"]))
			$_SESSION["cart"]=$v;
		else	
		   	$_SESSION["cart"]=$_SESSION["cart"].",".$v;
		
		$ctr++;
	} 
	$cart=implode(",",$cart);
}
if(isset($_REQUEST["place"]))
{
  $_SESSION["foodid"]="";
  $ctr=1;
  foreach($_REQUEST['foodid'] as $k=>$v)
  {
     if($ctr==1)	 
      $_SESSION["foodid"]=$v;	 	 
	 else
	  $_SESSION["foodid"]=$_SESSION["foodid"].",".$v;
	 $ctr++;
  }
  $_SESSION["qty"]="";
  $ctr=1;
  foreach($_POST['qty'] as $k=>$v)
  {
     if($ctr==1)	 
      $_SESSION["qty"]=$v;	 	 
	 else
	  $_SESSION["qty"]=$_SESSION["qty"].",".$v;
	 $ctr++;
  }
  ?>
  <script>window.location.href="chkout.php";</script>
  <?php
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
	</nav>	<section class="product">
		<div class="container ">
			<div class="row ">
			<form method="post" action="add-to-cart.php">
				<div class="col-md-6 col-md-offset-3"> 
					<table border="1" class="tbl4 welcomebg">
					<input type="submit" id="remove" class="btn btn-primary" name="place" value="Place Order"/>
					    <?php
						$sql="select * from fooditem where foodid in ($cart)";
						
						$result=mysql_query($sql);
						while($row=mysql_fetch_array($result))
						{
						?>
						<tr>
						
						<td>
						<input type="hidden" name="foodid[]" value="<?php echo $row["foodid"]; ?>">
						<img class="foodimg" src="<?php echo $row["image"];?>"></td>
						<td><?php echo $row["foodname"]; ?></td>
						<td><?php echo $row["rate"]; ?></td>
						<td class="bl"><input type="number" min="1" id="qty[]" name="qty[]" placeholder="0"></td>
						<td><a href="add-to-cart.php?foodid=<?php echo $row["foodid"]; ?>">Remove Items</a>
						</tr>
						<?php
						}
						?>
					</table>
				</div>	
				</form>
			</div>
		</div>
	 </section>  
</body>
</html>