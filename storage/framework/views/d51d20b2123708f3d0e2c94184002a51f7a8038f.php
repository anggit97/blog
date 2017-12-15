<?php $__env->startSection('title'); ?>
	<?php echo e(Auth::user()->name); ?> | AnggitPrayogo.com 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('account',['username'=>$user->username])); ?>">Akun</a></li> 
			<li><a href="<?php echo e(route('account',['username'=>$user->username])); ?>"><?php echo e($user->name); ?></a></li>        
		</ol>

		<div class="sub-content">
			<?php echo $__env->make('include.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<form action="<?php echo e(route('account.save')); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo e($user->username); ?>" readonly="">
				</div>
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" name="name" class="form-control" placeholder="Nama" value="<?php echo e($user->name); ?>">
				</div>
				<div class="form-group">
					<label for="">Gambar Utama Post</label>
					<input type="file" name="image" class="form-control" id="imgInp">
					<center>
					<?php if(Storage::disk('local')->has($user->name.'.jpg')): ?>
	        			<img src="<?php echo e(route('get.image',['filename'=>$user->name.'.jpg'])); ?>" id="blah" alt="" width="200px" height="200px"  class="img-responsive">
	        		<?php else: ?>
	        			<img src="<?php echo e(asset('images/no_image.png')); ?>" id="blah" width="200px" height="200px"  class="img-responsive">		
	        		<?php endif; ?>
					</center>
				</div>
				<hr>
				<button type="submit" class="btn btn-success right"><i class="fa fa-save"></i> Simpan</button>
				<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
				<input type="hidden" name="id" value="<?php echo e($user->id); ?>">
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master-dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>