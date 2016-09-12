<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder;
use Session;
use DB;

class LoginController extends Controller
{
    //1后台的登录
    public function login()
    {
    	return view('admin.login.login');
    }


    //2执行登录
    public function doLogin(Request $request)
    {
    	// var_dump($request->all());
    	$mycode = Session::get('mycode');

    	if ($request->input('code')!==$mycode) {

    		return back()->with('msg','验证码输入出错');

    	}

    	$gname = $request->input('gname');
    	$password = $request->input('password');

    	$ob = DB::table('zhihu_ugroup')->where('gname',$gname)->first();

    	if ($ob) {
    		if ($ob->password==$password) {
    			Session::put('gname',$gname);
    			return redirect('admin/index');
    		}
    	}else{
    		return back()->with('msg','用户名或密码错误');
    	}

    	return back()->with("msg","用户或密码错误");

    }



    //退出登录
    
    
  	public function logout()
    {
    	//删除session值 
    	session::forget("gname");
    	//跳转
    	return redirect("admin/login");
    }



        //4 验证码
    public function captcha($tmp)
    {
    	 //负责输出验证码程序
		/**
	     * Display a listing of the resource.
	     *
	     * @return Response
	     */
	   
	        //生成验证码图片的Builder对象，配置相应属性
	        $builder = new CaptchaBuilder;
	        //可以设置图片宽高及字体
	        $builder->build($width = 100, $height = 40, $font = null);
	        //获取验证码的内容
	        $phrase = $builder->getPhrase();
	        // dd($phrase);//输出随机字符串的值 
	        // echo $phrase;
	        //把内容存入session
	        Session::flash('mycode', $phrase);//通过静态方法的方式使用flash
	        // session()->flash('mycode',$phrase);//使用对象和方法的方式使用flash方法

	        //输出session的值 
		    // echo "<hr>";
		    // echo Session::get("mycode");
		    // echo "<hr>";
		    // exit();
	        //生成图片
	        header("Cache-Control: no-cache, must-revalidate");
	        header('Content-Type: image/jpeg');
	        $builder->output();
	        // exit();
	    
    }
}
