<nav class="blue">
    <div class="nav-wrapper">
        <div class="container">
      <a href="{{ url('/') }}" class="brand-logo">ReactLara</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        @guest
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
        @else
        <li><a href="{{ url('/home') }}">Discussions</a></li>
        <li><a href="{{ url('/create/discussion') }}">Create Discussion</a></li>

      <li><a href="{{ url('/logout') }}">Logout</a></li>

        @endguest
      
      </ul>
        </div>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
      @guest
      <li><a href="{{ url('/login') }}">Login</a></li>
      <li><a href="{{ url('/register') }}">Register</a></li>
      @else
      <li><a href="{{ url('/home') }}">Discussions</a></li>
      <li><a href="{{ url('/create/discussion') }}">Create Discussion</a></li>

    <li><a href="{{ url('/logout') }}">Logout</a></li>

      @endguest
  </ul>


  @if (Session::has('unauth'))
  <div class="container">
  <div class="red center white-text" style="padding:5px; margin:20px;">
    {{ Session::get('unauth') }}
  </div>
  </div>
  @else
      
  @endif