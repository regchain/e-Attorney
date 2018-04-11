  <nav class="navbar navbar-primary">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a href="{{ url('/home') }}" class="navbar-bramd"><img src="{{asset('images/sus-pidsus/logo-kejaksaan-small.png')}}"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <div class="btn-group btn-xs">
          <a href="{{ route('rp1.index') }}" class="btn btn-primary"><i class="fa fa-list-ol"></i> RP-1</a>                    
          <a href="{{ route('rp2.index') }}" class="btn btn-primary"><i class="fa fa-list-ol"></i> RP-2</a>                    
          <a href="{{ route('rp3mum.index') }}" class="btn btn-primary"><i class="fa fa-list-ol"></i> RP-3Mum</a>                    
          <a href="{{ route('rp3sus.index') }}" class="btn btn-primary"><i class="fa fa-list-ol"></i> RP-3Sus</a>  
          <a href="{{ url('/obyek') }}" class="btn btn-primary"><i class="fa fa-cubes"></i> RB-1</a>  
          <a href="{{ url('/subyek') }}" class="btn btn-primary"><i class="fa fa-odnoklassniki"></i> RT</a>  
        </div>
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-database"> </i> Master Data <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('jaksa.index') }}">Data Jaksa</a></li>
            <li><a href="{{ route('pasal.index') }}">UU / Pasal</a></li>
            <li><a href="{{ route('kategori_subyek.index') }}">Kategori Subyek</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wilayah Hukum <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Indonesia</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">DKI JAKARTA</a></li>
            <li><a href="#">BALI</a></li>
            <li><a href="#">KALIMANTAN TIMUR</a></li>
          </ul>
        </li>
        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Profil</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>