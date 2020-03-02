<?php
	mysql_connect("127.0.0.1","root","");
	$con=mysql_select_db("onlinefooddelivery");
	if($con)
	{
		echo "";
	}
	else
	{
		echo die(mysql_error());
	}
session_start();
?>