<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('dashboard/user/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('dashboard/user/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/user/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/user/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('dashboard/user/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('dashboard/user/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('dashboard/user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{asset('dashboard/user/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/user/css/icons.css')}}" rel="stylesheet">
    <title>{{$pageName}} - {{$siteName}}</title>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        body {
            background-color: #0818A8;
            font-family: 'Open Sans', sans-serif;
            font-size: 1rem;
            color: #000000;
            font-weight: 400;
            line-height: 1.75;
        }
    </style>
</head>

<body >
<!--wrapper-->
<div class="wrapper">
    <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="my-4 text-center">
                        <img src="{{asset('home/images/'.$web->logo)}}" width="180" alt="" />
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Sign Up</h3>
                                    <p>Already have an account? <a href="{{route('login')}}">Sign in here</a>
                                    </p>
                                </div>
                                <div class="d-grid">
                                    <div class="form-body">
                                        <form class="row g-3" method="post" action="{{route('auth.register')}}">
                                            @include('templates.notification')
                                            @csrf
                                            <div class="col-sm-6">
                                                <label for="inputFirstName" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="inputFirstName"
                                                       value="{{old('name')}}" name="name"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="inputLastName" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="inputLastName"
                                                       name="username" value="{{old('username')}}"/>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="inputEmailAddress"
                                                       name="email" value="{{old('email')}}"/>
                                            </div>
{{--                                            <div class="col-sm-6">--}}
{{--                                                <label for="inputEmailAddress" class="form-label">Phone</label>--}}
{{--                                                <input type="text" class="form-control" id="inputEmailAddress"--}}
{{--                                                       name="phone" value="{{old('phone')}}"/>--}}
{{--                                            </div>--}}
                                            <div class="col-md-6">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0"
                                                           id="inputChoosePassword" name="password">
                                                    <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <!--<div class="col-md-6">-->
                                            <!--    <label for="inputChoosePassword" class="form-label">Repeat Password</label>-->
                                            <!--    <div class="input-group" id="show_hide_password">-->
                                            <!--        <input type="password" class="form-control border-end-0"-->
                                            <!--               id="inputChoosePassword" name="repeatPassword">-->
                                            <!--        <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="col-sm-12">
                                                <label for="inputEmailAddress" class="form-label">Referral<sup>(optional)</sup> </label>
                                                <input type="text" class="form-control" id="inputEmailAddress"
                                                       name="referral" value="{{old('referral')}} {{$referral}}"/>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="form-group">

                                                        <strong>ReCaptcha:</strong>

                                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                                                        @if ($errors->has('g-recaptcha-response'))

                                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>

                                                        @endif

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">
                                                        I have read and agreed to Terms & Conditions</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Sign up</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{asset('dashboard/user/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('dashboard/user/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/user/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('dashboard/user/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('dashboard/user/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="{{asset('dashboard/user/js/app.js')}}"></script>
</body>
</html>
