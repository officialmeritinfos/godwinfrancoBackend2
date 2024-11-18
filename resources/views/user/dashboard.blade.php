@extends('user.base')

@section('content')


    <!-- DataTales Example -->
    <div class="card" style="background-color:#0f0f0f;color: #ffffff;">

        <div class="card-body row">
            <div class="col-md-6">

                <a href="{{url('account/new_investment')}}"
                   class="btn btn-primary btn-md" style="margin-left: 30px;margin-top: 30px;">Deposit</a>
            </div>
            <div class="col-md-6">

                <a href="{{url('account/new_withdrawals')}}"
                   class="btn btn-info text-white btn-md" style="margin-left: 30px;margin-top: 30px;">Withdraw</a>
            </div>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">

        <div class="col-md-4">
            <div class="card radius-10 bg-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <p class="mb-0 text-white">Profit Balance</p>
                            <h4 class="my-1 text-white">${{number_format($user->profit,2)}}</h4>
                            <p class="mb-0 font-13 text-white"></p>
                        </div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card radius-10 bg-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <p class="mb-0 text-white">Total Withdrawal</p>
                            <h4 class="my-1 text-white"> ${{number_format($user->withdrawals,2)}}</h4>
                            <p class="mb-0 font-13 text-white"></p>
                        </div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card radius-10 bg-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <p class="mb-0 text-white">Referral Balance</p>
                            <h4 class="my-1 text-white"> ${{number_format($user->refBal,2)}}</h4>
                            <p class="mb-0 font-13 text-white"></p>
                        </div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-4 mx-auto">
            <div class="card radius-10 bg-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <p class="mb-0 text-white">Investments</p>
                            <h4 class="my-1 text-white">
                                ${{number_format($investments,2)}}
                            </h4>
                        </div>
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mx-auto">
            <div class="card radius-10 bg-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <p class="mb-0 text-white">Ongoing Investments</p>
                            <h4 class="my-1 text-white">
                                ${{number_format($ongoingInvestments,2)}}
                            </h4>
                        </div>
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mx-auto">
            <div class="card radius-10 bg-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <p class="mb-0 text-white">Pending Deposits</p>
                            <h4 class="my-1 text-white">
                                ${{number_format($pendingDeposit,2)}}
                            </h4>
                        </div>
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <!-- DataTales Example -->
    <div class="card" style="background-color:#0f0f0f;color: #ffffff;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Link
            </h6>
        </div>
        <div class="card-body row">
            <div class="col-md-12 mx-auto">

                <div class="form-row">
                    <div class="form-group col-md-6 mx-auto">
                        <label for="inputEmail4">Referral Link</label>
                        <input type="text" class="form-control" id="inputEmail4"
                               value="{{route('register',['referral'=>$user->username])}}" readonly>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button  class="btn btn-primary copy"
                             data-clipboard-target="#inputEmail4">copy</button>
                </div>
            </div>
        </div>
    </div>
    <br><br>


@endsection
