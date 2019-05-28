<?php
// error_reporting(0);

$title = "Submit a Flag";

$teamIsBlue = null;
$flagNumber = 0;
$flags = array(
	'fylacterium',
	'stylesheet',
	'hiddenflag03',
	'saucysunset',
	'S@ndy1999',
	'cisforcookie',
	'bondipolice',
	'databaseismine',
	'SECRET',
	'cheekylogs',
	'42',
	'sandypants',
	'nomoredoomplease',
	'purityisbliss',
	'morelikebarfdesign',
	'immalicious.html'
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
	<?php include 'custodia/import/headImp.php';?>
</head>
<body>
	<?php
		if (isset($_GET['redflag']) || isset($_GET['blueflag'])) {
			if (in_array($flagInput, $flags)) {
				echo "<p style='color: #39e47e; font-weight: bold;'>Flag Is Correct</p>";
			}else{
				echo "<p style='color: #e43939; font-weight: bold;'>Flag Is Incorrect</p>";
			}
		}
	?>
</body>
</html>
