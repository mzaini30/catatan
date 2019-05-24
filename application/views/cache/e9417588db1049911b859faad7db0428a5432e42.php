<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $__env->yieldContent('judul'); ?>
		Zen
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo e(base_url()); ?>aset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(base_url()); ?>aset/app/style.css">
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/moment/moment-with-locales.js"></script>
	<script type="text/javascript">
		moment.locale('id')
	</script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <a href="<?php echo e(base_url()); ?>" class="navbar-brand">Zen</a>
	    </div>
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container vue">
		<div class="row">
			<div class="col-sm-8 sticky">
				<?php echo $__env->yieldContent('isi'); ?>
			</div>
			<div class="col-sm-4 sticky">
				<form action="<?php echo e(base_url()); ?>index.php/catatan/cari" method="get">
					<div class="form-group">
						<label for="">Cari</label>
						<input type="text" name="cari" class="form-control">
					</div>
				</form>
				<div class="panel panel-default">
					<div class="panel-heading">Catatan</div>
					<div class="list-group">
						<a href="<?php echo e(base_url()); ?>index.php/catatan/tulis_baru" class="list-group-item">Catatan Baru</a>
						<?php if($detail == true): ?>
							<a href="<?php echo e(base_url()); ?>index.php/catatan/edit/<?php echo e($data->slug); ?>" class="list-group-item">Edit</a>
							<a href="<?php echo e(base_url()); ?>index.php/catatan/hapus/<?php echo e($data->slug); ?>" class="list-group-item">Hapus</a>
						<?php endif; ?>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">Tools</div>
					<div class="list-group">
						<a href="<?php echo e(base_url()); ?>index.php/upload_gambar" class="bagian-gambar list-group-item">Upload Gambar</a>
						<?php echo $__env->yieldContent('bagian_upload_gambar'); ?>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">Akun</div>
					<div class="list-group">
						<a href="<?php echo e(base_url()); ?>index.php/catatan/ganti_username" class="list-group-item">Ganti Username dan Password</a>
						<a href="<?php echo e(base_url()); ?>index.php/catatan/keluar" class="list-group-item">Keluar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/vue/vue.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/axios/axios.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/fixed/ResizeSensor.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/vendor/fixed/theia-sticky-sidebar.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>aset/app/app.js"></script>
	<?php echo $__env->yieldContent('skrip_tambahan'); ?>
</body>
</html><?php /**PATH /mnt/C48455A884559E2C/catatan/application/views/layout/default.blade.php ENDPATH**/ ?>