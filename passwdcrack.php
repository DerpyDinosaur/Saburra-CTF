<?php $title = "Password Cracking"; ?>

<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title><?php echo $title; ?></title>
	<?php include 'custodia/import/headImp.php'; ?>
</head>
<body onload="loaded()">
	<header class="headerPass">
		<?php include 'custodia/import/headerContentImp.php'; ?>
		<p class="info">
			Welcome to the password cracking challenge, use the information given to make an attempt on the user's password.
			This is known as password spraying, try making a list of possible passwords.
			Then attempt multiple times until success.
		</p>
	</header>
	<div class="passOneWrap">
		<div class="profileWrap">
			<!-- <img class="passOneProfile" src="custodia/images/sandyProfile.png"> -->
			<div class="passOneProfile"><i class="fas fa-user-secret"></i></div>
			<p class="passInformaiton">
				Name: Arthur Slugworth<br>
				Gender: Male<br>
				Date of Birth: 1971<br>
				Occupation: Chocolatier<br>
				Residence: Germany<br>
				Password Length: 9
			</p>		
		</div>
		<?php 
			if (isset($_GET['passone'])) {
				if ($_GET['passone'] == "\$lug1971") {
					echo "<p style='margin:1em 0;' class='green'>Password is CORRECT, The flag is the password '\$lug1971'</p>";
				}
				else{
					echo "<p style='margin:1em 0;' class='red'>Password is INCORRECT <span style='color:black;text-shadow:none;'>Hint: Symbols can replace letters</span></p>";
				}
			}
		?>
		<form class="passOne" autocomplete="off">
			<label>Password Input</label>
			<input type="text" placeholder="" name="passone">
			<input class="submitButton passOneSubmit" type="submit" value="Submit">
		</form>
	</div>

	<div class="passwordWrap">
		<p style="margin: 1em 0">
			If you have finished the SQL Injection challenge, you can come back here and gain hints.
			For every correct SQL password you get right, you may ask one of the hosts around you for a hint.
		</p>
		<form class="otherPass" autocomplete="off">
			<div class="sqlPassWrap">
				<div>
					<?php
					if (isset($_GET['passtwo'])) {
						if ($_GET['passtwo'] == "imasillysausage") {
							echo "<p class='green'>Password is CORRECT: imasillysausage</p>";
						}elseif($_GET['passtwo'] == "" || $_GET['passtwo'] == " "){
							echo "";
						}else{
							echo "<p class='red'>Password is INCORRECT</p>";
						}
					}?>
					<label>Michelle's Login</label>
					<input type="text" placeholder="" name="passtwo">
				</div>
				<div>
					<?php
					if (isset($_GET['passthree'])) {
						if ($_GET['passthree'] == "bannanasontoast") {
							echo "<p class='green'>Password is CORRECT: bannanasontoast</p>";
						}elseif($_GET['passthree'] == "" || $_GET['passthree'] == " "){
							echo "";
						}else{
							echo "<p class='red'>Password is INCORRECT</p>";
						}
					}?>
					<label>Connor's Login</label>
					<input type="text" placeholder="" name="passthree">
				</div>	
				<div>
					<?php
					if (isset($_GET['passfour'])) {
						if ($_GET['passfour'] == "creamycupcakes") {
							echo "<p class='green'>Password is CORRECT: creamycupcakes</p>";
						}elseif($_GET['passfour'] == "" || $_GET['passfour'] == " "){
							echo "";
						}else{
							echo "<p class='red'>Password is INCORRECT</p>";
						}
					}?>
					<label>George's Login</label>
					<input type="text" placeholder="" name="passfour">
				</div>	
				<div>
					<?php
					if (isset($_GET['passfive'])) {
						if ($_GET['passfive'] == "whippedcream123") {
							echo "<p class='green'>Password is CORRECT: whippedcream123</p>";
						}elseif($_GET['passfive'] == "" || $_GET['passfive'] == " "){
							echo "";
						}else{
							echo "<p class='red'>Password is INCORRECT</p>";
						}
					}?>
					<label>Adam's Login</label>
					<input type="text" placeholder="" name="passfive">
				</div>				
			</div>
			<input class="submitButton passSubmit" type="submit" value="Submit">
		</form>	
	</div>
</body>
</html>