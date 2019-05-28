<?php $title = "Bad Web Design III"; ?>
<?php
	// $logUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	// $logUrl = substr_replace($logUrl, 'logs.txt', -11);
	// echo "<!-- Logs Link ".$logUrl." -->";
?>
<!DOCTYPE html>
<!-- 
Admins please remember to write logs on all changes made
place them in the logs.txt file within the web server.
-->
<html class="loadingPage">
<head>
	<title><?php echo $title; ?></title>
	<?php include 'custodia/import/headImp.php';?>
</head>
<body onload="loaded()">
	<header>
		<?php include 'custodia/import/headerContentImp.php'; ?>
	</header>
	<p class="info">There is something on this website that is not correct web design, try right clicking and select "View Page Source" or "Inspect Element".</p>
	<div>
		<h2>Sand Castle Real Estate</h2>
		<nav class="center">
			<a>Home</a>
			<a>About</a>
			<a>Media</a>
			<a>Housing</a>
		</nav>
		<input style="margin-left: 50%;transform: translateX(-50%);" class="submitButton lvltwoInput" type="button" value="Useless Button">
	</div>
</body>
</html>