@extends('home.base')

@section('content')
    <!-- START SECTION BANNER -->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('{{asset('home/img/header-bg-5.jpg')}}')no-repeat center center / cover">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">{{$pageName}}</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item active">{{$siteName}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Investment Plans</h2>
                        <p class="lead">We understand the needs of our customers very much that our investment plans covers the widest range of benefits.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-lg-4 col-md mb-4">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-4"><h5>{{$package->name}}</h5>
                                <span class="badge badge-success">Investment</span></div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">
                                    <p class="pricing-rate">{{$package->roi}} <sup>%</sup>
                                        <span>{{$option->getReturnType($package->returnType)}} for {{$package->Duration}}</span>
                                    </p>

                                </div>
                            </div>
                            <div class="card-body bg-transparent affix text-white">
                                <ul class="list-unstyled text-left text-sm mb-4 pricing-feature-list">
                                    <li>
                                        <span class="ti-check-box mr-2 color-secondary"></span>
                                        <span>Min</span><b class="float-right">${{number_format($package->minAmount,2)}}</b>
                                    </li>
                                    <li>
                                        <span class="ti-check-box mr-2 color-secondary"></span>
                                        <span>Max</span><b class="float-right">
                                            @if($package->isUnlimited !=1)
                                                ${{number_format($package->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif
                                        </b>
                                    </li>
                                    <li>
                                        <span class="ti-check-box mr-2 color-secondary"></span>
                                        <span>Profit</span><b class="float-right">
                                            {{$package->numberOfReturns*$package->roi}}%
                                        </b>
                                    </li>

                                    <li>
                                        <span class="ti-check-box mr-2 color-secondary"></span>
                                        <span>Referral Bonus</span><b class="float-right">{{$package->referral}}%</b>
                                    </li>
                                    <li>
                                        <span class="ti-check-box mr-2 color-secondary"></span>
                                        <span>Duration</span><b class="float-right">{{$package->Duration}}</b>
                                    </li>
                                </ul>
                                <a href="{{route('login')}}" class="btn outline-white-btn p-2">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row justify-content-center">



            </div>

        </div>
    </section>

@endsection
