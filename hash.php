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
</head>
<body onload="loaded()">
	<header>
		<?php include 'custodia/import/headerContentImp.php'; ?>
	</header>
	<p class="info">
		You work in an office space, under the company <strong>Sunscreen Co</strong>. You have also received various resumes from four people, two of them have provided Md5 hashes. Your objective is to locate the real resumes. Each file has a key in it, you need to use both keys together to unlock your flag.
	</p>
	<?php
		if (isset($_GET['keyone']) && isset($_GET['keytwo'])) {
			if ($_GET['keyone'] == '4efaabbe32752c89' && $_GET['keytwo'] == '5508202ba11392cb') {
				echo "<p class='green'>Correct Flag: purityisbliss</p>";
			}
			elseif ($_GET['keyone'] == '5508202ba11392cb' && $_GET['keytwo'] == '4efaabbe32752c89') {
				echo "<p class='green'>Correct Flag: purityisbliss</p>";
			}else{
				echo "<p class='red'>Incorrect</p>";
			}
		}
	?>
	<form class="keysForm" autocomplete="off">
		<label>Key Input</label><br>
		<div><input type="text" placeholder="" name="keyone"><span>:</span><input type="text" placeholder="" name="keytwo"></div>
		<input class="submitButton lvltwoInput" type="submit" value="Submit">
	</form>
	<p>Hash One: 720ca1ffdb3b188e120d7588e9aebfb4</p>
	<p>Hash Two: e4cff8f88168f9f6640753ab44e87694</p>
	<div class="fileWrap">
		<div>
			<div>
				<p>Applicant I</p>
				<a href="custodia/applicant1.pdf" download><p class="fileIcon"><i class="fas fa-file-download fa-2x"></i></p></a>
			</div>
			<div>
				<p>Applicant III</p>
				<a href="custodia/applicant3.pdf" download><p class="fileIcon"><i class="fas fa-file-download fa-2x"></i></p></a>
			</div>
		</div>
		<div>
			<div>
				<p>Applicant II</p>
				<a href="custodia/applicant2.pdf" download><p class="fileIcon"><i class="fas fa-file-download fa-2x"></i></p></a>
			</div>
			<div>
				<p>Applicant IV</p>
				<a href="custodia/applicant4.pdf" download><p class="fileIcon"><i class="fas fa-file-download fa-2x"></i></p></a>
			</div>
		</div>
	</div>
</body>
</html>