@extends('layout.master-dashboard')

@section('title')
	Buat Kategori Baru
@endsection

@section('content')
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="{{ route('create.category') }}" class="active">Tambah Kategori</a></li>        
		</ol>
		
		<div class="sub-content">
			@include('include.message-block')
			<form action="{{ route('create.category.process') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Nama Kategori</label>
					<input type="text" name="category_name" class="form-control" placeholder="Nama Kategori" value="{{ Request::old('category_name') }}">
				</div>
				<div class="form-group">
					<label for="">Dekskripsi Kategori</label>
					<textarea name="desc" class="form-control" id="" cols="30" rows="10" placeholder="Deskripsi Kategori">{{ Request::old('desc') }}</textarea>
				</div>
				<div class="form-group">
					<label for="">Gambar Utama Kategori</label>
					<input type="file" name="image" class="form-control" id="imgInp">
					<center><img id="blah" src="{{ asset('images/no_image.png') }}" alt="your image" class="img-responsive" width="200px" height="200px" /></center>
				</div>
				<hr>
				<button type="submit" class="btn btn-success right"><i class="fa fa-save"></i> Simpan</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>
@endsection

