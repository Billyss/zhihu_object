<!DOCTYPE html>
<!-- saved from url=(0029)https://www.zhihu.com/#signup -->
<html lang="zh-CN" class="is-AppPromotionBarVisible cssanimations csstransforms csstransitions flexbox no-touchevents no-mobile"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async="" src="{{ asset('homes/indexjscss/za-0.1.1.min.js') }}"></script><script async="" src="{{ asset('homes/indexjscss/ga.js') }}"></script><script async="" src="{{ asset('homes/indexjscss/zap.js') }}"></script>
<meta charset="utf-8">
<meta name="apple-itunes-app" content="app-id=432274380">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta name="description" content="一个真实的网络问答社区，帮助你寻找答案，分享知识。">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>知乎 - 与世界分享你的知识、经验和见解</title>



<link rel="apple-touch-icon" href="{{ asset('homes/indexjscss/touch-icon-152.87c020b9.png') }}" sizes="152x152">
<link rel="apple-touch-icon" href="{{ asset('homes/indexjscss/touch-icon-120.496c913b.png') }}" sizes="120x120">
<link rel="apple-touch-icon" href="{{ asset('homes/indexjscss/touch-icon-76.dcf79352.png') }}" sizes="76x76">
<link rel="apple-touch-icon" href="{{ asset('homes/indexjscss/touch-icon-60.9911cffb.png') }}" sizes="60x60">

<link rel="shortcut icon" href="https://static.zhihu.com/static/favicon.ico" type="image/x-icon">
<link rel="dns-prefetch" href="https://www.zhihu.com/p1.zhimg.com">
<link rel="dns-prefetch" href="https://www.zhihu.com/p2.zhimg.com">
<link rel="dns-prefetch" href="https://www.zhihu.com/p3.zhimg.com">
<link rel="dns-prefetch" href="https://www.zhihu.com/p4.zhimg.com">
<link rel="dns-prefetch" href="https://www.zhihu.com/comet.zhihu.com">
<link rel="dns-prefetch" href="https://www.zhihu.com/static.zhihu.com">
<link rel="dns-prefetch" href="https://www.zhihu.com/upload.zhihu.com">
<link rel="stylesheet" href="{{ asset('homes/indexjscss/main.5ea8a42e.css') }}">
<meta name="google-site-verification" content="FTeR0c8arOPKh8c5DYh_9uu98_zJbaWw53J-Sch9MTg">
<meta name="baidu-site-verification" content="KPFppAFoYF4Kkdv9">
<meta property="qc:admins" content="00544670776201056375">
<link rel="canonical" href="http://www.zhihu.com/">
<meta id="znonce" name="znonce" content="23807ecc60bb46549403d02e587548f0">
<!--[if lt IE 9]>
<script src="https://static.zhihu.com/static/components/respond/dest/respond.min.js"></script>
<link href="https://static.zhihu.com/static/components/respond/cross-domain/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
<link href="/static/components/respond/cross-domain/respond.proxy.gif" id="respond-redirect" rel="respond-redirect" />
<script src="/static/components/respond/cross-domain/respond.proxy.js"></script>
<![endif]-->
<script src="{{ asset('homes/indexjscss/instant.14757a4a.js') }}"></script>
</head>
<body class="zhi  no-auth">



<div class="index-main">
<div class="index-main-body">
<div class="index-header">

<h1 class="logo hide-text">知乎</h1>

<h2 class="subtitle">与世界分享你的知识、经验和见解</h2>
</div>

<div class="desk-front sign-flow clearfix sign-flow-simple">

<div class="index-tab-navs">


	<div class="navs-slider" data-active-index="{{ $id }}">
	@if( $id==0 )
		<a href="{{ asset('/') }}" class="active">注册</a>
		<a href="{{ asset('/home/login') }}" class="">登录</a>
		<span class="navs-slider-bar"></span>
	@else
		<a href="{{ asset('/') }}" class="">注册</a>
		<a href="{{ asset('/home/login') }}" class="active">登录</a>
		<span class="navs-slider-bar"></span>
	@endif
		
	</div>


</div>


<div class="view view-signin" data-za-module="SignInForm" style="display: none;">


<div class="QRCode">
<button class="QRCode-toggleButton">
<span class="sprite-global-icon-qrcode"></span>
<span class="QRCode-toggleButtonText ">下载知乎 App</span>
</button>
<div class="QRCode-card">
<div class="QRCode-image"></div>
<div class="sprite-index-icon-arrow"></div>
</div>
</div>


</div>
<div class="view view-signup selected" data-za-module="SignUpForm" style="display: block;">

@yield('content')

<div class="QRCode">
<button class="QRCode-toggleButton">
<span class="sprite-global-icon-qrcode"></span>
<span class="QRCode-toggleButtonText ">下载知乎 App</span>
</button>
<div class="QRCode-card">
<div class="QRCode-image"></div>
<div class="sprite-index-icon-arrow"></div>
</div>
</div>



</div>
</div>
</div>

</div>
<div class="footer">
<span>© 2016 知乎</span>
<span class="dot">·</span>
<a target="_blank" href="https://www.zhihu.com/roundtable">知乎圆桌</a>
<span class="dot">·</span>
<a target="_blank" href="https://www.zhihu.com/explore" data-za-c="explore" data-za-a="visit_explore" data-za-l="home_bottom_explore">发现</a>
<span class="dot">·</span>
<a target="_blank" href="https://www.zhihu.com/app">移动应用</a>
<span class="dot">·</span>


<a href="https://www.zhihu.com/org/signin" class="footer-mobile-show">使用机构帐号登录</a>

<span class="dot footer-mobile-show">·</span>

<a href="https://www.zhihu.com/contact" class="footer-mobile-show">联系我们</a>
<span class="dot">·</span>
<a href="https://liukanshan.zhihu.com/" class="footer-mobile-show" target="_blank">刘看山</a>
<span class="dot">·</span>
<a target="_blank" href="https://www.zhihu.com/careers">来知乎工作</a>
<span class="dot">·</span>
<a href="http://www.miibeian.gov.cn/" target="_blank">京 ICP 备 13052560 号</a>
<span class="dot">·</span>
<span>京公网安备 11010802010035 号</span>
<span class="dot">·</span>
<span>北京智者天下科技有限公司</span>
</div>



<script type="text/json" class="json-inline" data-name="disabled_components">["back_to_top"]</script>
<script type="text/json" class="json-inline" data-name="current_user">["","","","-1","",0,0]</script>
<script type="text/json" class="json-inline" data-name="env">["zhihu.com","comet.zhihu.com",false,null,false]</script>

<script type="text/json" class="json-inline" data-name="ga_vars">{"user_created":0,"now":1473496086000,"abtest_mask":"------------------------------","user_attr":[0,0,0,"-","-"],"user_hash":0}</script>

<script src="{{ asset('homes/indexjscss/vendor.cb14a042.js') }}"></script>
<script src="{{ asset('homes/indexjscss/base.c054ab5f.js') }}"></script>

<script src="{{ asset('homes/indexjscss/common.1f51c04d.js') }}"></script>
<script src="{{ asset('homes/indexjscss/page-index.72903b8a.js') }}"></script>
<meta name="entry" content="ZH.entrySignPage" data-module-id="page-index">


<input type="hidden" name="_xsrf" value="e1934524bfd7af3d4539449a6f1d90f6">

<div id="zh-hovercard"></div><div id="zh-tooltip"></div><script type="text/template" class="register-template">

</script><div id="particles"><canvas class="particles-js-canvas-el" width="1263" height="655" style="width: 100%; height: 100%;"></canvas></div></body></html>