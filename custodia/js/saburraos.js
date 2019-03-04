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
			return "root/client/" + this.activeFolder;
		}
	}
});

