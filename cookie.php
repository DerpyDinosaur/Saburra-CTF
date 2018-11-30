<?php $title = "Cookies"; ?>
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
	<form class="anonBody">
		<img class="cookieLogo" src="custodia/images/cookielogo.png">
		<?php
				
			if (isset($_GET['admin'])) {
				if (in_array($_GET['admin'], array('admin', 'adminUser'))) {
					echo "<p class='green'>Welcome To The Cookie Network Flag: cisforcookie</p>";
				}
			}
		?>
		<p>Cookie Monster has started an illegal cookie website<br>your job is to gain access by editing the internet packet below <br>and change the cookie parameters.</p>
		<div class="cookieWrap">
			<p>GET /login.php HTTP/1.1</p>
			<p>Host: 192.168.242.123</p>
			<p>User-Agent: Mozzila/5.0 (X11; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0</p>
			<p>Accept: text/html,application/xhtml+xml;q=0.9,*/*;q=0.8</p>
			<p>Accept-Language: en-US,en;q=0.5</p>
			<p>Accept-Encoding: gzip, deflate</p>
			<p>Referer: http://192.168.242.123/login.php</p>
			<p>Cookie:</p>
			<label>userid=</label><input type="text" name="uid" value="42"><br>
			<label>user=</label><input type="text" name="user" value="hackerMan"><br>
			<label>pass=</label><input type="text" name="pass" value="iamcool123"><br>
			<label>session=</label><input type="text" name="sesh" value="sgdocshu7spba86"><br>
			<label>userType=</label><input type="text" name="admin" value="basicUser"><br>
		</div>
		<input class="submitButton cookieSubmit" type="submit" value="Submit">
	</form>
</body>
</html>