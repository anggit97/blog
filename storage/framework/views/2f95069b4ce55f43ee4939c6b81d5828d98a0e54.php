

<?php $__env->startSection('title'); ?>
Anggit Prayogo.com | Daftar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="fluid-container">
	<div class="parallax">
	  <div class="container between">
	    <div class="row">
	      <center>
	        <h1>Selamat Datang di Anggit Prayogo.com</h1>
	        <h5>Quality is more important than quantity. One home run is much better than two doubles  - Steve Jobs</h5>
	        <img src="<?php echo e(asset('images/dev.png')); ?>" alt="Anggit Prayogo" class="img img-responsive img-circle" id="dp">
	      </center>
	    </div>
	    <div class="row">
	      
	    </div>
	    </div>
	</div>
	<div class="container bg" style="margin-top: 20px;">
		<div class="col-sm-offset-2 col-sm-8" style="border-left:2px solid black;">
			
			<form action="<?php echo e(route('signup')); ?>" method="post">
				<h1>Daftar</h1>
					
				<?php echo $__env->make('include.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				
				<div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
					<label for="">Username</label>
					<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo e(Request::old('username')); ?>">
				</div>
				<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>" >
					<label for="">Nama</label>
					<input type="text" class="form-control" name="name" placeholder="Nama" value="<?php echo e(Request::old('name')); ?>">
				</div>
				<div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo e(Request::old('email')); ?>">
				</div>
				<div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
					<label for="">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo e(Request::old('password')); ?>">
				</div>
				<div class="form-group <?php echo e($errors->has('password_confirmation') ? 'has-error' : ''); ?>">
					<label for="">Konfirmasi Password</label>
					<input type="password" class="form-control" name="password_confirmation" placeholder="Kofirmasi Password" >
				</div>
				<div>
					<input type="submit" value="daftar" name="daftar" class="btn btn-info col-sm-12">
				</div>
				<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
			</form>
		</div>
	</div>
	<div style="margin-bottom: 30px;"></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>