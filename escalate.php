<?php $title = "Hack Evil Corp"; ?>
<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title><?php echo $title; ?></title>
	<?php include 'custodia/import/headImp.php';?>
	<script src="custodia/js/lodash.js"></script>
	<script src="custodia/js/vue.js"></script>
</head>
<body onload="loaded()">
	<header>
		<?php include 'custodia/import/headerContentImp.php'; ?>
	</header>
	
	<div id="app" class="explorerWrap noselect">
		<div class="progressWrap">
			<div class="progress">
				<div class="levelNode" :class="{ done: levelOneDone }">
					<i :class="[levelOneDone ? 'fas fa-check-circle' : 'fas fa-desktop']"></i>
					<p>Level 1</p>
				</div>
				<!-- || -->
				<div class="levelNode" :class="{ done: levelTwoDone }">
					<i :class="[levelTwoDone ? 'fas fa-check-circle' : 'fas fa-desktop']"></i>
					<p>Level 2</p>
				</div>
				<!-- || -->
				<div class="levelNode" :class="{ done: levelThreeDone }">
					<i :class="[levelThreeDone ? 'fas fa-check-circle' : 'fas fa-desktop']"></i>
					<p>Level 3</p>
				</div>
				<!-- || -->
				<div class="levelNode" :class="{ done: levelFourDone }">
					<i :class="[levelFourDone ? 'fas fa-check-circle' : 'fas fa-desktop']"></i>
					<p>Level 4</p>
				</div>
			</div>
		</div>

		<div class="explorerUi">
			<div class="treePanel">
				<div class="nodeWrap" v-for="item in cpuOne">
					<div @click="nodeClicked(item.name)" class="node">
						<i class="far fa-folder"></i>
						<a>{{item.name}}</a>
					</div>
				</div>
			</div>

			<ul class="folders" v-for="folder in activeFolder">
				<li v-for="item in folder.items">
					<i v-if="item.type == 'image'" class="far fa-image"></i>
					<i v-else class="far fa-file-alt"></i>
					<a>{{ item.name }}</a>
				</li>
			</ul>
		</div>

		<div class="sshLoginWrap">
			<!-- <h3 class="sshTitle">Login</h3> -->
			<form class="sshLogin" autocomplete="off">

				<div>
					<label>Username</label>
					<input v-on:input="username = $event.target.value" type="text" placeholder="adam" name="sshUser">
				</div>
				<div>
					<label>Password</label>
					<input v-on:input="password = $event.target.value" type="text" placeholder="****" name="sshPass">
				</div>
				<input @click="loginCheck" class="submitButton" type="button" value="Submit">
			</form>
		</div>
	</div>
	<script src="custodia/js/escalate.js"></script>
</body>
</html>