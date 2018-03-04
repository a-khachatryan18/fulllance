<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fulllance</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('/images/favicon.jpg') }}">
        <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/base.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/colors.css') }}">
        <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">
    </head>
    <body>
        <header id = "stickyheader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-md-offset-0">
                        <div class="collapse navbar-collapse" id="visitor-nav">
                            <ul id = "right_nav" class="nav navbar-nav navbar-right has-right-menu">
                                @if(Request::is('how-it-works/client'))
                                    <li><a href="/how-it-works/freelancer">How it works</a></li>
                                @elseif(Request::is('how-it-works/freelancer'))
                                    <li><a href="/how-it-works/client">How it works</a></li>
                                @else
                                    <li><a href="/how-it-works/client">How it works</a></li>
                                @endif
                                <li><a href="/signin">Login</a></li>
                                <li><a href="/signup">Signup</a></li>
                            </ul>
                            <div id = "left_nav" class="nav navbar-nav navbar-left">
                                <div class = "logo">
                                    <a href="/">
                                        <img src="{{ asset('/images/fullance.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class = "search-input">
                                    <form action="" method="get">
                                        <i class="fa fa-search"></i>
                                        <input type="text" name = "search" class="form-control" placeholder="Find Freelancers">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div id="main">
            @yield('content')
        </div>

        <div id = "move_to_top">
            <span><i class="fa fa-arrow-up"></i></span>
        </div>
        {{--Footer--}}
        <footer class="page-footer">
            <div class="container">
                <div class="footer-sitemap">
                    <div class="row accordion-footer">
                        <div class="col-sm-4 col-md-4">
                            <div class="item">
                                <h4 class="text-uppercase m-b-40 title">
                                    <a>
                                        <span class="ng-scope">Company Info</span>
                                    </a>
                                </h4>
                                <ul class="list-unstyled text-short">
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Customer Stories</a></li>
                                    <li><a href="">Press</a></li>
                                    <li><a href="">Careers</a></li>
                                    <li><a href="">Fulllance Blog</a></li>
                                    <li><a href="">Terms of Service</a></li>
                                    <li><a href="">Privacy Policy</a></li>
                                    <li><a href="">Trust &amp; Safety</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4">
                            <div class="item">
                                <h4 class="text-uppercase m-b-40 title">
                                    <a>
                                        <span class="">Browse</span>
                                    </a>
                                </h4>
                                <ul class="list-unstyled text-short">
                                    <li><a href="">Freelancers by Skill</a></li>
                                    <li><a href="">Freelancers in USA</a></li>
                                    <li><a href="">Freelancers in UK</a></li>
                                    <li><a href="">Freelancers in Canada</a></li>
                                    <li><a href="">Freelancers in Australia</a></li>
                                    <li><a href="">Find Jobs</a></li>
                                    <li><a href="">Hiring Resources</a></li>
                                    <li><a href="">Jobs in USA</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="item">
                                <h4 class="text-uppercase title">
                                    <a>
                                        <span class="">Connect with us</span>
                                    </a>
                                </h4>
                                <ul class="list-unstyled text-short">
                                    <li><a href="">Contact &amp; Support</a></li>
                                    <li><a href="">API Center</a></li>
                                    <li><a href="">Mobile App</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-social">
                    <hr class="hidden-xs">
                    <div class="row ccordion-footer">
                        <div class="col-sm-7 social-links">
                            <div class="item">
                                <h3 class="text-short pull-left title">
                                    <a>
                                        <span class="">Follow us</span>
                                    </a>
                                </h3>
                                <ul class="pull-left list-inline social_wrapper">
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
                        </div>
                        <div class="col-sm-5 apps-links text-right">
                            <div class="item">
                                {{--<h3 class="text-short"><span>Download</span> mobile app</h3>--}}
                                <ul class="pull-right list-inline">
                                    <li class="apple">
                                        <a title="" target="_blank" href="">
                                            <img src="https://www.upwork.com/static/marketing/adquiro-webpack/images/icon-apple.950eb3713eb2.svg" alt="">
                                        </a>
                                    </li>
                                    <li class="android">
                                        <a title="" target="_blank" href="">
                                            <img src="https://www.upwork.com/static/marketing/adquiro-webpack/images/icon-android.7449b1f42227.svg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr class="hidden-xs">
                </div>
                <div class="page-footer">
                    <div class="container">
                        <p class="text-center copyright">© 2017-2018 Fulllance.
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <script src = "{{ asset('/js/jquery.min.js') }}"></script>
        <script src = "{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src = "{{ asset('/js/main.js') }}"></script>
    </body>
</html>
