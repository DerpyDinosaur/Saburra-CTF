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
							<ul>
								<li v-on:click="activeFolder='config'">
									<i v-if="activeFolder==='config'" class="far fa-folder-open"></i>
									<i v-else class="far fa-folder"></i>
									<a>config</a>
								</li>
							</ul>
							<li v-on:click="activeFolder='fonts'">
								<i v-if="activeFolder==='fonts'" class="far fa-folder-open"></i>
								<i v-else class="far fa-folder"></i>
								<a>fonts</a>
							</li>
						</ul>
					</ul>
				</div>
				<div class="folderGui">
					<transition name=fade>
						<!-- Desktop -->
						<ul v-if="activeFolder==='Desktop'" class="folders">
							<li @click="initModal('Best meme.png')">
								<i class="far fa-image"></i>
								<a>Best meme.png</a>
							</li>
							<li @click="initModal('Shopping.txt')">
								<i class="far fa-file-alt"></i>
								<a>Shopping.txt</a>
							</li>
							<li v-on:click="activeFolder='Games'">
								<i class="fas fa-folder"></i>
								<a>Games</a>
							</li>
							<li v-on:click="activeFolder='Recycle Bin'">
								<i class="fas fa-folder"></i>
								<a>Recycle Bin</a>
							</li>
						</ul>
						<!-- Games -->
						<ul v-if="activeFolder==='Games'" class="folders">
							<li><i class="fas fa-gamepad"></i><a>Ratchet and Clank.emu</a></li>
							<li><i class="fas fa-gamepad"></i><a>Minecraft.exe</a></li>
							<li><i class="fas fa-gamepad"></i><a>The Sims 4.exe</a></li>
							<li><i class="fas fa-gamepad"></i><a>Scribblenauts Ultimate.exe</a></li>
							<li><i class="fas fa-gamepad"></i><a>Portal 2.exe</a></li>
						</ul>
						<!-- Recycle -->
						<ul v-if="activeFolder==='Recycle Bin'" class="folders">
							<li @click="initModal('Passwords.txt')">
								<i class="far fa-file-alt"></i>
								<a>Passwords.txt</a>
							</li>
							<li @click="initModal('Riddle.txt')">
								<i class="far fa-file-alt"></i>
								<a>Riddle.txt</a>
							</li>
							<li @click="initModal('Rofl.jpg')">
								<i class="far fa-image"></i>
								<a>Rofl.jpg</a>
							</li>
						</ul>
						<!-- Pictures -->
						<ul v-if="activeFolder==='Pictures'" class="folders">
							<li @click="initModal('Pic1.jpg')">
								<i class="far fa-image"></i>
								<a>Pic1.jpg</a>
							</li>							
							<li @click="initModal('Pic2.jpg')">
								<i class="far fa-image"></i>
								<a>Pic2.jpg</a>
							</li>							
							<li @click="initModal('Pic3.jpg')">
								<i class="far fa-image"></i>
								<a>Pic3.jpg</a>
							</li>							
							<li @click="initModal('Pic4.jpg')">
								<i class="far fa-image"></i>
								<a>Pic4.jpg</a>
							</li>
						</ul>
						<!-- Windows -->
						<ul v-if="activeFolder==='Windows'" class="folders">
							<li><i class="fas fa-cogs"></i><a>explorer.exe</a></li>
							<li><i class="fas fa-file-alt"></i><a>notepad.exe</a></li>
							<li><i class="fas fa-terminal"></i><a>cmd.exe</a></li>
							<li v-on:click="activeFolder='system32'">
								<i class="fas fa-folder"></i>
								<a>system32</a>
							</li>
							<li v-on:click="activeFolder='fonts'">
								<i class="fas fa-folder"></i>
								<a>fonts</a>
							</li>
						</ul>
						<ul v-if="activeFolder==='system32'" class="folders">
							<li v-on:click="activeFolder='config'">
								<i class="fas fa-folder"></i>
								<a>config</a>
							</li>
						</ul>
						<ul v-if="activeFolder==='config'" class="folders">
							<li @click="initModal('SAM')">
								<i class="fas fa-file-excel"></i>
								<a>SAM</a>
							</li>
						</ul>
						<ul v-if="activeFolder==='fonts'" class="folders">
							<li><i class="fas fa-font"></i><a>Times New Roman.ttf</a></li>
							<li><i class="fas fa-font"></i><a>Dejavu.ttf</a></li>
							<li><i class="fas fa-font"></i><a>Open Sans.ttf</a></li>
							<li><i class="fas fa-font"></i><a>Roboto.ttf</a></li>
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
				<img v-if="fileName==='Rofl.jpg'" slot="content" style="padding:1em;margin:auto;" src="custodia/images/rofl.jpg">
				<ul v-if="fileName==='Riddle.txt'" slot="content" style="font-size: 2em;padding:1.5em;list-style-type: none;">
					<p>Why is a raven like a writing desk?</p>
				</ul>
				<!-- Pictures -->
				<img v-if="fileName==='Pic1.jpg'" slot="content" style="padding:1em;margin:auto;" src="custodia/images/pic1.jpg">
				<img v-if="fileName==='Pic2.jpg'" slot="content" style="padding:1em;margin:auto;" src="custodia/images/pic2.jpg">
				<img v-if="fileName==='Pic3.jpg'" slot="content" style="padding:1em;margin:auto;" src="custodia/images/pic3.jpg">
				<img v-if="fileName==='Pic4.jpg'" slot="content" style="padding:1em;margin:auto;" src="custodia/images/pic4.jpg">
				<!-- Windows -->
				<ul v-if="fileName==='SAM'" slot="content" style="font-size: 1.5em;padding:1em;list-style-type: none;">
					<li>
						<span class="green">CONGRATS Flag: easyaspie</span><br>This is how the good guys break into criminal computers without their compliance. If you would like to know more ask the host in the room or google search "SAM File". I hope you enjoyed the practice level of Saburra please continue to the next levels.
					</li>
				</ul>
			</modal>
		</div>	
	</div>
	<script src="custodia/js/saburraos.js"></script>
</body>
</html>