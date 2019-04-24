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
		<p class="info">There is something on this website that is not correct web design, try right clicking and select "View Page Source" or "Inspect Element".</p>
		<form autocomplete="off">
			<!-- Administrator Password: password123 -->
			<img class="policeLogo" src="custodia/images/nswpolicelogo.png">
			<?php
				if (isset($_GET['password'])) {
					if ($_GET['password'] == 'password123' || $_GET['password'] == '@damIsCool~1997') {
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
</body>
</html>