<?php
	if (isset($_GET['restart']) && $_GET['restart'] == 'true') {
		require 'custodia/import/database.php';

		$sql = "TRUNCATE TABLE users";

		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: index.php?error=sqlerror");
			exit();

		}else{
			mysqli_stmt_execute($stmt);
			header("Location: index.php?restartComplete=true");
			exit();
		}

		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}

	$title = "Saburra CTF"; 
?>
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
		<?php
			if ($_GET['flagSubmit'] == "true") {
				echo "<p style='color:#39e47e;text-align:center;font-size:2.5em;'>Congratulations Flag was correct</p>";

			}elseif($_GET['flagSubmit'] == "false"){
				echo "<p style='color:#e43939;text-align:center;font-size:2.5em;'>Flag was incorrect</p>";

			}elseif($_GET['error'] == "emptyfields"){
				echo "<p style='color:#e43939;text-align:center;font-size:2.5em;'>Please fill all parts of the form</p>";

			}elseif($_GET['error'] == "invalidusername"){
				echo "<p style='color:#e43939;text-align:center;font-size:2.5em;'>Username is invalid</p>";

			}elseif($_GET['error'] == "sqlerror"){
				echo "<p style='color:#e43939;text-align:center;font-size:2.5em;'>Something went wrong???</p>";

			}
		?>
	</header>
	<div class="fixWidth flex lvlWrap">
		<div class="levelRow">
			<div class="lvlzeroColumn">
				<p class="levels grey">Level null</p>
				<input class="submitButton" onclick="location.href='null.php';" type="button" value="Help I'm locked out!">
			</div>
		</div>
		<div class="levelRow">
			<div class="lvloneColumn columnSpacing">
				<p class="levels green">Level 1</p>
				<input class="submitButton" onclick="location.href='steg.php';" type="button" value="Steganography">
				<input class="submitButton" onclick="location.href='passwdcrack.php';" type="button" value="Password Cracking">
				<input class="submitButton" onclick="location.href='cookie.php';" type="button" value="Cookies">
				<input class="submitButton" onclick="location.href='html.php';" type="button" value="Bad Webdesign">
			</div>
			<div class="lvltwoColumn columnSpacing">
				<p class="levels orange">Level 2</p>
				<input class="submitButton" onclick="location.href='reverse.php';" type="button" value="Reverse Engineering">
				<input class="submitButton" onclick="location.href='stegTwo.php';" type="button" value="Steganography II">
				<input class="submitButton" onclick="location.href='htmltwo.php';" type="button" value="Bad Webdesign II">
				<input class="submitButton" onclick="location.href='phishing.php';" type="button" value="Phishing">
			</div>			
		</div>
		<div class="levelRow">
			<div class="lvlthreeColumn columnSpacing">
				<p class="levels red">Level 3</p>
				<input class="submitButton" onclick="location.href='sql.php';" type="button" value="SQL Injection">
				<!-- <input class="submitButton" onclick="location.href='recon.php';" type="button" value="Recon"> -->
				<input class="submitButton" onclick="location.href='htmlthree.php';" type="button" value="Bad Webdesign III">
				<input class="submitButton" onclick="location.href='hash.php';" type="button" value="Integrity">
			</div>
			<div class="lvlfourColumn columnSpacing">
				<p class="levels purple">Level 4</p>
				<input class="submitButton" onclick="location.href='button.php';" type="button" value="The Button">
				<input class="submitButton" onclick="location.href='stegThree.php';" type="button" value="Steganography III">
				<!-- <input class="submitButton" onclick="location.href='escalate.php';" type="button" value="Hack Evil Corp"> -->
			</div>
		</div>
	</div>
</body>
</html>