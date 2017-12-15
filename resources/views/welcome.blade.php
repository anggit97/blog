@extends('layout.master')

@section('title')
    AnggitPrayogo.com | Sekedar sharing aja...
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
            
            @foreach ($posts as $post)
                <div class="sigle-post">
                    <div class="row">
                        <section class="img-post col-sm-4">
                            @if (Storage::disk('local')->has($post->title.'.jpg'))
                                <center><img src="{{ route('get.image',['filename'=>$post->title.'.jpg']) }}" alt="" class="img-responsive"></center>
                            @else
                                <center><img src="{{ asset('images/no_image.png') }}" alt="" class="img-responsive"> </center>    
                            @endif
                        </section>
                        <section class="content-post col-sm-7">
                            <div class="title">
                                <h1><a href="{{ route('detail.post',['slug'=>$post->slug_title]) }}"> {{ $post->title }}</a></h1>
                                <span class="posted-by"><b>Ditulis Oleh</b> <a href="">{{ $post->user->name }}</a></span> > <span class="posted-by"><b>Kategori</b> <a href="">{{ $post->category->category_name}}</a></span>
                            </div>
                            <div class="body-post">
                                <p>{!! str_limit($post->body, $limit = 200, $end = '') !!} <a href="{{ route('detail.post',['slug'=>$post->slug_title]) }}">Baca Selengkapnya..</a></p>
                              
                            </div>

                            @foreach ($post->tags as $tag)
                               <span class="label label-default">{{ $tag->nama_tag }}</span>
                            @endforeach
                            <div class="info-post">
                                <span class="posted-on"><b>Ditulis Pada</b> {{ \Carbon\Carbon::parse($post->created_at)->format('d, M Y')  }}</span>
                            </div>
                            

                        </section>
                    </div>
                </div>
            @endforeach
            
            {{ $posts->links() }}
            
          </div>

        </div>
       </div>
    </div>
</div>
@endsection