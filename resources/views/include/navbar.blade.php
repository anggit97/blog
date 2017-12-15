<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Anggit Prayogo.com</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
        
        <li class="{{ Route::currentRouteNamed('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}" >Blog</a></li>
        
      @if(Auth::check())
      <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}" >Dashboard</a></li>
      <li><a href="{{ route('about') }}" >About</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> {{ Auth::user()->name }}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('account',['username'=>Auth::user()->username]) }}"><i class="fa fa-user"></i> Account</a></li>
          <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </li>
      {{-- <li><a href="{{ route('logout') }}">Logout</a></li> --}}
      @else
      <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a href="{{ route('about') }}">Home</a></li>
      
      <li class="{{ Route::currentRouteNamed('login') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
      <li class="{{ Route::currentRouteNamed('daftar') ? 'active' : '' }}"><a href="{{ route('daftar') }}">Daftar</a></li>
      @endif
      
      
    </ul>
  </div>
</nav>


<div style="margin-bottom: 80px;"></div>

<script>
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('nav').outerHeight();

  $(window).scroll(function(event){
      didScroll = true;
  });

  setInterval(function() {
      if (didScroll) {
          hasScrolled();
          didScroll = false;
      }
  }, 250);

  function hasScrolled() {
      var st = $(this).scrollTop();
      
      // Make sure they scroll more than delta
      if(Math.abs(lastScrollTop - st) <= delta)
          return;
      
      // If they scrolled down and are past the navbar, add class .nav-up.
      // This is necessary so you never see what is "behind" the navbar.
      if (st > lastScrollTop && st > navbarHeight){
          // Scroll Down
          $('nav').removeClass('nav-down').addClass('nav-up');
      } else {
          // Scroll Up
          if(st + $(window).height() < $(document).height()) {
              $('nav').removeClass('nav-up').addClass('nav-down');
          }
      }
      
      lastScrollTop = st;
  }
</script>

<style>
  .nav-up {
      top: -80px;
      transition: .5s ease;
  }
  .nav-down {
      transition: .5s ease;
  }
</style>