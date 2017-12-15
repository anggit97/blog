@extends('layout.master-dashboard')

@section('title')
	Post
@endsection

@section('content')
	<div class="content">
		<ol class="breadcrumb">
			<li><a href="{{ route('post') }}" class="active">Post</a></li>        
		</ol>

		<div class="sub-content">
			@include('include.message-block')
			<h4>Daftar Posting AnggitPrayogo.Com</h4>
			<table id="post" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>No</th>
		                <th>Judul</th>
		                <th>Publisher</th>
		                <th>Kategori</th>
		                <th>Tanggal Update</th>
		                <th>Tanggal Dibuat</th>
		                <th>Image</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		                <th>No</th>
		                <th>Judul</th>
		                <th>Publisher</th>
		                <th>Kategori</th>
		                <th>Tanggal Update</th>
		                <th>Tanggal Dibuat</th>
		                <th>Image</th>
		                <th>Action</th>
		            </tr>
		        </tfoot>
		        <tbody>
		        	@if (count($posts) > 0)
		        			@php
								$no = 0;
							@endphp
						@foreach ($posts as $post)
							
							<tr>
								<td>{{ ++$no }}</td>
					        	<td>{{ $post->title }}</td>
					        	<td>{{ $post->user->name }}</td>
					        	<td>{{ $post->category->category_name }}</td>
					        	<td>{{ $post->updated_at }}</td>
					        	<td>{{ $post->created_at }}</td>
					        	<td>
					        		@if (Storage::disk('local')->has($post->title.'.jpg'))
					        			<img src="{{ route('get.image',['filename'=>$post->title.'.jpg']) }}" alt="" width="50px" height="50px" class="img-responsive">
					        		@else
					        			<img src="{{ asset('images/no_image.png') }}" alt="" width="50px" height="50px" class="img-responsive">		
					        		@endif
					        	</td>
					        	<td>
					        		@if (Auth::user()->id == $post->user->id)
					        			<a href="{{ route('edit.post',['id'=>$post->id]) }}"><i class="fa fa-pencil"></i> Edit</a> |
					        			<a href="{{ route('delete.post',['id'=>$post->id]) }}"><i class="fa fa-trash"></i> Hapus</a>
					        		@else
					        			{{ 'Bukan Milikmu' }}
					        		@endif
					        		
					        	</td>
							</tr>
							
						@endforeach
					@else
						{{ 'Belum ada post!'}}
					@endif
		       	</tbody>
		    </table>
			
			
		</div>
	</div>
@endsection

