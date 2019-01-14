<?php 
	$title = "Bad Web Design III";
?>
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
	<p class="info">
		There is something on this website that is not correct web design, try right clicking and select "View Page Source" or "Inspect Element".
	</p>
	<style type="text/css">
		/*//////////////////////////////////////////*/
		/*				Bad Web III					*/

		.badwebHtml{
			width: 1000px;
			margin: auto auto;
			background-image: 	      linear-gradient(0deg, #ff9966 0%, #ff5e62 100%);
			background-image: 	 -moz-linear-gradient(0deg, #ff9966 0%, #ff5e62 100%);
		    background-image: -webkit-linear-gradient(0deg, #ff9966 0%, #ff5e62 100%);
		    background-image:     -ms-linear-gradient(0deg, #ff9966 0%, #ff5e62 100%);
		}

		.badwebBody{
			width: 800px;
			margin: auto auto;
		}

		.badwebBanner{
			height: 400px;
		}

		.badwebHeader{

		}

		.badwebHeader nav{
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			align-items: center;
		}

		.badwebHeader nav img{
			width: 200px;
		}

		.badwebHeader nav a{
			font-size: 0.6em;
			font-weight: bold;
			color: white;
			text-decoration: none;
			margin: 0.5em;
		}

		.badwebHeader nav a:hover{
			padding: 0;
		}

		.badwebSlogan h1{
			font-size: 2em;
			color: white;
			margin: auto auto;
			transform: translateY(50%);
		}

		.badwebLogin{

		}

		.badwebLogin form{
			display: flex;
			flex-direction: column;
			align-items: center;
			color: white;
		}

		.badwebLogin form div{
			display: flex;
			flex-direction: row;
			justify-content: center;
			color: white;
		}

		.badwebLogin form div input, .badwebSubmitButton{
			border: 0.1em solid #FFFFFF;
			color: white;
		}

		.badwebSubmitButton{
			width: 20em;
			padding: 0.8em 0;
			margin: 2em;

			background-color: rgba(0,0,0,0);
			border-radius: 0.12em;

			-webkit-transition: all 0.2s;
			-moz-transition: 	all 0.2s;
			-ms-transition: 	all 0.2s;
			-o-transition: 		all 0.2s;
			transition: 		all 0.2s;
		}

		.badwebSubmitButton:hover{
			color: grey;
			background-color: white;
			border-color: grey;
		}

		.featWrap{
			background-color: rgba(255, 255, 255, 0.25);
		}

		.feat{
			width: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			padding: 1.5em 0;
		}

		.feat i, .feat div p{
			color: white;
		}

		.feat i{
			font-size: 3em;
			color: white;
			padding: 0 0 0.5em 0;
		}

		.feat p{
			text-align: center;
		}

		.featTitle{
			font-size: 1.5em;
		}
		.featBlurb{
			font-size: 1em;
		}
	</style>
	<div class="badwebHtml">
		<div class="badwebBody">
			<div class="badwebBanner">
				<div class="badwebHeader">
					<nav>
						<img src="custodia/images/hourglasslogo.png">
						<div>
							<a>Home</a>
							<a>About</a>
							<a>Media</a>
							<a>FAQ</a>
						</div>
					</nav>
				</div>
				<div class="badwebSlogan">
					<h1>Keeping time since the beginning</h1>
				</div>
			</div>

			<div class="badwebLogin">
				<form autocomplete="off">
					<div>
						<span>
							<p>Username</p>
							<input type="text" name="username">		
						</span>
						<span>
							<p>Password</p>
							<input type="text" name="password">
						</span>			
					</div>

					<input class="badwebSubmitButton" type="submit" value="Submit">
				</form>
			</div>

			<div class="featWrap">
				<div class="feat">
					<i class="far fa-hourglass"></i>
					<div>
						<p class="featTitle">Customize</p>
						<p class="featBlurb">We can customize your hourglass to your aesthetic</p>
					</div>
				</div>
			</div>
			<!--  -->
			<div class="featWrap">
				<div class="feat">
					<i class="fas fa-globe"></i>
					<div>
						<p class="featTitle">Global Presents</p>
						<p class="featBlurb">Transactions and shipping is global</p>
					</div>
				</div>
			</div>
			<!--  -->
			<div class="featWrap">
				<div class="feat">
					<i class="fas fa-hand-holding-heart"></i>
					<div>
						<p class="featTitle">Handled With Care</p>
						<p class="featBlurb">All hour glasses are made by hand and are eco friendly</p>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
		</div>
	</div>
</body>
</html>