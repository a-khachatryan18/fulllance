<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $data['title'] }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('/images/favicon.jpg') }}">
        <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/base.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/colors.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">

    </head>
    <body id="app-layout">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <div class = "logo"><img src="{{ asset('/images/fullance.jpg') }}" alt=""></div>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            @if(url()->current() === 'signup')
                                <p class="navbar-text text-right">
                                    <span class="hidden-xs">Already have an account?</span>
                                    <strong class="hidden-lg hidden-md hidden-sm visible-xs-inline-block p-md-right">Create account</strong>
                                    <a href="/signin" target="_self">
                                        Log In
                                    </a>
                                </p>
                            @endif
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        {{--Footer--}}
        <footer class="app-footer">
            <div class="text-center">
                <p class="copyright">© 2017-2018 Fulllance.</p>
                <p class="">
                    <a href="/terms">Terms of Service</a>
                </p>
                <p class="">
                    <a href="/privacy">Privacy Policy</a>
                </p>
            </div>
        </footer>
        <script src = "{{ asset('/js/jquery.min.js') }}"></script>
        <script src = "{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src = "{{ asset('/js/select2.min.js') }}"></script>
        <script src = "{{ asset('/js/auth.js') }}"></script>
        <script src = "{{ asset('/js/jquery.validate.min.js') }}"></script>
    </body>
</html>
