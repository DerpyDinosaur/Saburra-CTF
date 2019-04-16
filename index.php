<?php
	// Hacker Blyat 
	if (isset($_GET['restart']) && $_GET['restart'] == 'true') {
		$jsonUrl = "custodia/flags.json";

		try{
			$original = [
				"redTeam" => [
					"flag1" => "0",
					"flag2" => "0",
					"flag3" => "0",
					"flag4" => "0",
					"flag5" => "0",
					"flag6" => "0",
					"flag7" => "0",
					"flag8" => "0",
					"flag9" => "0",
					"flag10" => "0",
					"flag11" => "0",
					"flag12" => "0",
					"flag13" => "0",
					"flag14" => "0"
				],
				"blueTeam" => [
					"flag1" => "0",
					"flag2" => "0",
					"flag3" => "0",
					"flag4" => "0",
					"flag5" => "0",
					"flag6" => "0",
					"flag7" => "0",
					"flag8" => "0",
					"flag9" => "0",
					"flag10" => "0",
					"flag11" => "0",
					"flag12" => "0",
					"flag13" => "0",
					"flag14" => "0"
				]
			];

			$jsondata = json_encode($original, JSON_PRETTY_PRINT);

			if(file_put_contents($jsonUrl, $jsondata)) {
			    echo 'Data successfully saved';
			}else{
			    echo "error";
			}
		}
		catch (Exception $e) {
			echo "There was a problem with the PHP JSON code";
			echo $e;
		}
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
				<input class="submitButton" onclick="location.href='hash.php';" type="button" value="Integrity">
			</div>			
		</div>
		<div class="levelRow">
			<div class="lvlthreeColumn columnSpacing">
				<p class="levels red">Level 3</p>
				<input class="submitButton" onclick="location.href='sql.php';" type="button" value="SQL Injection">
				<!-- <input class="submitButton" onclick="location.href='recon.php';" type="button" value="Recon"> -->
				<input class="submitButton" onclick="location.href='stegThree.php';" type="button" value="Steganography III">
				<input class="submitButton" onclick="location.href='htmlthree.php';" type="button" value="Bad Webdesign III">
			</div>
			<div class="lvlfourColumn columnSpacing">
				<p class="levels purple">Level 4</p>
				<input class="submitButton" onclick="location.href='button.php';" type="button" value="The Button">
				<input class="submitButton" onclick="location.href='escalate.php';" type="button" value="Hack Evil Corp"> 
			</div>
		</div>
	</div>
</body>
</html>