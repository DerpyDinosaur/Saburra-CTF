var vm = new Vue({
	el: "#app",
	data(){
		return{
			levelSelected: 1,
			//
			levelOneDone: false,
			levelTwoDone: false,
			levelThreeDone: false,
			levelFourDone: false,
			//
			username: '',
			password: '',
			//
			trees: {
				cpuOne: {
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
						},
						{
							name: 'Programs'
						}
					]
				},
				cpuTwo: {
					active: false,
					folders: [
						{
							name: 'foo'
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
				desktop: {
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
				downloads: {
					active: false,
					items: [
						{
							name: 'foo.png',
							type: 'image'
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
				this.levelOneDone = true;
				this.levelSelected = 2;
				treeName = 'cpuTwo';

			}else if (this.levelOneDone == true && this.username == 'foo' && this.password == '123') {
				this.levelTwoDone = true;
				this.levelSelected = 3;
				treeName = 'cpuThree';

			}else if (this.levelTwoDone == true && this.username == 'bar' && this.password == '123') {
				this.levelThreeDone = true;
				this.levelSelected = 4;
				treeName = 'cpuFour';

			}else if (this.levelThreeDone == true && this.username == 'lar' && this.password == '123') {
				this.levelFourDone = true;

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
			for (var i = 0; i < folderCount; i++) {
				var x = Object.getOwnPropertyNames(this.folders)[i];
				this.folders[x].active = false;
			}
			this.folders[nodeName.toLowerCase()].active = true;
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