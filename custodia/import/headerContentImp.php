<div id="_submitTab" class="submitTab">
	<a id="_closeTab" class="closeTab" href="javascript:void(0)" onclick="closeTab()"><i class="fas fa-times"></i></a>
	<form class="blueTeam" autocomplete="off">
		<label>Blue Team Flag Input</label>
		<input type="text" placeholder="" name="blueflag">
		<input class="submitButton submitTabButton" type="submit" value="Submit">
	</form>
	<form class="redTeam" autocomplete="off">
		<label>Red Team Flag Input</label>
		<input type="text" placeholder="" name="redflag">
		<input class="submitButton submitTabButton" type="submit" value="Submit">	
	</form>
</div>

<a class="homeButton" href="index.php"><i class="fas fa-home fa-4x"></i></a>
		<a class="confirmButton" onclick="openTab()" href="javascript:void(0)"><i class="fas fa-clipboard-list fa-4x"></i></a>
		<h1 class="title"><?php echo $title; ?></h1>
