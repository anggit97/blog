<?php $__env->startSection('title'); ?>
	Category Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('dashboard.category')); ?>" class="active">Kategory Post</a></li>        
		</ol>

		<div class="sub-content">
			<?php echo $__env->make('include.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<h4>Daftar Category AnggitPrayogo.Com</h4>
			<table id="post" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>No</th>
		                <th>Nama</th>
		                <th>Deskripsi</th>
		                <th>Image</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		                <th>No</th>
		                <th>Nama</th>
		                <th>Deskripsi</th>
		                <th>Image</th>
		                <th>Action</th>
		            </tr>
		        </tfoot>
		        <tbody>
		        	<?php if(count($categories) > 0): ?>
		        			<?php 
								$no = 0;
							 ?>
						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
							<tr>
								<td><?php echo e(++$no); ?></td>
					        	<td><?php echo e($category->category_name); ?></td>
					        	<td><?php echo e($category->desc); ?></td>
					        	<td>
					        		<?php if(Storage::disk('local')->has($category->category_name.'.jpg')): ?>
					        			<img src="<?php echo e(route('get.image',['filename'=>$category->category_name.'.jpg'])); ?>" alt="" width="50px" height="50px" class="img-responsive">
					        		<?php else: ?>
					        			<img src="<?php echo e(asset('images/no_image.png')); ?>" alt="" width="50px" height="50px" class="img-responsive">		
					        		<?php endif; ?>
					        	</td>
					        	<td>
					        		<a href="<?php echo e(route('edit.category',['id'=>$category->id])); ?>"><i class="fa fa-pencil"></i> Edit</a> |
					        		<a href=""><i class="fa fa-trash"></i> Hapus</a>
					        	</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php else: ?>
						<?php echo e('Belum ada Kategori!'); ?>

					<?php endif; ?>
		       	</tbody>
		    </table>
			
			
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master-dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>