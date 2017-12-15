

<?php $__env->startSection('title'); ?>
	Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('dashboard')); ?>" class="active">Dashboard</a></li>        
		</ol>

		<div class="sub-content">
			<h3>Selamat datang <a href=""><?php echo e(Auth::user()->name); ?></a>!</h3>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master-dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>