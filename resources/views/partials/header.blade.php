{{--<nav class="navbar navbar-inverse  navbar-static-top">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}

            {{--<!-- Collapsed Hamburger -->--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">--}}
                {{--<span class="sr-only">Toggle Navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}

            {{--<!-- Branding Image -->--}}
            {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                {{--{{ config('app.name', 'QuizzBuzz') }}--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
            {{--<!-- Left Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--&nbsp;--}}
            {{--</ul>--}}

            {{--<!-- Right Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<!-- Authentication Links -->--}}
                {{--@guest--}}
                    {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                    {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                    {{--@else--}}
                        {{--<li><a href="{{ route('quizsections.index') }}">Explore</a></li>--}}
                        {{--<li><a href="{{ route('quizsections.index') }}">Catalog</a></li>--}}
                        {{--<li><a href="{{ route('quizsections.index') }}">HostQuiz</a></li>--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<ul class="dropdown-menu">--}}

                                {{--<li>--}}
                                    {{--<a href="/users/{{Auth::user()->id}}">View Profile</a>--}}
                                {{--</li>--}}

                                {{--<li>--}}
                                    {{--<a href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--Logout--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--{{ csrf_field() }}--}}
                                    {{--</form>--}}
                                {{--</li>--}}

                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--@endguest--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}



<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"> <i href="{{ url('/') }}" class="fa fa-qrcode" aria-hidden="true"></i> QuizzBuzz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                       @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('quizsections.index') }}">Explore</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('quizsections.index') }}">Catalog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('quizsections.create') }}">HostQuiz</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/users/{{Auth::user()->id}}">View Profile</a>
                                    {{--<a class="dropdown-item" href="#">Another action</a>--}}
                                    <div class="dropdown-divider"></div>
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}">--}}
                                        <a href="{{ route('logout') }}"
                                                                          onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </a>

                                </div>
                            </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
