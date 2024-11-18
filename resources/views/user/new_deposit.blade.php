@extends('user.base')

@section('content')

    <!-- DataTales Example -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                {{$pageName}}
            </h6>
        </div>
        <div class="card-body row">
            <div class="col-md-12 mx-auto">
                <form method="post" action="{{route('deposit.new')}}">
                    @csrf
                    @include('templates.notification')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Email"
                            value="{{$user->name}}" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                   value="{{$user->email}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Minimum Deposit($)</label>
                        <input type="text" class="form-control" id="inputAddress"
                               value="{{$web->minDeposit}}" disabled>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Amount ($)</label>
                            <input type="number" class="form-control" id="inputAddress2"
                                   placeholder="Enter Amount to Deposit" name="amount">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Asset</label>
                            <select type="number" class="form-control" id="inputAddress2"
                            name="asset">
                                <option value="">Select an Asset</option>
                                @foreach($coins as $coin)
                                    <option value="{{$coin->asset}}">{{$coin->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Deposit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
