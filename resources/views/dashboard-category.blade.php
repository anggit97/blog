@extends('layout.master-dashboard')

@section('title')
	Category Post
@endsection

@section('content')
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard.category') }}" class="active">Kategory Post</a></li>        
		</ol>

		<div class="sub-content">
			@include('include.message-block')
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
		        	@if (count($categories) > 0)
		        			@php
								$no = 0;
							@endphp
						@foreach ($categories as $category)
							
							<tr>
								<td>{{ ++$no }}</td>
					        	<td>{{ $category->category_name }}</td>
					        	<td>{{ $category->desc }}</td>
					        	<td>
					        		@if (Storage::disk('local')->has($category->category_name.'.jpg'))
					        			<img src="{{ route('get.image',['filename'=>$category->category_name.'.jpg']) }}" alt="" width="50px" height="50px" class="img-responsive">
					        		@else
					        			<img src="{{ asset('images/no_image.png') }}" alt="" width="50px" height="50px" class="img-responsive">		
					        		@endif
					        	</td>
					        	<td>
					        		<a href="{{ route('edit.category',['id'=>$category->id]) }}"><i class="fa fa-pencil"></i> Edit</a> |
					        		<a href=""><i class="fa fa-trash"></i> Hapus</a>
					        	</td>
							</tr>
						@endforeach
					@else
						{{ 'Belum ada Kategori!'}}
					@endif
		       	</tbody>
		    </table>
			
			
		</div>
	</div>
@endsection

