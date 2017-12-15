<div class="sidebar">
    <div class="row">
        <div class="col-sm-4">
            @if (Storage::disk('local')->has(Auth::user()->name.'.jpg'))
                <img src="{{ route('get.image',['filename'=>Auth::user()->name.'.jpg']) }}"  class="img-responsive">
            @else
                <img src="{{ asset('images/no_image.png') }}" class="img-responsive">       
            @endif
        </div>
        <div class="col-sm-8">
            <a href="{{ route('account',['username'=>Auth::user()->username]) }}">{{ Auth::user()->name }}</a>
        </div>
       
       
    </div>

     <a href="{{ route('about') }}" class="col-sm-12 btn btn-warning" style="margin-top: 10px;">lihat blog</a>
    <div class="row"></div>
    <hr>
    <div class="menu">
        <ul>
            <li class="{{ Route::currentRouteNamed('dashboard') ? 'actived' : '' }}" ><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <hr>
            <li><h4>Post</h4></li>
            <li class="{{ Route::currentRouteNamed('post') ? 'actived' : '' }}"><a href="{{ route('post') }}" data-toggle="collapse" data-target="#post">Post</a></li>
            <li class="{{ Route::currentRouteNamed('create.post') ? 'actived' : '' }}"><a href="{{ route('create.post') }}" data-toggle="collapse" data-target="#post">Tambah Post</a></li>
            <hr>
            <li><h4>Ketegori</h4></li>
            <li class="{{ Route::currentRouteNamed('dashboard.category') ? 'actived' : '' }}"><a href="{{ route('dashboard.category') }}">Ketegori Post</a></li>
            <li><a href="{{ route('create.category') }}">Tambah Kategori</a></li>
            <li><a href="">Lainnya</a></li>
        </ul>
    </div>
</div>