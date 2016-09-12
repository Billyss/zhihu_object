<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder;
use Session;



class RegisterController extends Controller
{
    //1前台注册

    public function register()
    {
    	$id=0;
    	return view('home.index.index',['id'=>$id]);
    }


    //2执行注册



    //3验证码
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
