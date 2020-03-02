<?php
include("config.php");
if(isset($_REQUEST["foodid"]))
{
  if(!isset($_SESSION["cart"]) || empty($_SESSION["cart"]))
  {	  
	$_SESSION["cart"]=$_REQUEST["foodid"];
  }
  else
  {
	  $_SESSION["cart"]= $_SESSION["cart"].",".$_REQUEST["foodid"];
  }
}


?>
<script>window.location.href="add-to-cart.php";</script>