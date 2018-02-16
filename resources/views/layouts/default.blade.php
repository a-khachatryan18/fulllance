<!doctype html>
<html>
    <head>
        <link rel="icon" href="{{ asset('/images/favicon.jpg') }}">
        <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/base.css') }}">
        <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">
    </head>
    <body>
        <div class="container">

            <header class="row">
                <div class="col-sm-12 col-md-12 col-md-offset-0">
                    <div class="collapse navbar-collapse" id="visitor-nav">
                        <ul id = "right_nav" class="nav navbar-nav navbar-right has-right-menu">
                            <li><a href="">How it works</a></li>
                            <li><a href="">Login</a></li>
                            <li><a href="">Signup</a></li>
                        </ul>
                        <div id = "left_nav" class="nav navbar-nav navbar-left">
                            <div class = "logo"><img src="{{ asset('/images/fullance.jpg') }}" alt=""></div>
                            <div class = "search-input">
                                <form action="">
                                    <input type="text" name = "search" class="form-control" placeholder="Find Freelancers">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <div id="main">

                @yield('content')

            </div>

        <footer class="row">

            </footer>


        {{--Footer--}}
        <section class="page-footer p-t-60 p-b-0">
            <div class="container">
                <div class="footer-sitemap">
                    <div class="row ng-isolate-scope accordion-footer">
                        <div class="col-sm-4 col-md-offset-1 col-md-3">
                            <div class="item ng-scope">
                                <h4 class="text-uppercase m-b-40 title">
                                    <a>
                                        <span class="ng-scope">Company Info</span>
                                    </a>
                                </h4>
                                <ul class="list-unstyled text-short">
                                    <li><a href="/about/">About Us</a></li>
                                    <li><a href="/i/stories/">Customer Stories</a></li>
                                    <li><a href="/press/">Press</a></li>
                                    <li><a href="/about/careers/">Careers</a></li>
                                    <li><a href="/blog/">Upwork Blog</a></li>
                                    <li><a href="/legal/terms/">Terms of Service</a></li>
                                    <li><a href="/legal/privacy/">Privacy Policy</a></li>
                                    <li><a href="/i/trust-safety-mission/">Trust &amp; Safety</a></li>
                                    <li><a target="_blank" href="/hiring/">Hiring Headquarters</a></li>
                                    <li><a target="_blank" href="/press/quarterly-skills-index/">Quarterly Skills Index</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-offset-1 col-md-3 ng-scope">
                            <div class="item ng-scope">
                                <h4 class="text-uppercase m-b-40 title">
                                    <a ng-click="toggle()" ng-href="" ng-transclude="" ui-accordion-item-toggle="">
                                        <span class="ng-scope">Browse</span>
                                    </a>
                                </h4>
                                <ul class="list-unstyled text-short">
                                    <li><a href="/i/freelancer-categories/">Freelancers by Skill</a></li>
                                    <li><a href="/local/united-states/">Freelancers in USA</a></li>
                                    <li><a href="/local/united-kingdom/">Freelancers in UK</a></li>
                                    <li><a href="/local/canada/">Freelancers in Canada</a></li>
                                    <li><a href="/local/australia/">Freelancers in Australia</a></li>
                                    <li><a href="/i/job-categories/">Find Jobs</a></li>
                                    <li><a href="/i/hiring-guides/">Hiring Resources</a></li>
                                    <li><a href="/freelance-jobs/united-states/">Jobs in USA</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-offset-1 col-md-3">

                            <div class="item ng-scope">
                                <h4 class="text-uppercase m-b-40 title">
                                    <a>
                                        <span class="ng-scope">Connect with us</span>
                                    </a>
                                </h4>
                                <ul class="list-unstyled text-short">
                                    <li><a href="https://support.upwork.com/home">Contact &amp; Support</a></li>
                                    <li><a href="https://developers.upwork.com/">API Center</a></li>
                                    <li><a href="/i/mobile/">Mobile App</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-social">
                    <hr class="hidden-xs">
                    <div class="row m-y-40 ng-isolate-scope accordion-footer">
                        <div class="col-sm-7 social-links">
                            <div class="item ng-scope">
                                <h3 class="text-short pull-left title">
                                    <a>
                                        <span class="ng-scope">Follow us</span>
                                    </a>
                                </h3>
                                <ul class="pull-left list-inline social_wrapper">
                                    <li class="gplus">
                                        <a title="Add Upwork to Google+ circles" target="_blank" href="https://plus.google.com/107040851368295259701">
                                            <i class = "fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="facebook">
                                        <a title="Visit Upwork on Facebook" target="_blank" href="https://www.facebook.com/upwork">
                                            <i class = "fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a title="Read Upwork company news on LinkedIn" target="_blank" href="https://www.linkedin.com/company/upwork">
                                            <i class = "fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a title="Follow @Upwork on Twitter" target="_blank" href="https://twitter.com/Upwork">
                                            <i class = "fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a title="Watch Upwork videos on YouTube" target="_blank" href="https://www.youtube.com/channel/UCvxGFOnwUBDHHcxuPqhe4CQ">
                                            <i class = "fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a title="Follow Upwork on Instagram" target="_blank" href="https://www.instagram.com/upworkinc/">
                                            <i class = "fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5 apps-links text-right">
                            <div class="item ng-scope">
                                {{--<h3 class="text-short"><span>Download</span> mobile app</h3>--}}
                                <ul class="pull-right list-inline">
                                    <li class="apple">
                                        <a title="Download Upwork app from Itunes" target="_blank" href="https://itunes.apple.com/us/app/upwork-messenger/id944344799?mt=8">
                                            <img src="//www.upwork.com/static/marketing/adquiro-webpack/images/icon-apple.950eb3713eb2.svg" alt="">
                                        </a>
                                    </li>
                                    <li class="android">
                                        <a title="Download Upwork app from Google Play" target="_blank" href="https://play.google.com/store/apps/details?id=com.upwork.android&amp;hl=en">
                                            <img src="//www.upwork.com/static/marketing/adquiro-webpack/images/icon-android.7449b1f42227.svg" alt="">
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
        </section>

        <script src = "{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
