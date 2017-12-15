@extends('layout.master')

@section('title')
Anggit Prayogo.com | Masuk
@endsection

@section('content')
<div class="fluid-container">
	<div class="parallax">
	  <div class="container between">
	    <div class="row">
	      <center>
	        <h1>Selamat Datang di Anggit Prayogo.com</h1>
	        <h5>Quality is more important than quantity. One home run is much better than two doubles  - Steve Jobs</h5>
	        <img src="{{ asset('images/dev.png') }}" alt="Anggit Prayogo" class="img img-responsive img-circle" id="dp">
	      </center>
	    </div>
	    <div class="row">
	      
	    </div>
	    </div>
	</div>
	<div class="container bg" style="margin-top: 20px;">
		<div class="col-sm-offset-2 col-sm-8" style="border-left:2px solid black;">
			<form action="{{ route('signin') }}" method="post">
				<h1>Masuk</h1>
				@include('include.message-block')
				<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
					<label for="">Username</label>
					<input type="text" class="form-control" name="username" placeholder="Username" value="{{ Request::old('username') }}">
				</div>
				<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
					<label for="">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password" value="{{ Request::old('password') }}">
				</div>
				<div>
					<input type="submit" value="Masuk" name="login" class="btn btn-info col-sm-12">
				</div>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>
	<div style="margin-bottom: 30px;"></div>
</div>
@endsection