<?php $__env->startSection('title'); ?>
	Edit Kategori
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('create.category')); ?>" class="active">Edit Kategori</a></li>        
		</ol>
		
		<div class="sub-content">
			<?php echo $__env->make('include.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<form action="<?php echo e(route('edit.category.process')); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Nama Kategori</label>
					<input type="text" name="category_name" class="form-control" placeholder="Nama Kategori" value="<?php echo e($category->category_name); ?>">
				</div>
				<div class="form-group">
					<label for="">Dekskripsi Kategori</label>
					<textarea name="desc" class="form-control" id="" cols="30" rows="10" placeholder="Deskripsi Kategori"><?php echo e($category->desc); ?></textarea>
				</div>
				<div class="form-group">
					<label for="">Gambar Utama Kategori</label>
					<input type="file" name="image" class="form-control" id="imgInp">
					<center>
						<?php if(Storage::disk('local')->has($category->category_name.'.jpg')): ?>
		        			<img src="<?php echo e(route('get.image',['filename'=>$category->category_name.'.jpg'])); ?>" id="blah" alt="" width="200px" height="200px"  class="img-responsive">
		        		<?php else: ?>
		        			<img src="<?php echo e(asset('images/no_image.png')); ?>" id="blah" width="200px" height="200px"  class="img-responsive">		
		        		<?php endif; ?>
					</center>
				</div>
				<hr>
				<button type="submit" class="btn btn-success right"><i class="fa fa-save"></i> Simpan</button>
				<input type="hidden" value="<?php echo e($category->id); ?>" name="id">
				<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master-dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>