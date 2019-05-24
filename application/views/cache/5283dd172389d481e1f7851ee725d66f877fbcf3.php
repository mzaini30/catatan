<?php $__env->startSection('isi'); ?>
	<form action="<?php echo e(base_url()); ?>index.php/catatan/edit_do/<?php echo e($data->slug); ?>" method="post">
		<div class="form-group"><label for="">Judul</label><input type="text" class="form-control" name="judul" value="<?php echo e($data->judul); ?>"></div>
		<div class="form-group"><label for="">Isi Catatan</label><textarea name="isi" class="form-control" id="" cols="30" rows="10"><?php echo e($data->isi); ?></textarea></div>
		<div class="form-group"><input type="submit" value="Perbarui" class="btn btn-default"></div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\catatan\application\views/catatan/edit.blade.php ENDPATH**/ ?>