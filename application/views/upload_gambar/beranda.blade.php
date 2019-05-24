@extends('layout.default')
@section('bagian_upload_gambar')
	<style type="text/css">
		.bagian-gambar {
			display: none;
		}
	</style>
	<a href="#!" @click='tampil_semua()' class="list-group-item">Semua Gambar</a>
	<a href="#!" @click='tambah_gambar()' class="list-group-item">Tambah Gambar Baru</a>
@endsection
@section('isi')
	<div class="tampil-gambar bagian-gambar">
		<div class="grid">
			<div class="grid-item" v-for='(data, index) in data_gambar'>
				<div class="panel panel-default">
					<div class="panel-heading">@{{ data.judul }}</div>
					<div class="panel-body">
						<img :src="'{{ base_url() }}aset/gambar/' + data.gambar">
					</div>
					<div class="panel-footer">
						<a href="#!" class="btn btn-warning">Edit</a>
						<a href="#!" @click='hapus_gambar(index)' class="btn btn-danger">Hapus</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tambah-gambar bagian-gambar">
		b
	</div>
	<div class="edit-gambar bagian-gambar">
		c
	</div>
@endsection
@section('skrip_tambahan')
	<script type="text/javascript" src="{{ base_url() }}aset/app/upload-gambar.js"></script>
@endsection