

<?php $__env->startSection('title'); ?>
	Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('post')); ?>" class="active">Post</a></li>        
		</ol>

		<div class="sub-content">
			<?php echo $__env->make('include.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<h4>Daftar Posting AnggitPrayogo.Com</h4>
			<table id="post" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>No</th>
		                <th>Judul</th>
		                <th>Publisher</th>
		                <th>Kategori</th>
		                <th>Tanggal Update</th>
		                <th>Tanggal Dibuat</th>
		                <th>Image</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		                <th>No</th>
		                <th>Judul</th>
		                <th>Publisher</th>
		                <th>Kategori</th>
		                <th>Tanggal Update</th>
		                <th>Tanggal Dibuat</th>
		                <th>Image</th>
		                <th>Action</th>
		            </tr>
		        </tfoot>
		        <tbody>
		        	<?php if(count($posts) > 0): ?>
		        			<?php 
								$no = 0;
							 ?>
						<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
							<tr>
								<td><?php echo e(++$no); ?></td>
					        	<td><?php echo e($post->title); ?></td>
					        	<td><?php echo e($post->user->name); ?></td>
					        	<td><?php echo e($post->category->category_name); ?></td>
					        	<td><?php echo e($post->updated_at); ?></td>
					        	<td><?php echo e($post->created_at); ?></td>
					        	<td>
					        		<?php if(Storage::disk('local')->has($post->title.'.jpg')): ?>
					        			<img src="<?php echo e(route('get.image',['filename'=>$post->title.'.jpg'])); ?>" alt="" width="50px" height="50px" class="img-responsive">
					        		<?php else: ?>
					        			<img src="<?php echo e(asset('images/no_image.png')); ?>" alt="" width="50px" height="50px" class="img-responsive">		
					        		<?php endif; ?>
					        	</td>
					        	<td>
					        		<?php if(Auth::user()->id == $post->user->id): ?>
					        			<a href="<?php echo e(route('edit.post',['id'=>$post->id])); ?>"><i class="fa fa-pencil"></i> Edit</a> |
					        			<a href="<?php echo e(route('delete.post',['id'=>$post->id])); ?>"><i class="fa fa-trash"></i> Hapus</a>
					        		<?php else: ?>
					        			<?php echo e('Bukan Milikmu'); ?>

					        		<?php endif; ?>
					        		
					        	</td>
							</tr>
							
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php else: ?>
						<?php echo e('Belum ada post!'); ?>

					<?php endif; ?>
		       	</tbody>
		    </table>
			
			
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master-dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>