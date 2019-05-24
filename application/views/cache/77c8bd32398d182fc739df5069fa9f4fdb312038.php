<?php $__env->startSection('bagian_upload_gambar'); ?>
	<style type="text/css">
		.bagian-gambar {
			display: none;
		}
	</style>
	<a href="#!" @click='tampil_semua()' class="list-group-item">Semua Gambar</a>
	<a href="#!" @click='tambah_gambar()' class="list-group-item">Tambah Gambar Baru</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('isi'); ?>
	<div class="tampil-gambar bagian-gambar">
		<div class="grid">
			<div class="grid-item" v-for='(data, index) in data_gambar'>
				<div class="panel panel-default">
					<div class="panel-heading">{{ data.judul }}</div>
					<div class="panel-body">
						<img :src="'<?php echo e(base_url()); ?>aset/gambar/' + data.gambar">
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('skrip_tambahan'); ?>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/app/upload-gambar.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/zen/ZEN/catatan/application/views/upload_gambar/beranda.blade.php ENDPATH**/ ?>