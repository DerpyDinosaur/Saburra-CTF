<?php $title = "Help I'm locked out!"; ?>
<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title><?php echo $title; ?></title>
	<?php include 'custodia/import/headImp.php';?>
	<script src="custodia/js/vue.js"></script>
</head>
<body onload="loaded()">
	<header>
		<?php include 'custodia/import/headerContentImp.php'; ?>
		<p class="info">
			Info about this challenge goes here
		</p>
	</header>
	<!--  -->
	<script type="text/html" id="modal-template">
  		<transition name="fade">
  			<div class="modalBg">
  				<div class="modalWrap">
  					<div class="modalWindow">
						<div class="windowHeader">
							<slot name="folderName">Saburra OS</slot>
							<div class="windowIcons" @click="$emit('close')">
								<i class="fas fa-minus"></i>
								<i class="fas fa-times"></i>
							</div>
						</div>
  					</div>
  				</div>
  			</div>
  		</transition>
  	</script>
  	<!--  -->
	<div id="app" class="windowWrap">
		<div class="window">
			<div class="windowHeader">
				<p class="windowTitle">{{ fullPath }}</p>
				<div class="windowIcons">
					<i class="fas fa-minus"></i>
					<i class="fas fa-times"></i>
				</div>
			</div>
			<div class="windowGui">
				<div class="guiTree">
					<ul>
						<li v-on:click="activeFolder='Desktop'">
							<i v-if="activeFolder==='Desktop'" class="far fa-folder-open"></i>
							<i v-else class="far fa-folder"></i>
							<a>Desktop</a>
						</li>
						<!-- Inside Desktop -->
						<ul>
							<li v-on:click="activeFolder='Games'">
								<i v-if="activeFolder==='Games'" class="far fa-folder-open"></i>
								<i v-else class="far fa-folder"></i>
								<a>Games</a>
							</li>
							<li v-on:click="activeFolder='Recycle Bin'">
								<i v-if="activeFolder==='Recycle Bin'" class="far fa-folder-open"></i>
								<i v-else class="far fa-folder"></i>
								<a>Recycle Bin</a>
							</li>
						</ul>
						<li v-on:click="activeFolder='Documents'">
							<i v-if="activeFolder==='Documents'" class="far fa-folder-open"></i>
							<i v-else class="far fa-folder"></i>
							<a>Documents</a>
						</li>
						<li v-on:click="activeFolder='Downloads'">
							<i v-if="activeFolder==='Downloads'" class="far fa-folder-open"></i>
							<i v-else class="far fa-folder"></i>
							<a>Downloads</a>
						</li>
						<li v-on:click="activeFolder='Pictures'">
							<i v-if="activeFolder==='Pictures'" class="far fa-folder-open"></i>
							<i v-else class="far fa-folder"></i>
							<a>Pictures</a>
						</li>
						<li v-on:click="activeFolder='Windows'">
							<i v-if="activeFolder==='Windows'" class="far fa-folder-open"></i>
							<i v-else class="far fa-folder"></i>
							<a>Windows</a>
						</li>
					</ul>
				</div>
				<div class="folderGui">
					<transition name="fade">
						<ul v-if="activeFolder==='Desktop'" class="folders">
							<li @click="initModal('Folder')">
								<i class="fas fa-folder"></i>
								<a>Folder</a>
							</li>
							<li>
								<i class="fas fa-folder"></i>
								<a>Folder</a>
							</li>
							<li>
								<i class="far fa-image"></i>
								<a>Best meme.png</a>
							</li>
							<li @click="initModal('Recycle Bin')">
								<i class="fas fa-trash-alt"></i>
								<a>Recycle Bin</a>
							</li>
						</ul>
					</transition>
				</div>
			</div>
			<modal v-if="showModal" @close="showModal=false">
				<p slot="folderName" class="windowTitle">{{ folderName }}</p>
			</modal>
		</div>	
	</div>
	<script src="custodia/js/saburraos.js"></script>
</body>
</html>