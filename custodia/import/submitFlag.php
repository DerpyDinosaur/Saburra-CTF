<?php

if (isset($_POST['submit-flag'])) {
	require 'database.php';

	$one = 1;
	$flag = strval($_POST['flag']);
	if (strval($_POST['team']) == "solo") {
		$username = strval($_POST['user']);
	}else{
		$username = strval($_POST['team']);
	}

	$flags = array(
		1 => 'fylacterium',
		2 => 'stylesheet',
		3 => 'hiddenflag03',
		4 => 'saucysunset',
		5 => '$lug1971',
		6 => 'cisforcookie',
		7 => 'bondipolice',
		8 => 'databaseismine',
		9 => 'SECRET',
		10 => 'cheekylogs',
		11 => '42',
		12 => 'sandypants',
		13 => 'nomoredoomplease',
		14 => 'zymes',
		15 => 'morelikebarfdesign',
		16 => 'immalicious.com',
		17 => 'easyaspie'
	);

	// Create Key
	$key = array_search($flag, $flags);
	if ($key == false) {
		header("Location: ../../index.php?flagSubmit=false");
		exit();
	}else{
		$key = "f".$key;
	}

	// Start SQL Query
	if (empty($flag) || empty($username)) {
		header("Location: ../../index.php?error=emptyfields");
		exit();

	}elseif(!preg_match('/^[a-zA-Z0-9]*$/', $username)){
		header("Location: ../../index.php?error=invalidusername");
		exit();

	}else{
		$sql = "SELECT username FROM users WHERE username=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../../index.php?error=sqlerror");
			exit();

		}else{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				// If user exists do
				$sql = "UPDATE users SET ".$key."=? WHERE username=?";
				$stmt = mysqli_stmt_init($conn);
				// If connection fails
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../../index.php?error=sqlerror");
					exit();

				}else{
					mysqli_stmt_bind_param($stmt, "is", $one, $username);
					mysqli_stmt_execute($stmt);
					header("Location: ../../index.php?flagSubmit=true");
					exit();
				}

			}else{
				// If user does not exist do
				$sql = "INSERT INTO users (username, ".$key.") VALUES (?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../../index.php?error=sqlerror");
					exit();

				}else{
					mysqli_stmt_bind_param($stmt, "si", $username, $one);
					mysqli_stmt_execute($stmt);

					// Update Total
					$sql = "UPDATE users SET totalScore = f1+f2+f3+f4+f5+f6+f7+f8+f9+f10+f11+f12+f13+f14+f15+f16";
					$stmt = mysqli_stmt_init($conn);
					mysqli_stmt_prepare($stmt, $sql);
					mysqli_stmt_execute($stmt);
					header("Location: ../../index.php?flagSubmit=true");
					exit();
				}
			}
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}else{
	header("Location: ../../index.php");
	exit();
}