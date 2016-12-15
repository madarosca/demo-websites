<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="nav-container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @if (Auth::guest())
      @else
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{asset('img/unnamed.png')}}" id="logo">
      </a>
      @endif
    </div>
    @if (Auth::guest())
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="{{Request::path() == 'login' ? 'active' : ''}}"><a href="/login">Login</a></li>
        <li class="{{Request::path() == 'register' ? 'active' : ''}}"><a href="/register">Register</a></li>
    @else
    <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="{{Request::path() == 'home' ? 'active' : ''}}"><a href="/home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li class="{{Request::path() == 'about' ? 'active' : ''}}"><a href="/about"><i class="fa fa-briefcase" aria-hidden="true"></i> About</a></li>
        <li class="dropdown {{Request::path() == 'profile/edit' ? 'active' : ''}}">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> My Profile<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li><a href="/profile/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="fa fa-power-off" aria-hidden="true"></i> Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="{{Request::path() == 'dashboard' ? 'active' : ''}}"><a href="/dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bar-chart" aria-hidden="true"></i> Risk categories<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="#"><i class="fa fa-object-group" aria-hidden="true"></i> Applications</a></li>
            <li><a href="#"><i class="fa fa-archive" aria-hidden="true"></i> Conduct Risk</a></li>
            <li><a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i> Credit Risk</a></li>
            <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i> Interest Rate Risk</a></li>
            <li><a href="#"><i class="fa fa-hourglass" aria-hidden="true"></i> Liquidity Risk</a></li>
            <li><a href="#"><i class="fa fa-area-chart" aria-hidden="true"></i> Market Risk</a></li>
            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Processing Risk</a></li>
            <li><a href="#"><i class="fa fa-external-link" aria-hidden="true"></i> Reference Data</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-server" aria-hidden="true"></i> Risk summary<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="#"><i class="fa fa-certificate" aria-hidden="true"></i> Products</a></li>
            <li><a href="#"><i class="fa fa-industry" aria-hidden="true"></i> Best Practices</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-book" aria-hidden="true"></i> Dictionaries<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li class="{{Request::path() == 'products/view' ? 'active' : ''}}"><a href="/products/view"><i class="fa fa-product-hunt" aria-hidden="true"></i> Products</a></li>
            <li class="{{Request::path() == 'business_components/view' ? 'active' : ''}}"><a href="/business_components/view"><i class="fa fa-cogs" aria-hidden="true"></i> Business components</a></li>
            <li class="{{Request::path() == 'risk_types/view' ? 'active' : ''}}"><a href="/risk_types/view"><i class="fa fa-th-large" aria-hidden="true"></i> Risk types</a></li>
            <li><a href="#"><i class="fa fa-list" aria-hidden="true"></i> Risk criteria</a></li>
            <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Teams</a></li>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> Processes</a></li>
            <li><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Activities</a></li>
            <li><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> Activity types</a></li>
            <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i> Summary IR</a></li>
            <li><a href="#"><i class="fa fa-map-pin" aria-hidden="true"></i> Targets</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-map" aria-hidden="true"></i> Mappings<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i> Risk trigerred</a></li>
            <li><a href="#"><i class="fa fa-sitemap" aria-hidden="true"></i> Impact performances</a></li>
          </ul>
        </li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.nav-container-fluid -->
</nav>
