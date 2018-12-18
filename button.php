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
			$hideVid = "hidden";
			$muteVid = "muted";
			$flag = "";
			$doomTxt = "Dooom awaits...";

			if (isset($_POST["doom"])) {
				if ($_POST["doom"] == 'true') {
					$hideVid = "";
					$muteVid = "";
					$doomTxt = "I told you";

				}
				else if ($_POST["doom"] == 'false') {
					$hideVid = "hidden";
					$muteVid = "muted";
					$flag = "Flag: nomoredoomplease";
					$doomTxt = "OoOo Whats that???";

				}
			}
		?>
		<p class="info">Welcome to your demise, your objective is to prevent the doom song.</p>
		<p class="info green"><?php echo $flag; ?></p>
		<video id='doomvid' class="<?php echo $hideVid; ?>" width='400' height='400' autoplay <?php echo $muteVid; ?>>
			<source src='custodia/doom.mp4' type='video/mp4'>
			Your browser does not support this video
		</video>
		<p><?php echo $doomTxt ?></p>
		<form class="doomForm" autocomplete="off" method="POST">
			<button class="submitButton lvlfourInput" type="submit" name="doom" value="true">
				<i class="fas fa-skull fa-10x"></i>
			</button>
		</form>
	</div>
</body>
</html>