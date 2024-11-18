@extends('home.base')
@section('content')
    <!-- slideshow content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-light in-slideshow uk-background-cover uk-background-top-center"
             style="background-image: url({{asset('home/img/bitbg1.gif')}});" data-uk-slideshow>
            <ul class="uk-slideshow-items">
                <li>
                    <div class="uk-container container">
                        <div class="uk-grid-medium row" data-uk-grid>
                            <div class="uk-width-1-2 col-12">
                                <div class="uk-overlay">
                                    <h2>PREMIUM CLOUD MINING INVESTMENT <br>PLATFORM</h2>
                                    <p class="uk-text-lead uk-visible">
                                        Trade forex, commodities, synthetic and stock indices from a single account
                                    </p>
                                    <div class="uk-width-1-2">
                                        <a class="btn btn-primary"
                                           href="{{route('register')}}">Register
                                            <i class="fas fa-angle-right uk-margin-small-left"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="uk-width-1-2">
                                <img class="in-slide-img" src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/img/in-liquid-slide-1.svg')}}" alt="image-slide" width="500" height="400" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-container container">
                        <div class="uk-grid-medium row" data-uk-grid>
                            <div class="uk-width-1-2 col-12">
                                <div class="uk-overlay">
                                    <h2>Multi-regulated global broker.</h2>
                                    <p class="uk-text-lead uk-visible">A trusted destination for traders worldwide, Authorised by FCA, ASIC &amp; FSCA</p>
                                    <div class="uk-width-1-2">
                                        <a class="btn btn-primary"
                                           href="{{route('login')}}">Login
                                            <i class="fas fa-angle-right uk-margin-small-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2 ">
                                <img class="in-slide-img" src="{{asset('home/images/bitbg2')}}"  alt="image-slide" width="500" height="400" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>

        </div>
    </div>
    <!-- slideshow content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-secondary in-liquid-1">
        <div class="uk-container uk-light container">
            <div class="uk-grid uk-flex uk-flex-middle col-12">
                <div class="uk-width-1-2">
                    <h2>Save time. Get <span class="in-highlight">higher return</span>. Multiply wealth.</h2>
                </div>
                <div class="uk-width-1-2">
                    <a class="btn uk-button uk-button-default uk-border-rounded uk-align-right"
                       href="{{url('about')}}">Find out more<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                </div>
            </div>
            <div class="uk-child-width-1-3 row" data-uk-grid>
                <div class="col-md-4">
                    <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container card" style="background-color:#0000FF;">
                        <div class="uk-card-media-top">
                            <img src="{{asset('home/img/in-lazy.gif')}}"
                                 data-src="{{asset('home/img/in-liquid-object-1.svg')}}"
                                 alt="sample-image" data-width data-height data-uk-img>
                        </div>
                        <div class="uk-card-body card-body">
                            <h3>STEADY GROWTH</h3>
                            <p>{{$siteName}} is a safe and secured option, which ensures steady growth on your investments with daily
                                returns on an ongoing basis with no hustle and instantly</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container card" style="background-color:#0000FF;">
                        <div class="uk-card-media-top">
                            <img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/img/in-liquid-object-2.svg')}}" alt="sample-image" data-width data-height data-uk-img>
                        </div>
                        <div class="uk-card-body card-body">
                            <h3>RELIABLE SYSTEM</h3>
                            <p>{{$siteName}} is backed by team of professionals, experts and specialist of trading market providing 24/7
                                guidance and support to the users ensuring a reliable system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container card" style="background-color:#0000FF;">
                        <div class="uk-card-media-top">
                            <img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/img/in-liquid-object-3.svg')}}" alt="sample-image" data-width data-height data-uk-img>
                        </div>
                        <div class="uk-card-body card-body ">
                            <h3>MAXIMUM EFFICIENCY</h3>
                            <p>The most advanced intelligent monitoring technology with high level of professionalism of
                                {{$siteName}} provides safe returns on your investments ensuring maximum efficiency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                {
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500"
                },
                {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "Nasdaq 100"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "BTC/USD"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "ETH/USD"
                }
            ],
                "showSymbolLogo": true,
                "colorTheme": "light",
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
    <!-- section content begin -->
    <div class="uk-section in-liquid-2">
        <div class="uk-container container">
            <div class="row">
                <div class="uk-flex col-md-6">
                    <div class="">
                        <img src="{{asset('home/img/in-lazy.gif')}}"
                             data-src="{{asset('home/img/in-liquid-icon-1.svg')}}"
                             alt="sample-icon" width="128" height="128" data-uk-img>
                    </div>
                    <div>
                        <h3>Our Mission</h3>
                        <p>The goal of {{$siteName}} is to provide its users a unique, safe and secured platform for
                            their investments in the field of crypto currency. This is why we have used
                            cutting-edge platform with extensive infrastructure intended to make things more
                            convenient.</p>
                        <a class="uk-button uk-button-text" href="{{url('about')}}">Learn more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                    </div>
                </div>
                <div class="uk-flex col-md-6">
                    <div class="">
                        <img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/img/in-liquid-icon-2.svg')}}" alt="sample-icon" width="128" height="128" data-uk-img>
                    </div>
                    <div>
                        <h3>Our Vision</h3>
                        <p>At {{$siteName}}, we commit to provide services we render to our clients. This is why we always try to expand our technical
                            capabilities and financial turnover with the help
                            of ASIC miners having hands-on experience guarantees for gaining profit by generating crypto currencies.

                            {{$siteName}} envisions to widen the pool of investors by engaging in effective strategic mining and trading of crypto currencies.</p>
                        <a class="uk-button uk-button-text" href="{{url('about')}}">Learn more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-md-5 mt-4 mx-auto" style="margin-top: 5px;">
                <video width="400" poster="{{asset('home/images/videobg.jpg')}}" controls>
                    <source src="{{asset('home/images/crypto.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-6 uk-margin-medium-top">
                    <div class="uk-card uk-card-default uk-card-body uk-background-contain uk-background-top-left" style="background-image: url({{asset('home/img/in-liquid-card-bg.png')}});" data-uk-img>
                        <div class="uk-grid uk-child-width-1-3 uk-child-width-1-3 uk-text-center" data-uk-grid>
                            <div class="uk-width-1-1">
                                <h4><span>Simple steps to start trade.</span></h4>
                            </div>
                            <div>
                                <span class="in-icon-wrap circle">1</span>
                                <p>Register account</p>
                            </div>
                            <div>
                                <span class="in-icon-wrap circle">2</span>
                                <p>Fund your account</p>
                            </div>
                            <div>
                                <span class="in-icon-wrap circle">3</span>
                                <p>Start your investment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bottom-grids-->
    <section>
        <div class="uk-text-center">
            <h4>Investment Plans</h4>
        </div><br><br>
        <div class="container">
            <div class="uk-child-width-1-3 row" data-uk-grid>
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 mx-auto">
                        <div style="padding: 15px" class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-media-top">
                                <img src="{{asset('home/img/icon-vision.png')}}"
                                     data-src="{{asset('home/img/icon-vision.png')}}" alt="sample-image"
                                     data-width data-height data-uk-img>
                            </div>
                            <div class="uk-card-body">
                                <h3>{{$package->name}}</h3>
                                <p>{{$package->numberOfReturns*$package->roi}}%<span> AFTER {{$package->Duration}}</span></p>
                                <div class="list mb-4">
                                    <div class="list-info" >
                                        <h4>Minimum Deposit: ${{number_format($package->minAmount,2)}}</h4>
                                    </div><br>
                                    <div class="list-info">
                                        <h4>Maximum Deposit:
                                            @if($package->isUnlimited !=1)
                                                ${{number_format($package->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif
                                        </h4>
                                    </div><br>
                                    <div class="list-info">
                                        <h4>Profit: {{$package->roi}}%</h4>
                                    </div><br>
                                    <div class="list-info">
                                        <h4>Referral Bonus: {{$package->referral}}%</h4>
                                    </div><br>
                                    <div class="list-info">
                                        <h4>Duration: {{$package->Duration}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- section content end -->



    <section id="download" class="video-promo ptb-100" style="margin-top: 25px">
        <div class="container">
            <!-- //bottom-grids-->
            <div class="uk-text-center">
                <h4>Market View</h4>
            </div><br><br>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6" style="height: 500px;">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": 490,
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
                <div class="col-md-5" style="height: 500px;">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_ea2dc"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.widget(
                                {
                                    "width": "100%",
                                    "height": 490,
                                    "symbol": "NASDAQ:AAPL",
                                    "interval": "D",
                                    "timezone": "Etc/UTC",
                                    "theme": "light",
                                    "style": "1",
                                    "locale": "en",
                                    "toolbar_bg": "#f1f3f6",
                                    "enable_publishing": false,
                                    "allow_symbol_change": true,
                                    "container_id": "tradingview_ea2dc"
                                }
                            );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container container">
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-2 uk-child-width-1-3 in-card-10 row" data-uk-grid>
                <div class="uk-width-1-1 col-12" >
                    <h2 class="uk-margin-remove">A <span class="in-highlight">relationship</span> on your terms.</h2>
                    <p class="uk-text-lead uk-text-muted uk-margin-remove">Work with us the way you want.</p>
                    <p>Some believe you must choose between an online broker and a wealth management firm. At {{$siteName}}, you don’t need to compromise. Whether you invest on your own, with an advisor, or a little of both — we can support you.</p>
                </div>
                <div class="col-md-4">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light " style="background-color:#50C878;">
                        <i class="fas fa-seedling fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{route('register')}}">Investing<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>A wide selection of investment product to help build diversified portfolio</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light " style="background-color:#5D3FD3;">
                        <i class="fas fa-chart-bar fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{route('register')}}">Trading<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Powerful trading tools, resources, insight and support</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light " style="background-color:#702963;">
                        <i class="fas fa-chart-pie fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{route('register')}}">Wealth management<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Dedicated financial consultant to help reach your own specific goals</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light" style="background-color:#0000FF;">
                        <i class="fas fa-chalkboard-teacher fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{route('register')}}">Investment advisory<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>A wide selection of investing strategies from seasoned portfolio managers</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light" style="background-color:#5D3FD3;">
                        <i class="fas fa-funnel-dollar fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{route('register')}}">Smart portfolio<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>A revolutionary, fully-automated investmend advisory services</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light" style="background-color:#0437F2;">
                        <i class="fas fa-handshake fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{route('register')}}">Mutual fund advisor<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Specialized guidance from independent local advisor for hight-net-worth investors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section in-liquid-4">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-1-2">
                    <h2>Payment methods.</h2>
                </div>
            </div>

            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-6 uk-inline">
                    <div class="uk-grid-medium uk-child-width-1-3 uk-child-width-1-4 uk-text-center uk-margin-medium-top" data-uk-grid>
                        <div>
                            <img src="{{asset('home/img/BTC.png')}}"
                                 data-src="{{asset('home/img/BTC.png')}}" alt="wave-award"  data-uk-img
                                 style="width: 100px;">
                        </div>
                        <div>
                            <img src="{{asset('home/img/ETH.png')}}"
                                 data-src="{{asset('home/img/ETH.png')}}" alt="wave-award"  data-uk-img
                                 style="width: 100px;">
                        </div>
                        <div>
                            <img src="{{asset('home/img/USDT.png')}}"
                                 data-src="{{asset('home/img/USDT.png')}}" alt="wave-award"  data-uk-img
                                 style="width: 100px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-card-16">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-grid uk-flex-middle row" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-expand col-12">
                                <h3>Get Started and explore our investment opportunities</h3>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-primary uk-border-rounded" href="{{route('register')}}">Open an Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
@endsection
