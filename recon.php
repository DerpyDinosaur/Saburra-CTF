<?php 
	$title = "Recon";
?>
<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title><?php echo $title; ?></title>
	<?php include 'custodia/import/headImp.php';?>
</head>
<body onload="loaded()">
	<header>
		<?php include 'custodia/import/headerContentImp.php'; ?>
	</header>
	<p class="info">
		Your task is to find a vulnerability within this companies network linked below. 
		<br>
		IP Address example 		10.0.0.42
	</p>
</body>
</html>