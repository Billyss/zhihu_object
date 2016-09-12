<?php $__env->startSection('content'); ?>
	<form novalidate="novalidate" method="post" action="<?php echo e(URL('/home/dologin')); ?>">
	<?php echo e(csrf_field()); ?>

<!-- <input type="hidden" name="_xsrf" 

value="5331cc6799014b9ee96974e004705e0c"> -->
<div class="group-inputs">

<div class="input-wrapper">

<input type="text" name="phone" aria-

label="手机号" placeholder="手机号" required="">
</div>

<div class="input-wrapper">
<input type="password" name="password" 

aria-label="密码" placeholder="密码" 

required="">
</div>

<div class="input-wrapper captcha-module" data-type="en" style="display: block;">
<input id="captcha" name="captcha" placeholder="验证码" required="" data-rule-required="true" data-msgrequired="请填写验证码 ">
<div class="captcha-container">
	<img class="js-refreshCaptcha captcha" width="120" height="30" data-tooltip="s$t$看不清楚？换一张" alt="验证码" src="<?php echo e(URL('home/captcha/'.time())); ?>" onclick="this.src='<?php echo e(URL('home/captcha')); ?>/'+Math.random() " style="display: block;">
</div>
</div>

<?php if( session('captcha') ): ?>
	<div class="input-wrapper" style="color:red;font-size:20px;text-align:center;"><?php echo e(session('captcha')); ?></div>
<?php endif; ?>

<?php if( session('info') ): ?>
	<div class="input-wrapper" style="color:red;font-size:20px;text-align:center;"><?php echo e(session('info')); ?></div>
<?php endif; ?>



</div>
<div class="button-wrapper command">
<button class="sign-button submit" 

type="submit">登录</button>
</div>
<div class="signin-misc-wrapper clearfix">
<label class="remember-me">
<input type="checkbox" name="remember_me" 

checked="" value="true"> 记住我
</label>
<a class="unable-login" 

href="https://www.zhihu.com/#">无法登录?

</a>
</div>



</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.base.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>