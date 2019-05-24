<?php $__env->startSection('isi'); ?>
	<div class="panel panel-default">
		<div class="panel-heading"><?php echo e($data->judul); ?></div>
		<div class="panel-body bawah-dikit"><?php echo $data->isi_markdown; ?></div>
		<div class="panel-footer"><small>
			<?php echo e($data->created_at); ?><br>
			<?php echo e($data->updated_at); ?>

		</small></div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\catatan\application\views/catatan/detail.blade.php ENDPATH**/ ?>