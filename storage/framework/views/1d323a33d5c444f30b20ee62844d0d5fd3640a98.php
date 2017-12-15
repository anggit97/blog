<?php $__env->startSection('title'); ?>
	Edit post baru
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('edit.post',['id'=>$post->id])); ?>" class="active">Edit Post</a></li>        
		</ol>
		
		<div class="sub-content">
			<?php echo $__env->make('include.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<form action="<?php echo e(route('edit.post.process')); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Judul</label>
					<input type="text" name="title" class="form-control" placeholder="judul post" value="<?php echo e($post->title); ?>">
				</div>
				<div class="form-group">
					<label for="body">Isi</label>
					<textarea name="body" class="ckeditor" cols="30" rows="10"><?php echo e($post->body); ?></textarea>
				</div>
				<div class="form-group">
					<label for="">Kategori</label>
					<select name="category" class="form-control">
						<option value="" disabled="" selected="">-- Pilih Kategori --</option>
						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($category->id); ?>" <?php echo e(($post->category->id == $category->id ? "selected":"")); ?>><?php echo e($category->category_name.' - '.$category->desc); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Gambar Utama Post</label>
					<input type="file" name="image" class="form-control" id="imgInp">
					<center>
					<?php if(Storage::disk('local')->has($post->title.'.jpg')): ?>
	        			<img src="<?php echo e(route('get.image',['filename'=>$post->title.'.jpg'])); ?>" id="blah" alt="" width="200px" height="200px"  class="img-responsive">
	        		<?php else: ?>
	        			<img src="<?php echo e(asset('images/no_image.png')); ?>" id="blah" width="200px" height="200px"  class="img-responsive">		
	        		<?php endif; ?>
					</center>
				</div>
				<hr>
				<button type="submit" class="btn btn-success right"><i class="fa fa-save"></i> Simpan</button>
				<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
				<input type="hidden" name="id" value="<?php echo e($post->id); ?>">
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master-dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>