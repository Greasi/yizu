<!DOCTYPE html>



<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>牛客网-注册</title>
<script>
var _czc = _czc || [];
_czc.push(["_setAccount", "1253353781"]);
</script>
<link rel="stylesheet" href="{{ url('/public/login') }}/regLogin.css">
</head>
<body>
<?php echo view('header')?>
<div class="nk-main clearfix">
<div class="wrapper">
<div class="tabbed">
<ul class="clearfix">
<li><a href="{{ url('/login') }}"><span class="tab-login"></span>登录</a></li>
<li class="tab-selected"><a href="javascript:void(0);"><span class="tab-reg"></span>注册</a></li>
</ul>
</div>
<div class="wrapper-content clearfix">
<div class="input-section">
    {!! Form::open(['url'=>'/doregister']) !!}
<div class="form-group">
<label for="emailIpt" class="control-label">电子邮箱</label>
<div class="control-group">
 {!! Form::text('email', null, ['class' => 'form-control','placeholder'=>"请输入邮箱"]) !!}
</div>
</div>
<div class="form-group">
<label for="passwordIpt" class="control-label">密码</label>
<div class="control-group">
 {!! Form::password('password', ['class' => 'form-control','placeholder'=>"请输入密码"]) !!}
</div>
</div>
<div class="form-group">
<label for="passwordIpt2" class="control-label">重输密码</label>
<div class="control-group">
  {!! Form::password('password_confirmation', ['class' => 'form-control','placeholder'=>"请重新输入密码"]) !!}
</div>
</div>
        
<div class="form-group">
<label for="input-rqcode" class="control-label">输入验证码</label>
<div class="control-group input-rqcode-box">
<input type="text" name='captcha' id="rqcodeIpt" maxlength="5" placeholder="请输入验证码" />
<a href="javascript:void(0);" class="rq-img">
<img src="captcha/1" alt="验证码" id='sxcaptcha' />
</a>
<a href='javascript:void(0);' onclick="javascript:re_captcha();" class="rq-refresh"></a>
</div>
</div>
    <!-- 刷新验证码 -->
<script>  
  function re_captcha() {
    $url = "captcha";
    $url = $url + "/"+ Math.random();
    document.getElementById('sxcaptcha').src=$url;
}
</script>     
<div class="form-group">
<div class="col-input-login">
<!-- <a class="btn btn-primary btn-block" href="javascript:void(0);" id="registerBtn">立即注册</a> -->
{!! Form::submit('立即注册',['class'=>'btn btn-primary btn-block']) !!}<br>
  @if ($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
</div>
</div>
{!! Form::close() !!}
</div>
<div class="other-login-way">
<span class="separate-line">或</span>
<div class="login-way">
<a href="javascript:void(0);" data-href="https://graph.qq.com/oauth2.0/authorize?client_id=101003590&response_type=code&redirect_uri=http://www.nowcoder.com/oauth2/qqconfig&state=web&scope=get_user_info" class="nc-js-action-oauth login-qq">QQ账号登录</a>
<a href="javascript:void(0);" data-href="https://api.weibo.com/oauth2/authorize?client_id=3023520088&response_type=code&redirect_uri=http://www.nowcoder.com/oauth2/sinaconfig&state=web&scope=follow_app_official_microblog" class="nc-js-action-oauth login-wb">微博账号登录</a>
<a href="javascript:void(0);" data-href="https://open.weixin.qq.com/connect/qrconnect?appid=wxfee0340998de6ab1&redirect_uri=http%3A%2F%2Fwww.nowcoder.com%2Foauth2%2Flogin%2Fweixin?&response_type=code&scope=snsapi_login&state=11" class="nc-js-action-oauth login-wx">微信账号登录</a>
<a href="javascript:void(0);" data-href="https://graph.renren.com/oauth/authorize?client_id=33356a41ddac4028a9ad64925e68c0e0&response_type=code&redirect_uri=http://www.nowcoder.com/oauth2/rrconfig&state=web" class="nc-js-action-oauth login-rr">人人账号登录</a>
<a href="javascript:void(0);" data-href="https://github.com/login/oauth/authorize?client_id=1c539827b9400016d0c9&response_type=code&redirect_uri=http://www.nowcoder.com/oauth2/gitconfig&state=web&scope=user:email" class="nc-js-action-oauth login-git">Github账号登录</a>
</div>
</div>
</div>
</div>
</div>
<div class="fixed-menu">
<ul>
<li>
<a href="#top" class="gotop" title="回到顶部" id="gotop"></a>
</li>
<li>
<a class="fixed-wb" target="_blank" href="http://www.weibo.com/nowcoder"></a>
</li>
<li>
<a href="tencent://groupwpa/?subcmd=all&param=7B2267726F757055696E223A3135373539343730352C2274696D655374616D70223A313431333130373737387D0A" class="qq" title="QQ"></a>
</li>
<li>
<a href="javascript:void(0);" class="wx"></a>
<div class="wx-qrcode">
<img src="{{ url('/public/register') }}/wx-rcode.jpg" alt="二维码" />
<p>扫描二维码，关注牛客网</p>
</div>
</li>
<li>
<a href="/discuss/30" class="feedback" title="意见反馈"></a>
<a href="/discuss/30" class="feedback-letter">意见反馈</a>
</li>
<li>
<a href="javascript:void(0);" class="qrcode"></a>
<div class="wx-qrcode">
<img src="{{ url('/public/register') }}/app.png" alt="二维码" />
<p>下载牛客APP，随时随地刷题</p>
</div>
</li>
</ul>
<div class="phone-qrcode" style="display:none;">
<a href="javascript:void(0);" class="qrcode-close">x</a>
<img src="{{ url('/public/register') }}/app.png" alt="二维码" style="width:70px;height:70px;" />
<p>扫一扫下载牛客APP</p>
</div>
</div>
<?php echo view('foot')?>
</div>
</div>

</div>
</body>
</html>
