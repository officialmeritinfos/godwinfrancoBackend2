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
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-5">
                        <h2 class="uk-margin-bottom uk-text-center">Company Faqs.</h2>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove uk-text-center">
                            Can't find and answer, contact us...<a href="{{url('contact')}}">Here</a></p>
                        <p class="uk-text-center">
                        </p>
                        <ul class="in-faq-3 uk-margin-medium-top" data-uk-accordion>

                            <li class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                                <a class="uk-accordion-title" href="#">What is {{$siteName}}?</a>
                                <div class="uk-accordion-content">
                                    <p>{{$siteName}} our company provides a full investment service focused on the bitcoin and cryptocurrency market We are among the best platforms to invest and grow your bitcoin and other cryptocurrency</p>
                                </div>
                            </li>


                            <li class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                                <a class="uk-accordion-title" href="#">How do I create my account?</a>
                                <div class="uk-accordion-content">
                                    <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button  and fill in all the required fields</p>
                                </div>
                            </li>


                            <li class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                                <a class="uk-accordion-title" href="#">How do I make a deposit?</a>
                                <div class="uk-accordion-content">
                                    <p>To deposit funds in your trading account is quick and simple For your convenience you may choose one of the several available deposit methods To make a successful deposit please follow the steps below Login to your account Click on the DEPOSITS button in the DASHBOARD section Choose the deposit option And follow the steps to complete your transaction</p>
                                </div>
                            </li>


                            <li class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                                <a class="uk-accordion-title" href="#">How long does my deposit take before it can reflect on my {{$siteName}} account dashboard?</a>
                                <div class="uk-accordion-content">
                                    <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>
                                </div>
                            </li>


                            <li class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                                <a class="uk-accordion-title" href="#">How do I make a withdrawal?</a>
                                <div class="uk-accordion-content">
                                    <p>To make a withdrawal request click the WITHDRAW button at the top center of your {{$siteName}} account dashboard and input the required details to withdraw</p>
                                </div>
                            </li>


                            <li class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                                <a class="uk-accordion-title" href="#">How long does it take to process my withdrawal?</a>
                                <div class="uk-accordion-content">
                                    <p>Once we receive your withdrawal request we process immediately and send to your bitcoin wallet</p>
                                </div>
                            </li>


                            <li class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                                <a class="uk-accordion-title" href="#">Can I have more than one account?</a>
                                <div class="uk-accordion-content">
                                    <p>No you cannot have more than one account only investors on the vip plan are allowed to do so</p>
                                </div>
                            </li>


                            <li class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                                <a class="uk-accordion-title" href="#">Is this company properly registered?</a>
                                <div class="uk-accordion-content">
                                    <p>Yes we are officially and properly registered with the united kingdom company house our company registration number is 138898   and registered with the name {{$siteName}} LTD</p>
                                </div>
                            </li>


                            <li class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                                <a class="uk-accordion-title" href="#">Can I have more than two accounts?</a>
                                <div class="uk-accordion-content">
                                    <p>We do not allow multiple accounts except only for our investors on the VIP plan</p>
                                </div>
                            </li>


                            <li class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                                <a class="uk-accordion-title" href="#">how many times can i make a deposit?</a>
                                <div class="uk-accordion-content">
                                    <p>Yes you can make as many deposit as you want on any of our investment plans except the starter plan where you can only invest 3 times after which you make a choice to continue investing with us or not</p>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>

@endsection
