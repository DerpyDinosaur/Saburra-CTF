<?php
	error_reporting(0);
?>
<div id="_submitTab" class="submitTab">
			<a id="_closeTab" class="closeTab" href="javascript:void(0)" onclick="closeTab()"><i class="fas fa-times"></i></a>
			<h1 class="title">Submit a Flag</h1>

			<form class="flagForm" action="custodia/import/submitFlag.php" method="post" autocomplete="off">
				<div class="radioWrap">
					<label class="radioContainer radioSolo">
						<input name="team" value="solo" type="radio" checked>
						<span onclick="document.getElementById('_userInput').disabled = false;" class="radioButton">Solo</span>
					</label>
					<label class="radioContainer radioRed">
						<input name="team" value="redTeam" type="radio">
						<span onclick="document.getElementById('_userInput').disabled = true;" class="radioButton">Red Team</span>
					</label>
					<label class="radioContainer radioBlue">
						<input name="team" value="blueTeam" type="radio">
						<span onclick="document.getElementById('_userInput').disabled = true;" class="radioButton">Blue Team</span>
					</label>
				</div>
				<br><br>
				<label style="font-weight: bold;">Username</label>
				<input id="_userInput" class="submitFlagFormInput" type="text" name="user" placeholder="Enter username here">
				<label style="font-weight: bold;">Flag</label>
				<input class="submitFlagFormInput" type="text" name="flag" placeholder="Enter flag here">
				<input class="submitButton" type="submit" name="submit-flag" value="Check Flag">
			</form>
			<a class="scoreBoardLink" href="scoreboard.php" target="_blank">Click here to check the leader board</a>
		</div>

		<a class="homeButton" href="index.php"><i class="fas fa-home fa-4x"></i></a>
		<a class="helpButton" href="README.html" target="_blank"><i class="fas fa-question fa-4x"></i></a>
		<a class="confirmButton" onclick="openTab()" href="javascript:void(0)"><i class="fas fa-clipboard-list fa-4x"></i></a>
		<h1 class="title"><?php echo $title; ?></h1>
