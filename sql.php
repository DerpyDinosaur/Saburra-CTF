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
	<form class="formWrap" autocomplete="off">
		<label>User Name / User Number</label><br>
		<input id="usrName" type="text" placeholder="" name="name"><br>
		<label>Password</label><br>
		<input id="pass" type="text" placeholder="" name="password"><br>
		<input class="submitButton" type="submit" value="Submit">
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
	   	if (isset($_GET['name'])) {
	   		if (trim($_GET['name']) == '"OR""="' || trim($_GET['name']) == "'OR''='") {
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