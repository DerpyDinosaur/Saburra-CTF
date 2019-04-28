var vm = new Vue({
	el: "#app",
	data(){
		return{
			levelSelected: 1,
			//
			levelOne: false,
			levelTwo: false,
			levelThree: false,
			levelFour: false,
			//
			username: '',
			password: '',
			//
			trees: {
				cpuI: {
					active: true,
					folders: [
						{
							name: 'Desktop'
						},
						{
							name: 'Downloads'
						},
						{
							name: 'Documents'
						},
						{
							name: 'Pictures'
						}
					]
				},
				cpuII: {
					active: false,
					folders: [
						{
							name: 'Desktop'
						},
						{
							name: 'Downloads'
						},
						{
							name: 'Documents'
						},
						{
							name: 'Pictures'
						},
						{
							name: 'Programs'
						}
					]
				},
				cpuIII: {
					active: false,
					folders: [
						{
							name: 'Desktop'
						},
						{
							name: 'Downloads'
						},
						{
							name: 'Documents'
						},
						{
							name: 'Pictures'
						},
						{
							name: 'Programs'
						}
					]
				}	,
				cpuIV: {
					active: false,
					folders: [
						{
							name: 'Desktop'
						},
						{
							name: 'Downloads'
						},
						{
							name: 'Documents'
						},
						{
							name: 'Pictures'
						},
						{
							name: 'Programs'
						}
					]
				}					
			},
			//
			folders: {
				///////////////////////////////////////////////////////////////
				desktop: {
					active: true,
					items: [
						{
							name: 'image.png',
							type: 'image'
						},
						{
							name: 'password.txt',
							type: 'document'
						}		
					]
				},
				downloads: {
					active: false,
					items: [
						{
							name: 'foo.png',
							type: 'image'
						}
					]
				},
				///////////////////////////////////////////////////////////////
				desktopII: {
					active: false,
					items: [
						{
							name: 'image.png',
							type: 'image'
						},
						{
							name: 'password.txt',
							type: 'document'
						}		
					]
				},
				///////////////////////////////////////////////////////////////
				desktopIII: {
					active: false,
					items: [
						{
							name: 'image.png',
							type: 'image'
						},
						{
							name: 'password.txt',
							type: 'document'
						}		
					]
				},
				///////////////////////////////////////////////////////////////
				desktopIV: {
					active: false,
					items: [
						{
							name: 'image.png',
							type: 'image'
						},
						{
							name: 'password.txt',
							type: 'document'
						}		
					]
				}
			}
		}
	},
	methods: {
		loginCheck(){
			var treeName		
			if (this.username == 'adam' && this.password == '123') {
				this.levelOne = true;
				this.levelSelected = 2;
				treeName = 'cpuII';

			}else if (this.levelOne == true && this.username == 'foo' && this.password == '123') {
				this.levelTwo = true;
				this.levelSelected = 3;
				treeName = 'cpuIII';

			}else if (this.levelTwo == true && this.username == 'bar' && this.password == '123') {
				this.levelThree = true;
				this.levelSelected = 4;
				treeName = 'cpuIV';

			}else if (this.levelThree == true && this.username == 'lar' && this.password == '123') {
				this.levelFour = true;
			}

			var treeCount = Object.getOwnPropertyNames(this.trees).length - 1;
			for (var i = 0; i < treeCount; i++) {
				var x = Object.getOwnPropertyNames(this.trees)[i];
				this.trees[x].active = false;
			}
			this.trees[treeName].active = true;
		},
		nodeClicked(nodeName){
			var folderCount = Object.getOwnPropertyNames(this.folders).length - 1;
			var newNodeName = nodeName;

			if (this.levelThree == true) {
				newNodeName = newNodeName+"IV";
			}else if (this.levelTwo == true) {
				newNodeName = newNodeName+"III";
			}else if (this.levelOne == true) {
				newNodeName = newNodeName+"II";
			}

			newNodeName = newNodeName.charAt(0).toLowerCase() + newNodeName.slice(1);

			for (var i = 0; i < folderCount; i++) {
				var x = Object.getOwnPropertyNames(this.folders)[i];
				this.folders[x].active = false;
			}

			this.folders[newNodeName].active = true;
		}
	},
	computed: {
		activeFolder: function() {
      		return _.pickBy(this.folders, function(x){
        		return x.active;
      		});
		},
		activeTree: function(){
			return _.pickBy(this.trees, function(x){
				return x.active;
			});
		}
	}
});