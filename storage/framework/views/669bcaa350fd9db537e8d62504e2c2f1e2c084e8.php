<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<?php echo $__env->make('include.libs-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<?php echo $__env->make('include.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<?php echo $__env->make('include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="col-sm-9">
				<?php echo $__env->yieldContent('content'); ?>
			</div>	
		</div>
	</div>
</body>
</html>