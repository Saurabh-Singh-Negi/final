<?php
include("config.php");
$sql="delete from category where categoryid='".$_REQUEST["categoryid"]."'";
mysql_query($sql);
?>
<script>
("category deleted successfully !!!");
window.location.href="category.php";
</script>
<?php
?>