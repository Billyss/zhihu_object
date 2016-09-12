<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use DB;

class LoginController extends Controller
{

	

    //1登录界面
    public function login()
    {
    	$id = 1;

    	return view('home.login.login',['id'=>$id]);
    }


    //2执行登录

    public function doLogin(Request $request)
    {
    	$id = 1;
    	$data = $request->except('_token');
    	// dd($data);

    	$mycode = Session::get('mycode');

    	if ($data['captcha']!==$mycode) {

    		// Session::flash('captcha','验证码输入错误!');
    		return back()->with('captcha','验证码输入有误!');

    	}

    	$phone = $data['phone'];
    	$password = $data['password'];
    	$ob = DB::table('zhihu_users')->where('phone',$phone)->first();
    	// var_dump($ob);

    	if ($ob) {
    		if ($ob->password==$password) {
    			// Session::put('uname',$data['uname']);
    			return redirect('/home/hpage');
    		}else{
    			return back()->with('info','用户或密码输入错误!');
    		}
    	}else{
    			return back()->with('info','用户或密码输入错误!');
    		}

    }
}
