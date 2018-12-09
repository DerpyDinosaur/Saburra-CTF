<?php $title = "Saburra CTF"; ?>
<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title>Saburra Capture The Flag</title>
	<?php include 'custodia/import/headImp.php';?>
</head>
<body onload="loaded()">
	<header>
		<?php include 'custodia/import/headerContentImp.php'; ?>
		<!-- This is a hidden flag: hiddenflag03 -->
	</header>
	<div class="fixWidth flex lvlWrap">
		<div class="levelRow">
			<div class="lvloneColumn">
				<p class="levels green">Level 1</p>
				<input class="submitButton" onclick="location.href='steg.php';" type="button" value="Steganography">
				<input class="submitButton" onclick="location.href='passwdcrack.php';" type="button" value="Password Cracking">
				<input class="submitButton" onclick="location.href='cookie.php';" type="button" value="Cookies">
				<input class="submitButton" onclick="location.href='html.php';" type="button" value="Bad Webdesign">
			</div>
			<div class="lvltwoColumn">
				<p class="levels orange">Level 2</p>
				<input class="submitButton" onclick="location.href='reverse.php';" type="button" value="Reverse Engineering">
				<input class="submitButton" onclick="location.href='stegTwo.php';" type="button" value="Steganography II">
				<input class="submitButton" onclick="location.href='htmltwo.php';" type="button" value="Bad Webdesign II">
			</div>			
		</div>
		<div class="levelRow">
			<div class="lvlthreeColumn">
				<p class="levels red">Level 3</p>
				<input class="submitButton" onclick="location.href='sql.php';" type="button" value="SQL Injection">
				<input class="submitButton" onclick="location.href='stegThree.php';" type="button" value="Steganography III">
			</div>
			<div class="lvlfourColumn">
				<p class="levels purple">Level 4</p>
				<input class="submitButton" onclick="location.href='button.php';" type="button" value="The Button">
			</div>
		</div>
	</div>
</body>
</html>