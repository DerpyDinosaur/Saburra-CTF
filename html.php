<?php $title = "Bad Web Design"; ?>
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
	<div class="htmlBody">
		<form autocomplete="off">
			<img class="policeLogo" src="custodia/images/nswpolicelogo.png">
			<?php
				if (isset($_GET['password'])) {
					if ($_GET['password'] == 'bondipolice') {
						echo "<p class='green'>Correct Flag: bondipolice</p>";
					}else{
						echo "<p class='red'>Incorrect Password</p>";
					}
				}
			?>
			<div>
				<label>Username</label>
				<input type="text" name="username">				
			</div>
			<div>
				<label>Password</label>
				<input type="text" name="password">				
			</div>
			<input class="submitButton" type="submit" value="Submit">
		</form>
	</div>
	<div class="htmlBodyTwo" style="display: none;">
		<img class="policeLogo" style="margin-left: 50%;transform: translateX(-50%);" src="custodia/images/nswpolicelogo.png">
		<p class="green">Welcome Administrator</p>
		<p>Flag: bondipolice</p>
	</div>
</body>
</html>