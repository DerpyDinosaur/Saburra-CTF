<?php $title = "Software Reverse Engineering"; ?>
<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title><?php echo $title; ?></title>
	<script type="text/javascript" src="./custodia/js/rainbow.min.js"></script>
	<link rel="stylesheet" type="text/css" href="custodia/css/rainbow.css">
	<?php include 'custodia/import/headImp.php';?>
</head>
<body onload="loaded()">
	<header>
		<?php include 'custodia/import/headerContentImp.php'; ?>
	</header>
	<p class="info">Software Reverse Engineering is a skill that allows the user to look at software code and decipher its functionality. Your job is to look at the pseudo code below and work out what the computer is computing. The answer will be a short piece of text, which will also be your flag.</p>
	<div class="reverseBody">
		<pre>
			<code data-language="python">
				// Variables
				string name = "Adam"
				integer birthYear = 1997
				integer meaningOfLife = 42
				boolean whippedCream = true

				// Main Code
				if name == "Adam" then
				  if currentYear - 1997 == 1 then
				    print "Welcome Creator"

				if currentYear == 1997 then
				  print "Adam is a baby"

				if whippedCream == true
				  print meaningOfLife
			</code>
		</pre>
	</div>
</body>
</html>