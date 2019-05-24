
<?php $__env->startSection('isi'); ?>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<a href="<?php echo e(base_url()); ?>index.php/catatan/detail/<?php echo e($data->slug); ?>" class="bukan-link">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo e($data->judul); ?></div>
				<div class="panel-body">
					<div><?php echo e(str_limit($data->isi, $limit = 300, $end = '...')); ?></div>
				</div>
				<div class="panel-footer">
					<small>
						<div class="waktu waktu-<?php echo e($data->slug); ?>"></div>
						<script type="text/javascript">
							setInterval(function(){
								$('.waktu-<?php echo e($data->slug); ?>').html(moment('<?php echo e($data->created_at); ?>').fromNow())
							}, 1000)
						</script>
					</small>
				</div>
			</div>
		</a>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php echo $pagination; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/C48455A884559E2C/catatan/application/views/catatan/beranda.blade.php ENDPATH**/ ?>