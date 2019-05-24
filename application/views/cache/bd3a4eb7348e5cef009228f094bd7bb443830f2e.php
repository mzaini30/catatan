<?php $__env->startSection('isi'); ?>
	<div class="alert alert-success">Hasil pencarian dengan kata kunci <em><?php echo e($cari); ?></em></div>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<a href="<?php echo e(base_url()); ?>index.php/catatan/detail/<?php echo e($data->slug); ?>" class="bukan-link">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo e($data->judul); ?></div>
				<div class="panel-body">
					<div class="truncate"><?php echo e($data->isi); ?></div>
				</div>
			</div>
		</a>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\catatan\application\views/catatan/cari.blade.php ENDPATH**/ ?>