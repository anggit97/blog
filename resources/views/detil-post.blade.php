@extends('layout.master')

@section('title')
    AnggitPrayogo.com | Sekedar sharing aja...
@endsection

@section('meta-tag')
  <meta name="description" content="{!! str_limit($post->body, $limit = 200, $end = '') !!}">
  <meta property="og:url"           content="{{ Request::url() }}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="{{ $post->title }}" />
  <meta property="og:description"   content="{!! str_limit($post->body, $limit = 200, $end = '') !!}" />
  <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
@endsection

@section('content')
<div class="fluid-container">
    <div class="contentbg">
      <div class="container between">
        <div class="row">
          <center>
            <h1>Selamat Datang di Anggit Prayogo.com</h1>
            <h5>Quality is more important than quantity. One home run is much better than two doubles  - Steve Jobs</h5>
          </center>
        </div>
        <div class="row">

          {{-- <div class="col-sm-3 sidebar">
            <ul> Berita terpopuler
                <li>Menu1</li>
                <li>Menu2</li>
                <li>Menu3</li>
                <li>Menu4</li>
            </ul>
          </div> --}}
          <div class="col-sm-10 col-sm-offset-1 content">

            <ol class="breadcrumb">
                <li><a href="{{ route('blog') }}" class="active">Kembali</a></li>        
            </ol>
            
            <div class="single-content">
                <h2><a href="">{!! $post->title !!}</a></h2> 
                <div class="info-single-content">
                    <span class="posted-by">Ditulis oleh</span> <b><a href="">{{ $post->user->name }}</a></b> <span class="posted-on">Pada</span> {{ \Carbon\Carbon::parse($post->created_at)->format('d, M Y')  }} <span class="posted-by">Kategori</span> <a href="">{{ $post->category->category_name }}</a>
                </div> 
                <div class="body-single-content">
                    @if (Storage::disk('local')->has($post->title.'.jpg'))
                        <center><img src="{{ route('get.image',['filename'=>$post->title.'.jpg']) }}" alt="" width="300px" height="300px" class="img-responsive"></center>
                    @else
                        <center><img src="{{ asset('images/no_image.png') }}" alt="" width="300px" height="300px" class="img-responsive"> </center>    
                    @endif
                    {!! $post->body !!}
                </div> 
                <div class="share" style="margin-top: 40px;">
                  <div class="fb-share-button" data-href="{{ Request::url() }}" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Bagikan</a>
                  </div>
                  <div id="fb-root">
                    
                  </div>  
                </div> 
            </div>

          </div>

        </div>
       </div>
    </div>
</div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9&appId=1579916018946948";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>  
@endsection