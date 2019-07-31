<div id="_submitTab" class="submitTab">
			<a id="_closeTab" class="closeTab" href="javascript:void(0)" onclick="closeTab()"><i class="fas fa-times"></i></a>

			<h1 style="">Submit a Flag</h1><br><br>
			<form class="flagForm" action="" method="post" autocomplete="off">
				<div class="radioWrap">
					<div>
						<input id="toggle-on" class="toggle toggle-left" name="region" value="redTeam" type="radio" checked>
						<label for="toggle-on" class="switch">Red Team</label>
						<input id="toggle-off" class="toggle toggle-right" name="region" value="blueTeam" type="radio">
						<label for="toggle-off" class="switch">Blue Team</label>
					</div>
				</div>
				<input class="flagInput" type="text" placeholder="Enter flag here" name="flag">
				<input class="submitButton" type="submit" name="submit" value="Check Flag">
			</div>

			<!-- <iframe class="submitPopup" name="submitFrame"></iframe> -->
			<!-- 			
			<form action="submit.php" target="submitFrame" method="get" class="blueTeam" autocomplete="off">
				<label>Blue Team Flag Input</label>
				<input type="text" placeholder="" name="blueflag">
				<input class="submitButton submitTabButton" type="submit" value="Submit">
			</form>

			<form action="submit.php" target="submitFrame" method="get" class="redTeam" autocomplete="off">
				<label>Red Team Flag Input</label>
				<input type="text" placeholder="" name="redflag">
				<input class="submitButton submitTabButton" type="submit" value="Submit">	
			</form>-->

		</div>

		<a class="homeButton" href="index.php"><i class="fas fa-home fa-4x"></i></a>
		<a class="helpButton" href="README.html" target="_blank"><i class="fas fa-question fa-4x"></i></a>
		<a class="confirmButton" onclick="openTab()" href="javascript:void(0)"><i class="fas fa-clipboard-list fa-4x"></i></a>
		<h1 class="title"><?php echo $title; ?></h1>
