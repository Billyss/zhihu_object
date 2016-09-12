<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HpageController extends Controller
{
    //1网站首页

    public function index()
    {
    	return view('home.hpage.index');
    }
}
