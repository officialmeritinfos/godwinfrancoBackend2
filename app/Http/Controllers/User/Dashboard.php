<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'User Dashboard',
            'user'     =>  $user,
            'deposits'  => Deposit::where('user',$user->id)->where('status',1)->get(),
            'pendingDeposit'=>Investment::where('user',$user->id)->where('status',2)->sum('amount'),
            'withdrawals'=>Withdrawal::where('user',$user->id)->where('status',1)->sum('amount'),
            'pendingWithdrawal'=>Withdrawal::where('user',$user->id)->where('status','!=',1)->sum('amount'),
            'investments' => Investment::where('user',$user->id)->sum('amount'),
            'ongoingInvestments'=>Investment::where('user',$user->id)->where('status',4)->sum('amount'),
            'completedInvestments'=>Investment::where('user',$user->id)->where('status',1)->sum('amount'),
            'cancelledInvestments'=>Investment::where('user',$user->id)->where('status',3)->sum('amount'),
            'web'=>$web
        ];

        return view('user.dashboard',$dataView);
    }
}
