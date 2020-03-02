<?php
include("config.php");
unset($_SESSION["adminid"]);
session_destroy();
?>
<script>window.location.href="adminlogin.php";</script>
<?php
?>