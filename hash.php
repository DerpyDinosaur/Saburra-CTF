<?php 
	$title = "Integrity";
	if (isset($_GET['secret']) && $_GET['secret'] == true) {
		echo "<p>http://hashtoolkit.com</p>";
	}
?>
<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title><?php echo $title; ?></title>
	<?php include 'custodia/import/headImp.php';?>
	<script src="custodia/js/vue.js"></script>
</head>
<body class="hashBody" onload="loaded()">
	<header>
		<?php include 'custodia/import/headerContentImp.php'; ?>
	</header>
	<p class="info">
		Integrity in cyber security involves hashing. <a target="_blank" href="https://www.youtube.com/watch?v=2BldESGZKB8">Hashing</a> is the act of using an algorithm to create a string (hash). Hashing becomes useful when you need to know if someone has tampered with a file. It is a bit hard to fit into a puzzle so this challenge will involve you cracking one, bonus points if you can tell me what the algorithm is doing.
	</p>
	<div id="app" class="hashWrap">
		<h2 class="inputTitle">Hash</h2>
		<div class="convertWrap">
			<div class="hashBlock"><p>1a</p></div>
			<div class="hashBlock"><p>19</p></div>
			<div class="hashBlock"><p>d</p></div>
			<div class="hashBlock"><p>5</p></div>
			<div class="hashBlock"><p>13</p></div>
		</div>
		<h2 class="inputTitle">Input</h2>
		<div class="convertWrap">
			<div class="hashBlock" v-bind:class="{ 'correctHash': inputIBool}"><p>{{inputIHex}}</p></div>
			<div class="hashBlock" v-bind:class="{ 'correctHash': inputIIBool}"><p>{{inputIIHex}}</p></div>
			<div class="hashBlock" v-bind:class="{ 'correctHash': inputIIIBool}"><p>{{inputIIIHex}}</p></div>
			<div class="hashBlock" v-bind:class="{ 'correctHash': inputIVBool}"><p>{{inputIVHex}}</p></div>
			<div class="hashBlock" v-bind:class="{ 'correctHash': inputVBool}"><p>{{inputVHex}}</p></div>
		</div>
		<div class="inputWrap">
			<input v-model="inputI" type="text" maxlength="1" size="1">
			<input v-model="inputII" type="text" maxlength="1" size="1">
			<input v-model="inputIII" type="text" maxlength="1" size="1">
			<input v-model="inputIV" type="text" maxlength="1" size="1">
			<input v-model="inputV" type="text" maxlength="1" size="1">
		</div>
	</div>
	<script src="custodia/js/hashApp.js"></script>
</body>
</html>