<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>牛客网—登录—专业IT笔试面试备考平台</title>
<script>
var _czc = _czc || [];
_czc.push(["_setAccount", "1253353781"]);
</script>
<link rel="stylesheet" href="{{ url('/public/login') }}/regLogin.css"></head>
<body>

<?php echo view('header')?>

<div class="nk-main clearfix">
<div class="wrapper">
<div class="tabbed">
<ul class="clearfix">
<li class="tab-selected"><a href="javascript:void(0);"><span class="tab-login"></span>登录</a></li>
<li><a href="{{ url('/register') }}"><span class="tab-reg"></span>注册</a></li>
</ul>
</div>
<div class="wrapper-content clearfix">
<div class="input-section">
<form>
<div class="form-group">
<label for="emailIpt" class="control-label">邮箱/手机</label>
<div id="component_0_input_0" class="control-group">
<input id="emailIpt" placeholder="请输入邮箱/手机号" type="text">
<i class="input-icon fui-cross"></i><i class="input-icon fui-check-inverted"></i><span class="input-tip"></span></div>
</div>
<div class="form-group">
<label for="passwordIpt" class="control-label">密码</label>
<div id="component_1_input_1" class="control-group">
<input id="passwordIpt" placeholder="请输入密码" type="password">
<i class="input-icon fui-cross"></i><i class="input-icon fui-check-inverted"></i><span class="input-tip"></span></div>
</div>
<div class="form-group about-pwd">
<div class="keep-pwd">
<label>
<input id="remLoginChk" checked="checked" type="checkbox"> 记住登录
</label>
</div>
<a href="http://www.nowcoder.com/forgot-pwd" class="forget-pwd"> 忘记密码？</a>
</div>
<div class="form-group">
<div class="col-input-login">
<a class="btn btn-primary btn-block" href="javascript:void(0);" id="loginBtn">立即登录</a>
<input class="nk-invisible" type="submit">
</div>
</div>
<input name="token" value="" type="hidden"></form>
</div>
<div class="other-login-way">
<span class="separate-line">或</span>
<div class="login-way">
<a href="javascript:void(0);" data-href="https://graph.qq.com/oauth2.0/authorize?client_id=101003590&amp;response_type=code&amp;redirect_uri=http://www.nowcoder.com/oauth2/qqconfig&amp;state=web&amp;scope=get_user_info" class="nc-js-action-oauth login-qq">QQ账号登录</a>
<a href="javascript:void(0);" data-href="https://api.weibo.com/oauth2/authorize?client_id=3023520088&amp;response_type=code&amp;redirect_uri=http://www.nowcoder.com/oauth2/sinaconfig&amp;state=web&amp;scope=follow_app_official_microblog" class="nc-js-action-oauth login-wb">微博账号登录</a>
<a href="javascript:void(0);" data-href="https://open.weixin.qq.com/connect/qrconnect?appid=wxfee0340998de6ab1&amp;redirect_uri=http%3A%2F%2Fwww.nowcoder.com%2Foauth2%2Flogin%2Fweixin?&amp;response_type=code&amp;scope=snsapi_login&amp;state=11" class="nc-js-action-oauth login-wx">微信账号登录</a>
<a href="javascript:void(0);" data-href="https://graph.renren.com/oauth/authorize?client_id=33356a41ddac4028a9ad64925e68c0e0&amp;response_type=code&amp;redirect_uri=http://www.nowcoder.com/oauth2/rrconfig&amp;state=web" class="nc-js-action-oauth login-rr">人人账号登录</a>
<a href="javascript:void(0);" data-href="https://github.com/login/oauth/authorize?client_id=1c539827b9400016d0c9&amp;response_type=code&amp;redirect_uri=http://www.nowcoder.com/oauth2/gitconfig&amp;state=web&amp;scope=user:email" class="nc-js-action-oauth login-git">Github账号登录</a>
</div>
</div>
</div>
</div>
</div>
<div style="display: block; bottom: 127px;" class="fixed-menu">
<ul>
<li>
<a href="#top" class="gotop" title="回到顶部" id="gotop"></a>
</li>
<li>
<a class="fixed-wb" target="_blank" href="http://www.weibo.com/nowcoder"></a>
</li>
<li>
<a href="tencent://groupwpa/?subcmd=all&amp;param=7B2267726F757055696E223A3135373539343730352C2274696D655374616D70223A313431333130373737387D0A" class="qq" title="QQ"></a>
</li>
<li>
<a href="javascript:void(0);" class="wx"></a>
<div class="wx-qrcode">
<img src="{{ url('/public/login') }}/wx-rcode.jpg" alt="二维码">
<p>扫描二维码，关注牛客网</p>
</div>
</li>
<li>
<a href="http://www.nowcoder.com/discuss/30" class="feedback" title="意见反馈"></a>
<a href="http://www.nowcoder.com/discuss/30" class="feedback-letter">意见反馈</a>
</li>
<li>
<a href="javascript:void(0);" class="qrcode"></a>
<div class="wx-qrcode">
<img src="{{ url('/public/login') }}/app.png" alt="二维码">
<p>下载牛客APP，随时随地刷题</p>
</div>
</li>
</ul>
<div class="phone-qrcode" style="">
<a href="javascript:void(0);" class="qrcode-close">x</a>
<img src="{{ url('/public/login') }}/app.png" alt="二维码" style="width:70px;height:70px;">
<p>扫一扫下载牛客APP</p>
</div>
</div>
<?php echo view('foot')?>
</div>
</div>
</div>
<script src="{{ url('/public/login') }}/sea.js" type="text/javascript"></script>
<script src="{{ url('/public/login') }}/base.js"></script>
<script type="text/javascript">
seajs.use('nowcoder/1.2.346/javascripts/site/common/index');
seajs.use('nowcoder/1.2.346/javascripts/site/common/nav');
</script>
<span id="cnzz_stat_icon_1253353781" style="display:none;"></span>
<script type="text/javascript">
seajs.use('nowcoder/1.2.346/javascripts/site/login/login');
</script>


<script src="{{ url('/public/login') }}/stat.php" type="text/javascript"></script></body></html>