<?php
error_reporting(0);

$title = "Submit a Flag";

$teamIsBlue = null;
$flagNumber = 0;
$flags = array(
	'saucysunset',
	'S@ndy1999',
	'cisforcookie',
	'bondipolice',
	'databaseismine',
	'secret',
	'cheekylogs',
	'Hello World!',
	'sandypants',
	'nomoredoomplease',
	'fylacterium',
	'stylesheet',
	'hiddenflag03'
);

function writeData($flags, $flagInput, $teamIsBlue, $flagNumber) {
	$jsonUrl = "custodia/flags.json";

	for ($i=0; $i < count($flags); $i++) { 
		if ($flagInput == $flags[$i]) {
			$flagNumber = $i + 1;
		}
	}

	try
	{
		// Get JSON file
		$presentFlags = file_get_contents($jsonUrl);

		// Decode JSON file into an Array
		$presentFlags = json_decode($presentFlags, true);
		
		if ($teamIsBlue) {
			$newFlags = array('blueTeam' => array('flag'.$flagNumber => '1' ));
			$newFlags = array_replace_recursive($presentFlags, $newFlags);

		}elseif(!$teamIsBlue) {
			$newFlags = array('redTeam' => array('flag'.$flagNumber => '1' ));
			$newFlags = array_replace_recursive($presentFlags, $newFlags);
		}

		// Convert updated array to JSON
		$newData = json_encode($newFlags, JSON_PRETTY_PRINT);

		// Write new data to JSON file
		if(file_put_contents($jsonUrl, $newData)) {
		    // echo '<p>Data successfully saved</p>';
		}
		else 
		    echo "<p>error</p>";

	}
	catch (Exception $e) {
		echo "There was a problem with the PHP JSON code";
		echo $e;
	}
}

if(isset($_GET['blueflag']) && $_GET['blueflag'] != "" && $_GET['blueflag'] != " "){
	$flagInput = $_GET['blueflag'];
	$teamIsBlue = true;
	writeData($flags, $flagInput, $teamIsBlue, $flagNumber);

}elseif(isset($_GET['redflag']) && $_GET['redflag'] != "" && $_GET['redflag'] != " ") {
	$flagInput = $_GET['redflag'];
	$teamIsBlue = false;
	writeData($flags, $flagInput, $teamIsBlue, $flagNumber);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Flag Checker</title>
</head>
<body>
	<?php
		if (isset($_GET['redflag']) || isset($_GET['blueflag'])) {
			if (in_array($flagInput, $flags)) {
				echo "<p class='green'>Flag Is Correct</p>";
			}else{
				echo "<p class='red'>Flag Is Incorrect</p>";
			}
		}
	?>
</body>
</html>
