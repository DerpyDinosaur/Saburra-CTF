<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title>Saburra Capture The Flag</title>
	<?php include 'custodia/import/headImp.php';?>
	<style type="text/css">
		.grey{
		    color: rgba(0, 0, 0, 0.75);
		    font-weight: bold;
		}

		.levelRow{
			justify-content: center;
		}

		.lvloneColumn{
			background-color: rgba(0, 0, 0, 0.33);
		}

		input[type=button].submitButton, input[type=submit].submitButton, input[type=reset].submitButton {
			margin: 2em 0 2em 50%;
			transform: translateX(-50%);
		}

		input[type=button].submitButton:hover, input[type=submit].submitButton:hover, input[type=reset].submitButton:hover{
		    color: rgba(0, 0, 0, 1);
    		background-color: rgba(255, 255, 255, 1);
    		border-color: rgba(0, 0, 0, 1);
		}

	</style>
</head>
<body onload="loaded()">
	<header>
		<a class="confirmButton" href="submit.php"><i class="fas fa-clipboard-list fa-4x"></i></a>
		<h1 class="indexTitle" style="padding: 0.5em 1em 0.5em 1em;">Practice Zone</h1>
		<a class="helpButton" href="index.php"><i class="fas fa-info-circle fa-4x"></i></i></a>
	</header>
	<div class="fixWidth flex lvlWrap">
		<div class="levelRow">
			<div class="lvloneColumn">
				<p class="levels grey">Level 0</p>
				<input class="submitButton" onclick="location.href='steg.php';" type="button" value="Steganography">
			</div>
		</div>
	</div>
</body>
</html>