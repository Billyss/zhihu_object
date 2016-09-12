@extends('home.base.base')
@section('content')
<form class="zu-side-login-box" action="https://www.zhihu.com/register/email" id="sign-form-1" autocomplete="off" novalidate="novalidate">
<input type="password" hidden=""> 
<input type="hidden" name="_xsrf" value="e1934524bfd7af3d4539449a6f1d90f6">
<div class="group-inputs">


<div class="name input-wrapper">
<input required="" type="text" name="fullname" aria-label="姓名" placeholder="姓名">
</div>
<div class="email input-wrapper">

<input required="" type="text" class="account" name="phone_num" aria-label="手机号（仅支持中国大陆）" placeholder="手机号（仅支持中国大陆）">

</div>

<div class="input-wrapper">
<input required="" type="password" name="password" aria-label="密码" placeholder="密码（不少于 6 位）" autocomplete="off">
</div>

<div class="input-wrapper captcha-module" data-type="en" style="display: block;">
<input id="captcha" name="captcha" placeholder="验证码" required="" data-rule-required="true" data-msgrequired="请填写验证码">
<div class="captcha-container">

<img class="js-refreshCaptcha captcha" width="120" height="30" data-tooltip="s$t$看不清楚？换一张" alt="验证码" src="{{ URL('home/captcha/'.time()) }}" onclick="this.src='{{ URL('home/captcha') }}/'+Math.random() " style="display: block;">
</div>
</div>

</div>

<div class="button-wrapper command">
<button class="sign-button submit" type="submit">注册知乎</button>
</div>
</form>
@endsection