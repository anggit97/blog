<?php if(count($errors) > 0): ?>
<div class="row">
	<div class="col-md-6 col-md-offset-3 alert alert-danger alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
</div>
<?php endif; ?>

<?php if(Session::has('message')): ?>
<div class="row">
	<div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo e(Session::get('message')); ?>

	</div>
</div>	
<?php endif; ?>