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
	<p class="info">Software Reverse Engineering is a skill that allows the user to look at software code and decipher its functionality. Your job is to look at the python code below and work out what the computer is computing. The answer will be a short piece of text, which will also be your flag.</p>
	<div class="reverseBody">
		<pre>
			<code data-language="python">
				stringOne = "adam is cool"
				stringTwo = "Hello World!"
				numOne = 1
				theMeaningOfLife = 42

				if date.year == 1997:
				    print stringOne
				else if date.year == numOne:
				    print "adam is lame"

				function do_this (number):
				    magicNumber = 777

				    if number == magicNumber:
				        print "This is the magic number"

				do_this(numOne)

				if theMeaningOfLife == 42:
				    print stringTwo
			</code>
		</pre>
	</div>
</body>
</html>