<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="custodia/images/favicon.ico"/>
	<title>Sandy Capture The Flag</title>
	<style type="text/css">
		#sandcastle canvas{
			margin-left: 50%;
			margin-top: 4em;
			transform: translate(-50%);
		}

		.flagCounters{
			display: flex;
			justify-content: space-between;
			height: 50px;
		}

		.flagCounters p{
			font-size: 2em;
			font-family: Arial, Helvetica, sans-serif;
			font-weight: bold;
			padding: 0 5em;
		}

		.red{
			color: #e43939;
			text-shadow: 2px 1px #7f2020;
		}		
		.blue{
			color: #39cae4;
			text-shadow: 2px 1px #206d7f;
		}
	</style>
	<script src="custodia/js/pixi.min.js"></script>
</head>
<body>
	<div class="flagCounters">
		<p class="blue">Flags = <span id="blueTeam"></span></p>
		<p class="red">Flags = <span id="redTeam"></span></p>
	</div>
	<div id="sandcastle"></div>
	<script type="text/javascript" src="./custodia/js/sandcastleapp.js"></script>	
</body>
</html>