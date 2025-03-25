<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home.index');
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function shop()
    {
        return view('frontend.shop.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function detail()
    {
        return view('frontend.shop.detail');
    }
}
