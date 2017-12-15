@extends('layout.master-dashboard')

@section('title')
	{{ Auth::user()->name }} | AnggitPrayogo.com 
@endsection

@section('content')
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="{{ route('account',['username'=>$user->username]) }}">Akun</a></li> 
			<li><a href="{{ route('account',['username'=>$user->username]) }}">{{ $user->name }}</a></li>        
		</ol>

		<div class="sub-content">
			@include('include.message-block')
			<form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username" value="{{ $user->username }}" readonly="">
				</div>
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $user->name }}">
				</div>
				<div class="form-group">
					<label for="">Gambar Utama Post</label>
					<input type="file" name="image" class="form-control" id="imgInp">
					<center>
					@if (Storage::disk('local')->has($user->name.'.jpg'))
	        			<img src="{{ route('get.image',['filename'=>$user->name.'.jpg']) }}" id="blah" alt="" width="200px" height="200px"  class="img-responsive">
	        		@else
	        			<img src="{{ asset('images/no_image.png') }}" id="blah" width="200px" height="200px"  class="img-responsive">		
	        		@endif
					</center>
				</div>
				<hr>
				<button type="submit" class="btn btn-success right"><i class="fa fa-save"></i> Simpan</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
				<input type="hidden" name="id" value="{{ $user->id }}">
			</form>
		</div>
	</div>
@endsection

