

<?php $__env->startSection('title'); ?>
	Buat post baru
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('create.post')); ?>" class="active">Tambah Post</a></li>        
		</ol>
		
		<div class="sub-content">
			<?php echo $__env->make('include.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<form action="<?php echo e(route('create.post.process')); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Judul</label>
					<input type="text" name="title" class="form-control" placeholder="judul post" value="<?php echo e(Request::old('title')); ?>">
				</div>
				<div class="form-group">
					<label for="body">Isi</label>
					<textarea name="body" class="ckeditor" cols="30" rows="10"><?php echo e(Request::old('body')); ?></textarea>
				</div>
				<div class="form-group">
					<label for="">Kategori</label>
					<select name="category" class="form-control">
						<option value="" disabled="" selected="">-- Pilih Kategori --</option>
						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($category->id); ?>" <?php echo e((Request::old("category") == $category->id ? "selected":"")); ?>><?php echo e($category->category_name.' - '.$category->desc); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Tag Post</label><br>
					<input type="text" value="" data-role="tagsinput" id="tags" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Gambar Utama Post</label>
					<input type="file" name="image" class="form-control" id="imgInp">
					<center><img id="blah" src="<?php echo e(asset('images/no_image.png')); ?>" alt="your image" class="img-responsive" width="200px" height="200px" /></center>
				</div>
				<hr>
				<button type="submit" class="btn btn-success right"><i class="fa fa-save"></i> Simpan</button>
				<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
			</form>
		</div>
	</div>
	
	<script>
		var url = '<?php echo e(route("tags")); ?>'
		var asset = '<?php echo e(asset("cities.json")); ?>';
		var cities = new Bloodhound({
		  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
		  queryTokenizer: Bloodhound.tokenizers.whitespace,
		  prefetch: asset
		});
		cities.initialize();

		var elt = $('#tags');
		elt.tagsinput({
		  itemValue: 'value',
		  itemText: 'text',
		  typeaheadjs: {
		    name: 'cities',
		    displayKey: 'text',
		    source: cities.ttAdapter()
		  }
		});
	</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master-dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>