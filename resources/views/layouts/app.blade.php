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
                    @if(Auth::check())
                        <ul class="nav navbar-nav navbar-left">
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Find work</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="">Find Work</a></li>
                                    <li><a href="">Saved Jobs</a></li>
                                    <li><a href="">Proposals</a></li>
                                    <li><a href="">Profile</a></li>
                                    <li><a href="">My Stats</a></li>
                                    <li><a href="">Tests</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">My jobs</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="">My Jobs</a></li>
                                    <li><a href="">All Contracts</a></li>
                                    <li><a href="">Work </a></li>
                                    <li><a href="">Work Diary</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Reports</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="">Overview</a></li>
                                    <li><a href="">Timesheet Details</a></li>
                                    <li><a href="">Time Analize</a></li>
                                    <li><a href="">Earnings by Client</a></li>
                                    <li><a href="">Lifetime Billings by Client</a></li>
                                    <li><a href="">Weekly Timesheet</a></li>
                                    <li><a href="">Timelogs</a></li>
                                    <li><a href="">Connects History</a></li>
                                    <li><a href="">Transaction History</a></li>
                                    <li><a href="">Certificate of Earnings</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="">Messages</a>
                            </li>

                        </ul>
                    @endif
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
                            <li class="search-input">
                                <form action="" method="get">
                                    <i class="fa fa-search"></i>
                                    <input type="text" name="search" class="form-control" placeholder="Find Jobs">
                                </form>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-question"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="">Help and Support</a></li>
                                    <li><a href="">Community and Forums</a></li>
                                    <li><a href="">Disputes</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="">Notification 1</a></li>
                                    <li><a href="">Notification 2</a></li>
                                    <li><a href="">Notification 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown profile_section">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <img class="profile_img" src="{{ (!empty(Auth::user()->profile_img)) ? asset('uploads/').Auth::user()->profile_img : asset('images/avatar.png')  }}" alt="">
                                    <span>
                                        {{ Auth::user()->first_name. ' ' . Auth::user()->last_name }}
                                    </span>
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <div class="img_box">
                                                <img class="profile_img" src="{{ (!empty(Auth::user()->profile_img)) ? asset('uploads/').Auth::user()->profile_img : asset('images/avatar.png')  }}" alt="">
                                            </div>
                                            <div class="user_info">
                                                <p>
                                                    {{ Auth::user()->first_name. ' ' . Auth::user()->last_name }}
                                                </p>
                                                <p class="user_role">{{ Auth::user()->role }}</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-cog"></i><span class="p-l-10">Settings</span></a>
                                    </li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i><span class="p-l-10">Logout</span></a></li>
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
            @if(Auth::check())
                <div class="container m-t-70">
                    <div class="row footer_menu">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <ul>
                                <li><a href="">About us</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Feedback</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <ul>
                                <li><a href="">Community</a></li>
                                <li><a href="">Trust & Safety</a></li>
                                <li><a href="">Help & Support</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <ul>
                                <li><a href="">Terms of Service</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Desktop App</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <ul>
                                <li><a href="">Cookie Policy</a></li>
                                <li><a href="">Mobile</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="social text-center m-t-50">
                        <ul class="list-inline social_wrapper">
                            <li class="gplus">
                                <a title="" target="_blank" href="">
                                    <i class = "fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="facebook">
                                <a title="" target="_blank" href="">
                                    <i class = "fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a title="" target="_blank" href="">
                                    <i class = "fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="twitter">
                                <a title="" target="_blank" href="">
                                    <i class = "fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="youtube">
                                <a title="" target="_blank" href="">
                                    <i class = "fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a title="" target="_blank" href="">
                                    <i class = "fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center m-t-30 m-b-30">
                        <p class="copyright">© 2017-2018 Fulllance.</p>
                    </div>
                </div>
            @else
                <div class="text-center">
                    <p class="copyright">© 2017-2018 Fulllance.</p>
                    <p class="">
                        <a href="/terms">Terms of Service</a>
                    </p>
                    <p class="">
                        <a href="/privacy">Privacy Policy</a>
                    </p>
                </div>
            @endif
        </footer>
        <script src = "{{ asset('/js/jquery.min.js') }}"></script>
        <script src = "{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src = "{{ asset('/js/select2.min.js') }}"></script>
        <script src = "{{ asset('/js/auth.js') }}"></script>
        <script src = "{{ asset('/js/jquery.validate.min.js') }}"></script>
    </body>
</html>
