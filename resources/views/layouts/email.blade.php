<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fulllance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/images/favicon.jpg') }}">
    <style>
        p,h2{
            color: #333333;
        }
        a{
            color: #5bbc2e !important;
        }
    </style>
</head>
<body>
<header id = "mail_header" style = "background: #cccccc; padding: 30px 0px;">
    <img src="http://fulllance.loc/images/fullance.jpg" alt="">
</header>
<div id = "mail_wrapper" style="padding: 30px 20px 50px 20px">
    @yield('content')
</div>
<footer id = "email_footer" style = "background: #cccccc; padding: 30px 0px; text-align: center">
    <p>Download our mobile app on
        <a href="#" target = "_blank">iPhone</a> or
        <a href="#" target="_blank">Android</a>
    </p>
    <div class="footer_social">
        <ul class="social_wrapper" style="list-style: none;">
            <li class="gplus">
                <a title="" target="_blank" href="">
                    <img src="{{ asset('images/google.png') }}" alt="">
                </a>
            </li>
            <li class="facebook">
                <a title="" target="_blank" href="">
                    <img src="{{ asset('images/facebook.png') }}" alt="">
                </a>
            </li>
            <li class="linkedin">
                <a title="" target="_blank" href="">
                    <img src="{{ asset('images/linkedin.png') }}" alt="">
                </a>
            </li>
            <li class="twitter">
                <a title="" target="_blank" href="">
                    <img src="{{ asset('images/twitter.png') }}" alt="">
                </a>
            </li>
            <li class="youtube">
                <a title="" target="_blank" href="">
                    <img src="{{ asset('images/youtube.png') }}" alt="">
                </a>
            </li>
            <li class="instagram">
                <a title="" target="_blank" href="">
                    <img src="{{ asset('images/instagram.png') }}" alt="">
                </a>
            </li>
        </ul>
    </div>
    <p class="footer_links">
        <a href="{{ url('privacy') }}" target="_blank">Privacy Policy</a> |
        <a href="{{ url('support') }}" target="_blank">Contact Support</a>
    </p>
    <p class="address">Yerevan, Armenia</p>
    <p class="copyright">© 2018 Fulllance</p>
</footer>
<script src = "{{ asset('/js/jquery.min.js') }}"></script>
<script src = "{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>