@extends('home.base')

@section('content')

    <!-- START SECTION BANNER -->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('{{asset('home/img/header-bg-5.jpg')}}')no-repeat center center / cover">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Our Properties</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item active">Eaxychain</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5">
                        <h2>Our Properties</h2>
                    </div>
                </div>
            </div>
            <div class="row">



                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">$103,000</span>
                            <img src="{{asset('home/img/estate/1.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text">4 bed detached house for sale ||
                                Siskin Avenue, Bacup, Rossendale OL13<br><a href="mailto:support@eaxychain.com">Make an Offer</a></p>

                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">$121,000</span>
                            <img src="{{asset('home/img/estate/2.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text">3 bed semi-detached house for sale
                                Milbrook Crescent, Kirkby, Liverpool L32<br><a href="mailto:support@eaxychain.com">Make an Offer</a></p>

                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">$113,000</span>
                            <img src="{{asset('home/img/estate/3.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text">3 bed semi-detached house for sale ||
                                Hazen Road, Kings Hill, West Malling ME19<br><a href="mailto:support@eaxychain.com">Make an Offer</a></p>

                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">$135,000</span>
                            <img src="{{asset('home/img/estate/4.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text">4 bed detached house for sale ||
                                Linnet Court, Ashington NE63<br><a href="mailto:support@eaxychain.com">Make an Offer</a></p>

                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">$190,000</span>
                            <img src="{{asset('home/img/estate/5.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text">2 bed semi-detached house for sale ||
                                Hawkes Close, Birmingham B30<br><a href="mailto:support@eaxychain.com">Make an Offer</a></p>

                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">$156,000</span>
                            <img src="{{asset('home/img/estate/6.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text">3 bed detached house for sale ||
                                Springfield Drive, Rye TN31<br><a href="mailto:support@eaxychain.com">Make an Offer</a></p>

                        </div>

                    </div>
                </div>




            </div>

        </div>
    </section>


@endsection
