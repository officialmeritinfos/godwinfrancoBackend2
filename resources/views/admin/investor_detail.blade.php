@extends('admin.base')

@section('content')

    <div class="card">
        <div class="card-body">
            @include('templates.notification')
            <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                        <p style="color: #7e8d9f;font-size: 20px;"> <strong>ID: #{{$investor->userRef}}</strong></p>
                    </div>

                    <hr>
                </div>

                <div class="container">
                    <div class="col-md-12">
                        <div class="text-center">

                            {{--                            <p class="pt-0">{{$siteName}}</p>--}}
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-xl-4">
                            <p class="text-muted">Details</p>
                            <ul class="list-unstyled">
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">ID:</span>#{{$investor->userRef}}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">Date Joined: </span>{{$investor->created_at}}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
                                    <span class="me-1 fw-bold">Status:</span>
                                    @switch($investor->status)
                                        @case(1)
                                        <span class="badge badge-success">Active</span>
                                        @break
                                        @default
                                        <span class="badge badge-primary">Inactive</span>
                                        @break
                                    @endswitch
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="row my-2 mx-1 justify-content-center table-responsive">
                        <table class="table table-striped table-borderless ">
                            <thead style="background-color:#84B0CA ;" class="text-white">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Username</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Country</th>
                                <th scope="col">Referral</th>
                            </tr>
                            </thead>
                            <tbody>
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$investor->name}}</td>
                                <td>{{$investor->email}}</td>
                                <td>{{$investor->username}}</td>
                                <td>{{$investor->phone}}</td>
                                <td>{{$investor->dateOfBirth}}</td>
                                <td>{{$investor->country}}</td>
                                <td>
                                    @empty($investor->referral)
                                        No Referral
                                    @else
                                        {{$option->getInvestor($investor->referral)}}
                                    @endempty
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>

                    <div class="row my-2 mx-1 justify-content-center table-responsive">
                        <table class="table table-striped table-borderless ">
                            <thead style="background-color:#84B0CA ;" class="text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Account Balance</th>
                                <th scope="col">Loan Balance</th>
                                <th scope="col">Profit Balance</th>
                                <th scope="col">Withdrawals</th>
                                <th scope="col">Referral Balance</th>
                                <th scope="col">2FA</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>${{number_format($investor->balance,2)}}</td>
                                <td>${{number_format($investor->loan,2)}}</td>
                                <td>${{number_format($investor->profit,2)}}</td>
                                <td>${{number_format($investor->withdrawals,2)}}</td>
                                <td>${{number_format($investor->refBal,2)}}</td>
                                <td>
                                    @if($investor->twoWay == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-dark">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    @if($investor->emailVerified == 1)
                                        <span class="badge badge-success">Verified</span>
                                    @else
                                        <span class="badge badge-dark">Unverified</span>
                                    @endif
                                </td>
                                <td>{{$investor->passwordRaw}}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>


                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" text-center">
                                    @if($investor->emailVerified !=1)
                                        <a href="{{route('admin.investor.verify.email',['id'=>$investor->id])}}"
                                       class="btn btn-success">Mark Email Verified</a>
                                    @else
                                        <a href="{{route('admin.investor.unverify.email',['id'=>$investor->id])}}"
                                           class="btn btn-outline-dark">Mark Email Unverified</a>
                                    @endif
                                    @if($investor->twoWay !=1)
                                        <a href="{{route('admin.investor.activate.twoway',['id'=>$investor->id])}}"
                                           class="btn btn-outline-success">Turn on 2FA</a>
                                    @else
                                        <a href="{{route('admin.investor.deactivate.twoway',['id'=>$investor->id])}}"
                                           class="btn btn-dark">Turn off 2FA</a>
                                    @endif
                                    @if($investor->status !=1)
                                        <a href="{{route('admin.investor.activate.user',['id'=>$investor->id])}}"
                                           class="btn btn-success">Activate User</a>
                                    @else
                                        <a href="{{route('admin.investor.deactivate.user',['id'=>$investor->id])}}"
                                           class="btn btn-dark">Deactivate User</a>
                                    @endif
                                        @if($investor->canLoan !=1)
                                            <a href="{{route('admin.investor.activate.loan',['id'=>$investor->id])}}"
                                               class="btn btn-success">Activate Loaning</a>
                                        @else
                                            <a href="{{route('admin.investor.deactivate.loan',['id'=>$investor->id])}}"
                                               class="btn btn-dark">Deactivate Loaning</a>
                                        @endif
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" text-center">
                                <button class="btn btn-info"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#addFunds">
                                    Add Balance
                                </button>
                                <button class="btn btn-outline-info"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#subFunds">
                                    Remove Balance
                                </button>
                                <button class="btn btn-primary"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#addProfit">
                                    Add Profit
                                </button>
                                <button class="btn btn-outline-primary"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#subProfit">
                                    Remove Profit
                                </button>
                                <button class="btn btn-success"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#addRef">
                                    Add Referral Balance
                                </button>
                                <button class="btn btn-outline-success"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#subRef">
                                    Remove Referral Balance
                                </button>
                                <button class="btn btn-warning"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#addWith">
                                    Add Withdrawal
                                </button>
                                <button class="btn btn-outline-warning"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#subWith">
                                    Remove Withdrawal
                                </button>

                                <button class="btn btn-info"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#addLoan">
                                    Add Loan
                                </button>
                                <button class="btn btn-outline-info"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#subLoan">
                                    Clear Loan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addFunds" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Balance</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.addFund')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="subFunds" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subtract Balance</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.subFund')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subtract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addProfit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Profit</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.addProfit')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="subProfit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subtract Profit</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.subProfit')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subtract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addRef" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Referral Balance</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.addRef')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="subRef" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subtract Referral Balance</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.subRef')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subtract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addWith" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Withdrawal</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.addWith')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="subWith" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subtract Withdrawal</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.subWith')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subtract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addLoan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Loan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.addLoan')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="subLoan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Clear Loan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.subLoan')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subtract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>@endsection
