<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\Package;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Home Page',
            'packages'  => Package::where('status',1)->get(),
            'deposits'=>Investment::where('status','1')->orWhere('status','1')->orderBy('id','desc')->limit(10)->get(),
            'withdrawals'=>Withdrawal::where('status','!=',3)->orderBy('id','desc')->limit(10)->get(),
        ];

        return view('home.home',$dataView);
    }

    public function about()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'About Us',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.about',$dataView);
    }
    public function plans()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Packages',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.plans',$dataView);
    }
    public function terms()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Terms and Conditions',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.terms',$dataView);
    }
    public function privacy()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Privacy Policy',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.privacy',$dataView);
    }
    public function faqs()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Frequently Asked Questions',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.faq',$dataView);
    }
    public function services()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Services',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.service',$dataView);
    }
    public function estate()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Real Estates',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.estates',$dataView);
    }
    public function contact()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Contact us',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.contact',$dataView);
    }
    public function buyBtc()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Where to Buy Bitcoin',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.buy_btc',$dataView);
    }
    public function legal()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Legal Information',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.legal',$dataView);
    }
}

