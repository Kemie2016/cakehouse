<?php
require('../backend/function/connection.php');
$sql = $db->query("SELECT * FROM product");
$products = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>product - Cake House</title>
	<?php require_once("template/files.php"); ?>
</head>
<body>
	<div id="page">
		<?php require_once("template/header.php"); ?>
		<div id="body">
			<div class="header">
				<div>
					<h1>Products</h1>
				</div>
			</div>
			<div>
				<ul id="Breadcrumbs">
					<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>></li>
					<li><a href="#">蛋糕</a>></li>
					<li>手工餅乾</li>
				</ul>
				<ul id="Products">
					<?php foreach($products as $product){ ?>
					<li>
						<img src="../uploads/product/<?php echo $product['Picture']; ?>" width="200" height="150" alt="">
						<h2><?php echo $product['Name']; ?></h2>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<?php require_once("template/footer.php"); ?>
	</div>
</body>
</html>
