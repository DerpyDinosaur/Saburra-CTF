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
			Your best friend has locked themselves out of their Windows PC, by forgetting their password. Using Linux you can bypass windows logins and freely look at files. Your objective is to hunt down where their password is.
		</p>
	</header>
	<!--  -->
	<script type="text/html" id="modal-template">
  		<transition name="fade">
  			<div class="modalBg">
  				<div class="modalWrap">
  					<div class="modalWindow">
						<div class="modalHeader">
							<slot name="fileName">Saburra OS</slot>
							<div class="windowIcons" @click="$emit('close')">
								<i class="fas fa-minus"></i>
								<i class="fas fa-times"></i>
							</div>
						</div>
						<div class="modalContent">
							<slot name="content">
								<p class="red">Error modal content not found</p>
							</slot>
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
						<!-- Desktop -->
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
						<!-- Pictures -->
						<li v-on:click="activeFolder='Pictures'">
							<i v-if="activeFolder==='Pictures'" class="far fa-folder-open"></i>
							<i v-else class="far fa-folder"></i>
							<a>Pictures</a>
						</li>
						<!-- Windows -->
						<li v-on:click="activeFolder='Windows'">
							<i v-if="activeFolder==='Windows'" class="far fa-folder-open"></i>
							<i v-else class="far fa-folder"></i>
							<a>Windows</a>
						</li>
						<!-- Inside Windows -->
						<ul>
							<li v-on:click="activeFolder='system32'">
								<i v-if="activeFolder==='system32'" class="far fa-folder-open"></i>
								<i v-else class="far fa-folder"></i>
								<a>system32</a>
							</li>
							<li v-on:click="activeFolder='foo'">
								<i v-if="activeFolder==='foo'" class="far fa-folder-open"></i>
								<i v-else class="far fa-folder"></i>
								<a>foo</a>
							</li>
						</ul>
					</ul>
				</div>
				<div class="folderGui">
					<transition name=fade>
						<ul v-if="activeFolder==='Desktop'" class="folders">
							<li @click="initModal('Best meme.png')">
								<i class="far fa-image"></i>
								<a>Best meme.png</a>
							</li>
							<li @click="initModal('Shopping.txt')">
								<i class="far fa-file-alt"></i>
								<a>Shopping.txt</a>
							</li>
						</ul>
						<ul v-if="activeFolder==='Games'" class="folders">
							<li><i class="fas fa-gamepad"></i><a>Ratchet and Clank.emu</a></li>
							<li><i class="fas fa-gamepad"></i><a>Minecraft.exe</a></li>
							<li><i class="fas fa-gamepad"></i><a>The Sims 4.exe</a></li>
							<li><i class="fas fa-gamepad"></i><a>Scribblenauts Ultimate.exe</a></li>
							<li><i class="fas fa-gamepad"></i><a>Portal 2.exe</a></li>
						</ul>
						<ul v-if="activeFolder==='Recycle Bin'" class="folders">
							<li @click="initModal('Passwords.txt')">
								<i class="far fa-file-alt"></i>
								<a>Passwords.txt</a>
							</li>
							<li @click="initModal('Rofl.png')">
								<i class="far fa-image"></i>
								<a>Rofl.png</a>
							</li>
						</ul>
					</transition>
				</div>
			</div>
			<modal v-if="showModal" @close="showModal=false">
				<p slot="fileName" class="windowTitle">{{ fileName }}</p>
				<!-- Desktop -->
				<img v-if="fileName==='Best meme.png'" slot="content" style="padding:1em;margin:auto;" src="custodia/images/bestmeme.png">
				<!--||-->
				<ul v-if="fileName==='Shopping.txt'" slot="content" style="font-size: 2em;padding:1.5em;">
					<li>Pineapples</li>
					<li>Grape fruit</li>
					<li>Feta</li>
					<li>Pasta</li>
					<li>Orange juice</li>
					<li>Whipped cream in a can</li>
				</ul>
				<!-- Recycle Bin -->
				<ul v-if="fileName==='Passwords.txt'" slot="content" style="font-size: 2em;padding:1.5em;list-style-type: none;">
					<li>Sandy Incorporated = Password1997</li>
					<li>Bank = QwertLkjh42</li>
					<li>Facebook = ScruffyIsCute1997</li>
					<li>Spotify = ScruffyIsCute2019</li>
				</ul>
			</modal>
		</div>	
	</div>
	<script src="custodia/js/saburraos.js"></script>
</body>
</html>