<?php 

$title = "Submit a Flag";

$teamIsBlue = null;
$flagNumber = 0;
$flags = array(
	'sandypants',
	'S@ndy1999',
	'cisforcookie',
	'bondipolice',
	'derp3',
	'secret',
	'cheekylogs',
	'derp6',
	'saucysunset',
	'derp8',
	'fylacterium',
	'hidden0',
	'hidden01'
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
		    echo 'Data successfully saved';
		}
		else 
		    echo "error";

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
<html class="loadingPage">
<head>
	<title><?php echo $title; ?></title>
	<?php include 'custodia/import/headImp.php'; ?>
</head>
<body onload="loaded()">
	<header class="headerPass">
		<?php include 'custodia/import/headerContentImp.php'; ?>
	</header>
	<div class="flagInputWrap">
		<form class="blueTeam">
			<label>Blue Team Flag Input</label>
			<input type="text" placeholder="" name="blueflag">
			<input class="submitButton flagSubmitButton" type="submit" value="Submit">
		</form>
		<form class="redTeam">
			<label>Red Team Flag Input</label>
			<input type="text" placeholder="" name="redflag">
			<input class="submitButton flagSubmitButton" type="submit" value="Submit">	
		</form>
	</div>
</body>
</html>