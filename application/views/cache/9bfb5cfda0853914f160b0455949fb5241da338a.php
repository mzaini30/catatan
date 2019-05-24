<?php $__env->startSection('isi'); ?>
	<form method="post" action="<?php echo e(base_url()); ?>index.php/catatan/ganti_do">
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" name="username" value="<?php echo e($data->username); ?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="text" name="password" value="<?php echo e($data->password); ?>" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" value="Ubah" class="btn btn-danger">
		</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\catatan\application\views/catatan/ganti_username.blade.php ENDPATH**/ ?>