<?php $title = "SQL Injection"; ?>
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
	<p style="margin-bottom: 1.5em;" class="info">SQL injection is an attack that can be performed on SQL databases. It involves placing SQL code inside forms in special ways to get unintended output. Your objective is to find an SQL injection technique to dump the database.</p>
	<?php
	   	if (isset($_GET['name']) || isset($_GET['password'])) {
	   		if (in_array(strtolower(str_replace(" ", "",$_GET['name'])), array('"or""="', "'or''='")) || in_array(strtolower(str_replace(" ", "",$_GET['password'])), array('"or""="', "'or''='"))) {
	   			echo '<p class="green">Correct scroll down <i class="fas fa-arrow-down"></i></p>';
	   		}
		}

		if (isset($_GET['name']) || isset($_GET['password'])) {
			echo "<p><i>If you are lost check this website out <a href='https://www.w3schools.com/sql/sql_injection.asp'>W3Schools</a></i><p><br>";
		}
	?>
	<form class="formWrap" autocomplete="off">
		<label>User Name / User Number</label><br>
		<input id="usrName" type="text" placeholder="" name="name"><br>
		<label>Password</label><br>
		<input id="pass" type="text" placeholder="" name="password"><br>
		<input class="submitButton lvlthreeInput" type="submit" value="Submit">
	</form>
	<br>
	<p class="liveTitle">Database Output</p>
	<?php 
		/* 
			Takes query / injected query and iterates through the request until all
		 	applicable data has been shown.
		*/
		echo "<table>";
	    echo "<tr> <th>UserID</th> <th>Username</th> <th>Password</th> </tr>";
	   	if (isset($_GET['name']) || isset($_GET['password'])) {
	   		if (in_array(strtolower(str_replace(" ", "",$_GET['name'])), array('"or""="', "'or''='")) || in_array(strtolower(str_replace(" ", "",$_GET['password'])), array('"or""="', "'or''='"))) {
	   			echo '<td>0</td>';
				echo '<td>flag</td>';
				echo '<td>databaseismine</td>';
				echo "</tr>";
				////	   			
				echo '<td>1</td>';
				echo '<td>michelle</td>';
				echo '<td>ycqiybboiqkiqwu</td>';
				echo "</tr>";
				////
	   			echo '<td>2</td>';
				echo '<td>connor</td>';
				echo '<td>rqddqdqiedjeqij</td>';
				echo "</tr>"; 
				////
	   			echo '<td>3</td>';
				echo '<td>george</td>';
				echo '<td>3-18-5-1-13-25-3-21-16-3-1-11-5-19</td>';
				echo "</tr>"; 
				////
	   			echo '<td>4</td>';
				echo '<td>Adam</td>';
				echo '<td>d2hpcHBlZGNyZWFtMTIz</td>';
				echo "</tr>";
	   		}
		}
		echo "</table>";
	?>
</body>
</html>