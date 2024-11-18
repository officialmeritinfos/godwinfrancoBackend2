@extends('home.base')

@section('content')

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
            <div class="uk-container">
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-2 uk-child-width-1-3 in-card-10" data-uk-grid>
                    <div class="uk-width-1-1">
                        <h2 class="uk-margin-remove">Legal<span class="in-highlight">Information</span> </h2>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove">Company Registration.</p>
                        is one of the most reliable diversified financial investment service
                        provider in the world. Our fundamental mission is to help customers and clients achieve
                        their financial objectives. With offices locate in the United States, Australia,Canada and
                        headquartered in Uk,  have staffs with over 30 years’ experience in
                        combining financial development and trades. We are committed to pushing the boundaries of
                        what constitutes the highest standards in trades and asset management.
                        </p>
                        <p>With over $5.3 Trillion traded daily in the market, we are dedicated to giving our clients their own share of the
                            profit daily. As a leading global market maker,  has one of the World’s Largest Independent
                            traders and fund managers with clients from different parts of the World. Today, as a
                            successful trade investment and asset management company, we are trusted by thousands of clients.
                            Our sterling reputation, dedication to meeting our clients’ needs and innovative approach to business
                            development are some driving forces behind our success.
                        </p>

                        <div class="col-lg-4 col-md-4">
                            <h5>Legal Certificate</h5>
                            <div class="about-img-wrap">
                                <img src="{{asset('home/img/zenbitcert.jpg')}}" alt="certificate" class="img-fluid rounded shadow-sm">

                            </div>
                            <div class='text-center my-4'>
                                <a href='{{asset('home/img/zenbitcert.jpg')}}' class='btn btn-primary btn-block'>View Certificate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>

@endsection
