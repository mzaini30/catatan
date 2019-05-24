
<?php $__env->startSection('judul'); ?>
	<?php echo e($data->judul); ?> - 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('isi'); ?>
	<div class="panel panel-default">
		<div class="panel-heading"><?php echo e($data->judul); ?></div>
		<div class="panel-body bawah-dikit"><?php echo $data->isi_markdown; ?></div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/zen/ZEN/catatan/application/views/catatan/detail.blade.php ENDPATH**/ ?>