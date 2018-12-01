<?php $title = "THE BUTTON"; ?>
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
	<div class="buttonBody">
		<?php
			$hidden = "hidden";
			if (isset($_GET["doom"])) {
				if ($_GET["doom"] == true) {
					$hidden = "";
				}
			}
		?>
		<video id='doomvid' class="<?php echo $hidden; ?>" width='400' height='400' autoplay>
			<source src='custodia/doom.mp4' type='video/mp4'>
			Your browser does not support this video
		</video>
		<form action="button.php" autocomplete="off">
			<button class="submitButton lvlfourInput" type="submit" name="doom" value="true">
				<i class="fas fa-skull fa-10x"></i>
			</button>
		</form>
		<p>Dooom awaits...</p>
	</div>
</body>
</html>