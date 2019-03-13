Vue.component('modal', {
	template: '#modal-template'
})

var vm = new Vue({
	el: "#app",
	data: {
		activeFolder: 'Desktop',
		fileName: '',
		showModal: false
	},
	methods:{
		initModal: function(fileName){
			this.fileName = fileName;
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

