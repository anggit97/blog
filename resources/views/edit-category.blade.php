@extends('layout.master-dashboard')

@section('title')
	Edit Kategori
@endsection

@section('content')
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="{{ route('create.category') }}" class="active">Edit Kategori</a></li>        
		</ol>
		
		<div class="sub-content">
			@include('include.message-block')
			<form action="{{ route('edit.category.process') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Nama Kategori</label>
					<input type="text" name="category_name" class="form-control" placeholder="Nama Kategori" value="{{ $category->category_name }}">
				</div>
				<div class="form-group">
					<label for="">Dekskripsi Kategori</label>
					<textarea name="desc" class="form-control" id="" cols="30" rows="10" placeholder="Deskripsi Kategori">{{ $category->desc }}</textarea>
				</div>
				<div class="form-group">
					<label for="">Gambar Utama Kategori</label>
					<input type="file" name="image" class="form-control" id="imgInp">
					<center>
						@if (Storage::disk('local')->has($category->category_name.'.jpg'))
		        			<img src="{{ route('get.image',['filename'=>$category->category_name.'.jpg']) }}" id="blah" alt="" width="200px" height="200px"  class="img-responsive">
		        		@else
		        			<img src="{{ asset('images/no_image.png') }}" id="blah" width="200px" height="200px"  class="img-responsive">		
		        		@endif
					</center>
				</div>
				<hr>
				<button type="submit" class="btn btn-success right"><i class="fa fa-save"></i> Simpan</button>
				<input type="hidden" value="{{ $category->id }}" name="id">
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>
@endsection

