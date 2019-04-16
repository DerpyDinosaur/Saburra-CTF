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
			cpuOne: [
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
			],
			cpuTwo: {
				name: 'Level 2',
				child: [
					{
						name: 'foo'	
					},
					{
						name: 'bar'	
					}
				]
			},
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
			if (this.username == 'adam' && this.password == '123') {
				this.levelOneDone = true;
				this.levelSelected = 2;

			}else if (this.levelOneDone == true && this.username == 'foo' && this.password == '123') {
				this.levelTwoDone = true;
				this.levelSelected = 3;

			}else if (this.levelTwoDone == true && this.username == 'bar' && this.password == '123') {
				this.levelThreeDone = true;
				this.levelSelected = 4;

			}else if (this.levelThreeDone == true && this.username == 'lar' && this.password == '123') {
				this.levelFourDone = true;

			}
		},
		nodeClicked(nodeName){
			for (var i = 0; i < 2; i++) {
				var x = Object.getOwnPropertyNames(this.folders)[i];
				this.folders[x].active = false;
			}
			this.folders[nodeName.toLowerCase()].active = true;
		}
	},
	computed: {
		activeFolder: function() {
      		return _.pickBy(this.folders, function(x) {
        		return x.active;
      		});
		}
	}
});