var vm = new Vue({
	el: "#app",
	data(){
		return{
			inputI: '0',
			inputII: '0',
			inputIII: '0',
			inputIV: '0',
			inputV: '0',			
			//||
			inputIBool: false,
			inputIIBool: false,
			inputIIIBool: false,
			inputIVBool: false,
			inputVBool: false,
		}
	},
	methods: {
		alphaToHex(str){
			var alphabet = "abcdefghijklmnopqrstuvwxyz".split("");
			for (var i = 0; i < alphabet.length; i++) {
				if (str == alphabet[i]){
					return Number(i+1).toString(16);
				}
			}
		},
	},
	computed: {
		inputIHex: function(){
			var hex = this.alphaToHex(this.inputI);
			if (hex == '1a') {
				this.inputIBool = true;
			}else{
				this.inputIBool = false;
			}
			return hex;
		},
		inputIIHex: function(){
			var hex = this.alphaToHex(this.inputII);
			if (hex == '19') {
				this.inputIIBool = true;
			}else{
				this.inputIIBool = false;
			}
			return hex;
		},
		inputIIIHex: function(){
			var hex = this.alphaToHex(this.inputIII);
			if (hex == 'd') {
				this.inputIIIBool = true;
			}else{
				this.inputIIIBool = false;
			}
			return hex;
		},
		inputIVHex: function(){
			var hex = this.alphaToHex(this.inputIV);
			if (hex == '5') {
				this.inputIVBool = true;
			}else{
				this.inputIVBool = false;
			}
			return hex;
		},		
		inputVHex: function(){
			var hex = this.alphaToHex(this.inputV);
			if (hex == '13') {
				this.inputVBool = true;
			}else{
				this.inputVBool = false;
			}
			return hex;
		},

	}
});
