<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Blockcahin company">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="{{$siteName}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5" />
    <!-- Site Properties -->
    <title>{{$pageName}} | {{$siteName}} | Bitcoin Investment | Cryptocurrency Investment</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{asset('home/js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{asset('home/css/vendors/uikit.min.css')}}" as="style">
    <link rel="preload" href="{{asset('home/css/style.css')}}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{asset('home/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('home/fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{asset('home/fonts/inter-v2-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('home/fonts/inter-v2-latin-500.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('home/fonts/inter-v2-latin-700.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="{{asset('home/images/'.$web->logo)}}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{asset('home/images/'.$web->logo)}}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('home/css/vendors/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"--}}
    {{--          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">--}}
    <link href="{{asset('dashboard/user/css/bootstrap.min.css')}}" rel="stylesheet">
</head>

<body>
{{--<!-- preloader begin -->--}}
{{--<div class="in-loader">--}}
{{--    <div></div>--}}
{{--    <div></div>--}}
{{--    <div></div>--}}
{{--</div>--}}
{{--<!-- preloader end -->--}}

<header>
    <!-- header content begin -->
    <div class="uk-section uk-padding-remove-vertical in-header-inner uk-background-cover uk-background-top-center" style="background-image: url({{asset('home/img/in-liquid-slide-bg.png')}});">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <!-- logo begin -->
                        <a class="uk-logo" href="{{url('/')}}">
                            <img src="{{asset('home/images/'.$web->logo)}}"
                                 data-src="{{asset('home/images/'.$web->logo)}}"
                                 alt="logo" style="width:100px;" data-uk-img>
                        </a>
                        <!-- logo end -->
                        <!-- navigation begin -->
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">Company<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="{{url('about')}}">About</a></li>
                                        <li><a href="{{url('services')}}">Services</a></li>
                                        <li><a href="{{url('legal')}}">Legal Information</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Resources<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="{{url('contact')}}">Help Center</a></li>
                                        <li><a href="{{url('faq')}}">FAQ's</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!-- navigation end -->
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <a href="{{route('register')}}" class="uk-button uk-button-primary uk-border-rounded">
                            Create Account
                        </a>
                        <a href="{{route('login')}}" class="uk-button uk-button-text">
                            <i class="fas fa-user-circle"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- header content end -->
</header>

@yield('content')

<!-- footer  section start  -->
<footer>
    <!-- footer content begin -->
    <div class="uk-section uk-section-secondary in-footer-feature uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex">
                <div class="uk-width-5-6">
                    <div class="uk-grid row" data-uk-grid>
                        <div class="uk-flex uk-flex-middle col-md-4">
                            <div class="uk-margin-right">
                                <i class="fas fa-history in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">25 years of Excellence</h6>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle col-md-4 ">
                            <div class="uk-margin-right">
                                <i class="fas fa-trophy in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">8+ Global Awards</h6>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle col-md-4 ">
                            <div class="uk-margin-right">
                                <i class="fas fa-phone-alt in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">24/7 Customer Support</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-background-secondary uk-light">
        <div class="uk-container uk-text-small">
            <div class="uk-child-width-1-2" data-uk-grid>
                <div class="in-footer-logo">
                    <img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/img/in-logo-1.svg')}}" alt="logo" width="127" height="27" data-uk-img>
                </div>
                <div class="uk-flex uk-flex-right">
                    <div class="in-footer-socials">
                        <a href="#"><i class="fab fa-telegram-plane"></i></a>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-1-2 uk-child-width-1-4 uk-margin-large-top" data-uk-grid>
                <div>
                    <h5>Company</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('services')}}">Services</a></li>
                        <li><a href="{{url('legal')}}">Legal Information</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Help</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{url('contact')}}">Help Center</a></li>
                        <li><a href="{{url('faqs')}}">FAQ's</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Account</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-grid uk-margin-large-top">
                <div class="uk-width-1-1">
                    <p class="uk-heading-line uk-margin-large-bottom"><span>Copyright ©2021 {{$siteName}} LTD. All Rights Reserved.</span></p>
                    <p class="in-trading-risk">Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content end -->
    <!-- totop begin -->
    <div class="uk-visible">
        <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
    </div>
    <!-- totop end -->
</footer>
</script>
<!-- end popup massage -->
<div style="position: fixed; left: 0; bottom: 0; z-index: 1; width: 100%;">
    <div style="width: 100%; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px;">
        <div style="height:40px;">
            <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=light&amp;pref_coin_id=1505&amp;invert_hover=" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;">
            </iframe>
        </div>
    </div>
</div>
<!-- Javascript -->
<script src="{{asset('home/js/vendors/uikit.min.js')}}"></script>
<script src="{{asset('home/js/vendors/blockit.min.js')}}"></script>
<script src="{{asset('home/js/config-theme.js')}}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{asset('dashboard/user/js/bootstrap.bundle.min.js')}}"></script>
<!--countdown js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function showTime(){
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "AM";

        if(h === 0){
            h = 12;
        }

        if(h > 12){
            h = h - 12;
            session = "PM";
        }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + ":" + m + ":" + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;

        setTimeout(showTime, 1000);

    }

    showTime();
</script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script>
<script type="text/javascript">
    var listCountries = ['Germany', 'South Africa', 'Spain', 'Russia', 'Italy', 'South Africa',
        'Italy', 'South Africa', 'United States', 'Egypt', 'Kenya', 'Uganda',
        'South Africa', 'Angola', 'Ghana', 'United Kingdom', 'Senegal',
        "Togo","Seychelles","United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy",'Kenya', 'Uganda',
        'South Africa', 'Angola','Tanzania', 'Tanzania',
        'Tanzania', 'Tanzania',"Kenya","Kenya","Kenya",
    ];
    var listPlans = ['$500','$50','$1,000','$100','$200','$3000','$400', '$360',
        '$700', '$60',"$500","$300","$1,000","$128"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '100f1f1a7bd9193508ba621dd99312b4a3b300c9';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</body>
</html>
