@extends('layout.master-dashboard')

@section('title')
	Buat post baru
@endsection

@section('content')
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="{{ route('create.post') }}" class="active">Tambah Post</a></li>        
		</ol>
		
		<div class="sub-content">
			@include('include.message-block')
			<form action="{{ route('create.post.process') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Judul</label>
					<input type="text" name="title" class="form-control" placeholder="judul post" value="{{ Request::old('title') }}">
				</div>
				<div class="form-group">
					<label for="body">Isi</label>
					<textarea name="body" class="ckeditor" cols="30" rows="10">{{ Request::old('body') }}</textarea>
				</div>
				<div class="form-group">
					<label for="">Kategori</label>
					<select name="category" class="form-control">
						<option value="" disabled="" selected="">-- Pilih Kategori --</option>
						@foreach ($categories as $category)
							<option value="{{ $category->id }}" {{ (Request::old("category") == $category->id ? "selected":"") }}>{{ $category->category_name.' - '.$category->desc }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Tag Post</label><br>
					<input type="text" value="" data-role="tagsinput" id="tags" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Gambar Utama Post</label>
					<input type="file" name="image" class="form-control" id="imgInp">
					<center><img id="blah" src="{{ asset('images/no_image.png') }}" alt="your image" class="img-responsive" width="200px" height="200px" /></center>
				</div>
				<hr>
				<button type="submit" class="btn btn-success right"><i class="fa fa-save"></i> Simpan</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>
	
	<script>
		var url = '{{ route("tags") }}'
		var asset = '{{ asset("cities.json") }}';
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
@endsection

