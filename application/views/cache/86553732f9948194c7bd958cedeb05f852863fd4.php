
<?php $__env->startSection('isi'); ?>
	<form action="<?php echo e(base_url()); ?>index.php/catatan/catatan_baru_do" method="post">
		<div class="form-group"><label for="">Judul</label><input type="text" class="form-control" name="judul"></div>
		<div class="form-group"><label for="">Isi Catatan</label><textarea name="isi" class="form-control" id="" cols="30" rows="10"></textarea></div>
		<div class="form-group"><input type="submit" value="Simpan" class="btn btn-default"></div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/zen/ZEN/catatan/application/views/catatan/baru.blade.php ENDPATH**/ ?>