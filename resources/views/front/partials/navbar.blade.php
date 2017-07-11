<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('front.home') }}" style="color: #FCDD44">@yield('page-title')</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="{{ route('front.home') }}" class="{{ Request::is('/') ? 'active':'' }}">
                <i class="fa fa-home" aria-hidden="true"></i> Beranda
            </a>
           </li>
          <li>
            <a href="{{ route('front.about') }}" class="{{ Request::is('*about') ? 'active':'' }}">
                <i class="fa fa-info" aria-hidden="true"></i> Tentang
            </a>
          </li>
          <li>
            <a href="{{ route('front.tours') }}" class="{{ Request::is('*tours') ? 'active':'' }}">
                <i class="fa fa-question-circle" aria-hidden="true"></i> Bantuan
            </a>
          </li>
          <li>
            <a href="{{ route('front.contact') }}" class="{{ Request::is('*contact') ? 'active':'' }}">
                <i class="fa fa-map" aria-hidden="true"></i> Peta
            </a>
          </li>
          <li class="dropdown">
                <a href="{{ route('front.basket.index') }}">
                    <?php $basket = json_decode(request()->cookie('basket')); ?>
                    @if(count($basket))
                        <span class="badge">{{ count($basket) }}</span>
                    @endif
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                </a>
        </li>
          @if(Auth::check())
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-user"></span>
                    {{ Auth::user()->name }}
                   <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                      <a href="{{ route('front.transactions.histories') }}">
                        <i class="fa fa-money" aria-hidden="true"></i> Transaksi
                      </a>
                  </li>
                  <li>
                      <a href="#" onclick="$('#logout').submit()">
                        <span class="glyphicon glyphicon-off"></span>
                          Logout
                          <form action="{{ route('logout') }}" id="logout" method="POST">
                             {{ csrf_field() }}
                          </form>
                      </a>
                  </li>
                </ul>
              </li>
            @else
              <li>
                <a href="{{ route('login') }}" class="{{ Request::is('*login') ? 'active':'' }}">
                    Daftar
                </a>
              </li>
            @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
