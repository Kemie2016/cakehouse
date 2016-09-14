<?php
require('../function/connection.php');
$sql = "DELETE FROM product_category WHERE ProductCategoryID=".$_GET['ProductCategoryID'];
$sth = $db->prepare($sql);
$sth->execute();
header('Location: list.php');
 ?>
