<header>
    <nav class="navbar navbar-expand-lg navbar-light header py-0">
        <div class="container px-0 pt-10">
            <a class="navbar-brand" href="/">
                <img src="{{asset('assets/client/images/logo.png')}}" alt="logo">
            </a>
            <li class="nav-item">	<a class="nav-link" style='background-color:aliceblue' href="{{ url('about') }}">Contacats</a></li>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">	<span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto home-header">
                    
                    
                   
                    
                    <li class="nav-item">	<a class="nav-link" href="{{ url('architect/devis') }}"> DEMANDER UN DEVIS</a></li>
                    <li class="nav-item">	<a class="nav-link" href="{{ url('architect/services') }}">SERVICES</a></li>
                    <li class="nav-item">	<a class="nav-link" href="{{ url('architect/opportunite') }}">OPPORTUNITÉS</a></li>
                    <li class="nav-item">	<a class="nav-link" href="{{ url('architect/opportunite') }}">DÉCOUVRER ET MAGAZINER</a></li>
                    <!--  <li class="nav-item dropdown megamenu">	<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Comment ça Marche</a>
                        <div id="navbarDropdown" class="dropdown-menu mega-dropdown-menu container row float-left" aria-labelledby="navbarDropdown">
                          
                           
                          <ul class="col-xs-12 col-sm-3 float-left p-0" role="menu">
                                <li><a class="dropdown-item" href="services.html">Services</a>
                                </li>
                                <li><a class="dropdown-item" href="ourteam.html">Our Team</a>
                                </li>
                                <li><a class="dropdown-item" href="package.html">Package</a>
                                </li>
                            </ul>
                            <ul class="col-xs-12 col-sm-3 float-left p-0" role="menu">
                                <li><a class="dropdown-item" href="blog.html">Blog Left-Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="ourteam.html">Our Team</a>
                                </li>
                                <li><a class="dropdown-item" href="contactus.html">Contactus</a>
                                </li>
                           
                        </div>
                    </li> 
                    <li class="nav-item dropdown">	<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">PORTFOLIO</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="portfolio.html">Portfolio</a>
                            </li>
                            <li><a href="portfolio-detail.html">Portfolio Detail</a>
                            </li>
                            <li><a href="portfolio-grid.html">Portfolio Grid</a>
                            </li>
                        </ul>
                    </li></ul>-->
                   
                            @guest <li class="nav-item dropdown">	<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">CONNEXION</a>
                                <ul class="dropdown-menu" role="menu">
                                    @if (Route::has('login'))
                                        <li>
                                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li>
                                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                </ul>
                                </li>
                                    @endif
                                    @else
                                    <li class="nav-item dropdown">	<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">   {{ Auth::user()->name }}</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                            </li>
                                        </ul>
                                    </li>
                        @endguest
                           
                        
                
            </div>
        </div>
    </nav>
</header>
<!--end header -->