@extends('layout.master-dashboard')

@section('title')
	Dashboard
@endsection

@section('content')
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard') }}" class="active">Dashboard</a></li>        
		</ol>

		<div class="sub-content">
			<h3>Selamat datang <a href="">{{ Auth::user()->name }}</a>!</h3>
		</div>
	</div>
@endsection

