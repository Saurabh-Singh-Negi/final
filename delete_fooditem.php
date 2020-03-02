<?php
include("config.php");
$sql="delete from fooditem where foodid='".$_REQUEST["foodid"]."'";
mysql_query($sql);
?>
<script>
("fooditem deleted successfully !!!");
window.location.href="fooditem.php";
</script>
<?php
?>