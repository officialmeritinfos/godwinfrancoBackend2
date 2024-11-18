@extends('home.base')

@section('content')

    <!-- breadcrumb content begin -->
    <div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb"></ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb content end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container cointainer">
                <div class="uk-grid row">
                    <div class="uk-width-1-1 uk-flex uk-flex-center col-12">
                        <div class="uk-width-3-4 uk-text-center">
                            <h2 class="uk-margin-small-bottom">Putting our clients first <span class="in-highlight">since 2015.</span></h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove">For more than 6 years, we’ve been empowering investors by helping them take control of their financial lives.</p>
                        </div>
                    </div>
                    <div class="uk-grid uk-grid-large uk-child-width-1-3 uk-margin-medium-top row" data-uk-grid>
                        <div class="uk-flex uk-flex-left col-md-4">
                            <div class="uk-margin-right">
                                <i class="fas fa-leaf fa-lg in-icon-wrap circle primary-color"></i>
                            </div>
                            <div>
                                <h3>STEADY GROWTH</h3>
                                <p>{{$siteName}} is a safe and secured option, which ensures steady growth on your investments with daily
                                    returns on an ongoing basis with no hustle and instantly</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-left col-md-4">
                            <div class="uk-margin-right">
                                <i class="fas fa-hourglass-end fa-lg in-icon-wrap circle primary-color"></i>
                            </div>
                            <div>
                                <h3>RELIABLE SYSTEM</h3>
                                <p>{{$siteName}} is backed by team of professionals, experts and specialist of trading market providing 24/7
                                    guidance and support to the users ensuring a reliable system.</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-left col-md-4">
                            <div class="uk-margin-right">
                                <i class="fas fa-flag fa-lg in-icon-wrap circle primary-color"></i>
                            </div>
                            <div>
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
        <!-- section content begin -->
        <div class="uk-section in-offset-top-40 in-offset-bottom-20">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image" style="background-image: url({{asset('home/img/in-team-background-1.png')}});" data-uk-parallax="bgy: -100">
                            <div class="uk-card-body">
                                <div class="uk-grid uk-flex uk-flex-center">
                                    <div class="uk-width-3-4 uk-text-center">
                                        <h2>Trust the Professionals</h2>
                                        <p>We are a group of passionate, independent thinkers who never stop exploring new ways to improve trading for the self-directed investor.</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-child-width-1-2 uk-margin-medium-top" data-uk-grid>
                                    <div class="uk-flex uk-flex-left">
                                        <div class="uk-margin-right">
                                            <img class="uk-align-center " src="{{asset('home/img/in-team-1.png')}}" alt="image-team" width="300">
                                        </div>
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Chief Executive Officer</p>
                                            <h4 class="uk-margin-small-top">Cynthia Dixon</h4>

                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-left">
                                        <div class="uk-margin-right">
                                            <img class="uk-align-center " src="{{asset('home/img/in-team-2.png')}}" alt="image-team" width="300">
                                        </div>
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Executive Assistant</p>
                                            <h4 class="uk-margin-small-top">Arthur Parker</h4>

                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-left">
                                        <div class="uk-margin-right">
                                            <img class="uk-align-center " src="{{asset('home/img/in-team-3.png')}}" alt="image-team" width="300">
                                        </div>
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Marketing Specialist</p>
                                            <h4 class="uk-margin-small-top">Evelyn Mason</h4>

                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-left">
                                        <div class="uk-margin-right">
                                            <img class="uk-align-center " src="{{asset('home/img/in-team-4.png')}}" alt="image-team" width="300">
                                        </div>
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Human Resources</p>
                                            <h4 class="uk-margin-small-top">Bryan Greene</h4>

                                        </div>
                                    </div>
                                </div>
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
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-4">
                        <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-2">
                                <h4 class="uk-text-muted in-offset-bottom-10">Number speaks</h4>
                                <h1 class="uk-margin-medium-bottom">We always ready<br>for a <span class="in-highlight">challenge.</span></h1>
                                <a href="{{route('register')}}" class="uk-button uk-button-primary uk-border-rounded">Get Started<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                            </div>
                            <div class="uk-width-1-2">
                                <div class="uk-margin-large" data-uk-grid>
                                    <div class="uk-width-expand">
                                        <h3>24/7 Support</h3>
                                        <p>Our customer care service is available at all time to attend to you and also offer profitable advice on the best investment programs.</p>
                                    </div>
                                </div>
                                <div class="uk-margin-large" data-uk-grid>

                                    <div class="uk-width-expand">
                                        <h3>Secured Transactions</h3>
                                        <p>Your financial future is secured through our multiple investment packages that are suitable for every class.</p>
                                    </div>
                                </div>
                                <div class="uk-margin-large" data-uk-grid>

                                    <div class="uk-width-expand">
                                        <h3>Strong Security</h3>
                                        <p>We offer you an unbeatable interest on your investment within the shortest possible time</p>
                                    </div>
                                </div>
                                <div class="uk-margin-large" data-uk-grid>

                                    <div class="uk-width-expand">
                                        <h3>Quick Returns</h3>
                                        <p>The system runs on highly encrypted algorithms to protect and secure our user accounts. We have experienced security experts who are constantly fixing threats.</p>
                                    </div>
                                </div>
                                <div class="uk-margin-large" data-uk-grid>

                                    <div class="uk-width-expand">
                                        <h3>Our Knowledge</h3>
                                        <p>The team of technicians {{$siteName}} and the company's financial department monitor key cryptocurrency market trends. We are studying the processes of mining and search the system that will optimize costs and reduce net cost of Bitcoin.</p>
                                    </div>
                                </div>
                                <div class="uk-margin-large" data-uk-grid>

                                    <div class="uk-width-expand">
                                        <h3>Our Experience</h3>
                                        <p>Our team trades cryptocurrencies since their entry into the wide circulation in 2015, it understands the Bitcoin pricing mechanisms and monitors the main trends at the market. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>


@endsection
