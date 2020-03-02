<?php
include("config.php");
unset($_SESSION["userid"]);
session_destroy();
?>
<script>window.location.href="login.php";</script>
<?php
?>