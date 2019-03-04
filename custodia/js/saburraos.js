Vue.component('modal', {
	template: '#modal-template'
})

var vm = new Vue({
	el: "#app",
	data: {
		activeFolder: 'Desktop',
		folderName: '',
		showModal: false
	},
	methods:{
		initModal: function(folderName){
			this.folderName = folderName;
			this.showModal = true;
		}
	},
	computed:{
		fullPath: function(){
			if (this.activeFolder == "Games" || this.activeFolder == "Recycle Bin") {
				return "root/client/Desktop/" + this.activeFolder;
			}else{
				return "root/client/" + this.activeFolder;
			}
		}
	}
});

