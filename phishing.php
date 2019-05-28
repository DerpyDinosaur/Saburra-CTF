<?php 
	$title = "Phishing";
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
		Phishing (with a ph) is the where a criminal will try to "phish" credentials or information from you. These attacks are usually platform specific which usually involves a fake website or email that looks exactly like the real thing.<br><br>Think deeply on how you can differentiate the two emails below and work out which one is fake.
	</p>

	<div class="phishWrap">
		<iframe class="phishFrame" frameborder="0" src="instaphish.htm"></iframe>
		<iframe class="phishFrame" frameborder="0" src="instaphish2.htm"></iframe>
	</div>
	
</body>
</html>