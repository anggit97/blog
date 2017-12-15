@if(count($errors) > 0)
<div class="row">
	<div class="col-md-6 col-md-offset-3 alert alert-danger alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
</div>
@endif

@if(Session::has('message'))
<div class="row">
	<div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ Session::get('message') }}
	</div>
</div>	
@endif