new Vue({
	el: '.vue',
	data: {
		data_gambar: []
	},
	methods: {
		sembunyi_semua: function(){
			$('.bagian-gambar').hide()
		},
		tampil_semua: function(){
			this.sembunyi_semua()
			$('.tampil-gambar').show()
			gambar = this
			axios.get('http://localhost:2019/index.php/upload_gambar_json').then(function(hasil){
				gambar.data_gambar = hasil.data
			})
		},
		tambah_gambar: function(){
			this.sembunyi_semua()
			$('.tambah-gambar').show()
		},
		edit_gambar: function(){
			this.sembunyi_semua()
			$('.edit-gambar').show()
		},
		hapus_gambar: function(index){
			gambar = this
			axios.delete('http://localhost:2019/index.php/upload_gambar_json/hapus/' + gambar.data_gambar[index].slug).then(function(hasil){
				gambar.tampil_semua()
			})
		}
	},
	mounted(){
		this.tampil_semua()
	}
})