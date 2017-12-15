@extends('layout.master-dashboard')

@section('title')
	Edit post baru
@endsection

@section('content')
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="{{ route('edit.post',['id'=>$post->id]) }}" class="active">Edit Post</a></li>        
		</ol>
		
		<div class="sub-content">
			@include('include.message-block')
			<form action="{{ route('edit.post.process') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Judul</label>
					<input type="text" name="title" class="form-control" placeholder="judul post" value="{{ $post->title }}">
				</div>
				<div class="form-group">
					<label for="body">Isi</label>
					<textarea name="body" class="ckeditor" cols="30" rows="10">{{ $post->body }}</textarea>
				</div>
				<div class="form-group">
					<label for="">Kategori</label>
					<select name="category" class="form-control">
						<option value="" disabled="" selected="">-- Pilih Kategori --</option>
						@foreach ($categories as $category)
							<option value="{{ $category->id }}" {{ ($post->category->id == $category->id ? "selected":"") }}>{{ $category->category_name.' - '.$category->desc }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Gambar Utama Post</label>
					<input type="file" name="image" class="form-control" id="imgInp">
					<center>
					@if (Storage::disk('local')->has($post->title.'.jpg'))
	        			<img src="{{ route('get.image',['filename'=>$post->title.'.jpg']) }}" id="blah" alt="" width="200px" height="200px"  class="img-responsive">
	        		@else
	        			<img src="{{ asset('images/no_image.png') }}" id="blah" width="200px" height="200px"  class="img-responsive">		
	        		@endif
					</center>
				</div>
				<hr>
				<button type="submit" class="btn btn-success right"><i class="fa fa-save"></i> Simpan</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
				<input type="hidden" name="id" value="{{ $post->id }}">
			</form>
		</div>
	</div>
@endsection

