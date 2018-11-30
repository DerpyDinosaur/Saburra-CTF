<?php $title = "Bad Web Design II"; ?>
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
	<div>
		<!-- Admins please remember to write logs on all changes made -->
		<h2>Sand Castle Real Estate</h3>
		<p><i class="fas fa-exclamation-triangle"></i>   This website is under construction   <i class="fas fa-exclamation-triangle"></i></p>
		<nav class="center">
			<a>Home</a>
			<a>About</a>
			<a>Media</a>
			<a>Housing</a>
		</nav>
		<input style="margin-left: 50%;transform: translateX(-50%);" class="submitButton " type="button" value="Useless Button">
		<?php
			$logUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$logUrl = substr_replace($logUrl, 'logs.txt', -11);
			echo "<!-- Logs Link ".$logUrl." -->";
		?>
	</div>
</body>
</html>