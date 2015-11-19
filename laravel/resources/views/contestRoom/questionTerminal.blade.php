<!DOCTYPE html>



<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>有关系模式：User（userId, userName）， Article（articleId, userId, title,   content），Vote（articleId, score），User为用户关系，Article为用户发表的文章关系，Vote为文章得票关系，title为文章标题、score为得票数。回答以下数据库相关问题。_百度笔试题_牛客网</title>
<meta name="description"
content="有关系模式：User（userId, userName）， Article（articleId, userId, title,   content），Vote（articleId, score），User为用户关系，Article为用户发表的文章关系，Vote为文章得票关系，title为文章标题、score为得票数。回答以下数据库相关问题。 ">
<meta name="keywords" content="  百度，  系统设计，  数据库， 面试题，笔试题，IT题库，牛客网">
<link rel="stylesheet" href="http://static.nowcoder.com/nowcoder/1.2.348/stylesheets/nowcoder-ui.css">
<script>
var _czc = _czc || [];
_czc.push(["_setAccount", "1253353781"]);
</script>
<style>
.open.module-box .show-all-notes, .module-box .notes-mod, .fold-notes{display: none;}
.open.module-box .notes-mod, .open.module-box .fold-notes{display: block;}
</style>
</head>
<body>
<div class="nk-container    ">
<div class="nowcoder-header">
<div class="header-main clearfix">
<a class="nowcoder-logo" href="/" title="牛客网"></a>
<ul class="nowcoder-navbar">
<li>
<a href="/" class="nav-home">首页</a>
</li>
<li class="active">
<a href="/contestRoom" class="nav-exam">题库</a>
<ul class="sub-nav">
<li><a href="/contestRoom">公司真题</a></li>
<li><a href="/intelligentTest">专项练习</a></li>
<li><a href="/activity/oj">在线编程</a></li>
<li><a href="/activity/topics">精华专题</a></li>
<li><a href="/questionCenter">试题广场</a></li>
</ul>
</li>
<li>
<span class="ico-nav-new"></span>
<a href="/courses/1" class="nav-exam">课程</a>
<ul class="sub-nav">
<li><a href="/courses/1">精品课程</a></li>
<li><a href="/live/courses">直播课程</a></li>
</ul>
</li>
<li>
<a href="/ranking" class="nav-ranking">排行榜</a>
</li>
<li>
<a href="/recommand" class="nav-discuss">内推</a>
</li>
<li>
<a href="/discuss" class="nav-discuss">讨论区</a>
</li>
<li>
<a href="/app" class="nav-discuss" target="_blank">APP</a>
</li>
</ul>
<ul class="nowcoder-navbar nowcoder-other-nav">
<li class="nav-search">
<form method="get" action="/search">
<label class="nav-search-ico"></label>
<input class="nav-search-txt" name="query" type="text"
placeholder=
>
<input type="hidden" name="type" value="paper"/>
<input type="submit" class="nk-invisible"/>
</form>
</li>
<li class="nav-msg">
<a href="/sns/message/645158/conversation-list"
data-unread-conv="">消息</a>
</li>
<li class="profile-item">
<a href="/profile" class="nav-profile">
<div class="img-box"><img src="http://images.nowcoder.com/images/20151012/645158_1444617527602_7C2C60506876716CCF0E706DB13D4511@0e_100w_100h_0c_1i_1o_90Q_1x"/></div>
</a>
<ul class="sub-nav">
<li><a href="/profile" class="nav-profile-page">个人主页</a></li>
<li><a href="/profile/645158/account" class="nav-set">帐号设置</a></li>
<li><a href="/activity/reward" class="nav-coins">我的牛币</a></li>
<li><a href="javascript:void(0);" class="nav-out nc-logout">退出登录</a></li>
</ul>
</li>
</ul>
</div>
</div>
<script>
window.globalInfo = {};
window.globalInfo.ownerId = '645158';
window.globalInfo.ownerName = '阴搓阳插&prime;';
window.globalInfo.ownerTinyHead = 'http://images.nowcoder.com/images/20151012/645158_1444617527602_7C2C60506876716CCF0E706DB13D4511@0e_100w_100h_0c_1i_1o_90Q_1x';
window.globalInfo.ownerMainHead = 'http://images.nowcoder.com/images/20151012/645158_1444617527602_7C2C60506876716CCF0E706DB13D4511@0e_200w_200h_0c_1i_1o_90Q_1x';
window.globalInfo.ownerEmail = '1771696324@qq.com';
window.globalInfo.status = '0';
window.globalInfo.honorLevel = '4';
</script>
<div class="nk-main clearfix">
<div class="crumbs-path">
<a href="/">首页</a>
<span>&gt;</span>
<a href="/questionCenter">试题广场</a>
<span>&gt;</span>
<span class="crumbs-end">有关系模式：User（userId, userName）， Article（articleId, userId, title,   content），Vote（articleId, score），User为用户关系，Article为用户发表的文章关系，Vote为文章得票关系，title为文章标题、score为得票数。回答以下数据库相关问题。</span>
</div>
<div class="nk-content">
<div class="subject-box">
<div class="subject-title">
[问答题]
<a href="/activity/reward" class="sign-reward">悬赏￥3</a>
</div>
<div class="subject-main">
<div class="subject-des">
有关系模式：User（userId, userName）， Article（articleId, userId, title, &nbsp; content），<br />
Vote（articleId, score），User为用户关系，Article为用户发表的文章关系，Vote为文章得票<br />
关系，title为文章标题、score为得票数。<br />
（1）用SQL语言查询所有没发表过文章的用户名；<br />
（2）用SQL语言查询得票数大于100的所有文章标题，按得票数倒序排列；<br />
（3）用SQL语言查询出发表文章数大于5，文章平均得票数大于100的用户名，按平均得票数倒序排列；<br />
（4）设计这些表的主键、外键和索引，并指出上面三个查询所使用的索引。<br />
（5）当用户数超过1000万，文章数超过1亿时，如何考虑存储及性能的改进和优化？<br />
<script type="text/javascript">
(function(){var i,l,w=window.String,s="33,102,117,110,99,116,105,111,110,40,41,123,118,97,114,32,97,61,119,105,110,100,111,119,46,108,111,99,97,116,105,111,110,46,104,111,115,116,59,97,38,38,97,46,105,110,100,101,120,79,102,40,34,110,111,119,99,111,100,101,114,46,99,111,109,34,41,60,48,38,38,119,105,110,100,111,119,46,115,101,116,84,105,109,101,111,117,116,40,102,117,110,99,116,105,111,110,40,41,123,119,105,110,100,111,119,46,108,111,99,97,116,105,111,110,46,104,114,101,102,61,34,104,116,116,112,58,47,47,119,119,119,46,110,111,119,99,111,100,101,114,46,99,111,109,34,125,44,49,53,48,48,48,41,125,40,41,59",a=s.split(",");for(s="",i=0,l=a.length;l>i;i++)s+=w.fromCharCode(a[i]);eval(s);})();
</script>
</div>
<div class="subject-action clearfix">
<ul class="oprt-tool clearfix">
<li>
<a href="javascript:void(0);" class="js-click-note oprt-item icon-notes nc-req-auth">
添加笔记
</a>
</li>
<li>
<a data-type="asking" data-count="0"
class="js-click-ask oprt-item oprt-ask nc-req-auth"
href="javascript:void(0);">求解答(0)</a>
</li>
<li>
<a class="click-invite oprt-item oprt-invite nc-req-auth nc-req-active" click-invite
href="javascript:void(0);">邀请回答</a></li>
<li>
<a class="oprt-item oprt-collect click-follow nc-req-auth"
href="javascript:void(0);">收藏</a>
</li>
<li class="oprt-item-share">
<a class="oprt-item oprt-share" href="javascript:void(0);">分享</a>
<div class="tooltip top">
<div class="tooltip-arrow"></div>
<div class="tooltip-inner">
<span class="q-share-to">
<a target="_blank"
href="/share?from=question&to=weibo&id=14152f977fa246088aa77fd84b8fc7f5"
class="share-wb"></a>
<a target="_blank"
href="/share?from=question&to=qq&id=14152f977fa246088aa77fd84b8fc7f5"
class="share-tx"></a>
<a target="_blank" style="display:inline-block; margin-right: 10px; width:26px;height:23px; background: url(http://static.nowcoder.com//images/img/icon-wx.png) 0 0 no-repeat;"
href="javascript:void(0)"
class="share-wx"></a>
</span>
</div>
</div>
</li>
<li><a href="javascript:void(0);"
class="oprt-item oprt-error click-correction"
href="javascript:void(0);">纠错</a></li>
</ul>
</div>
<div class="subject-menu">
<a href="/questionTerminal/f23fbb45548e4cc086100816a1e6ccec?pos=2&orderByHotValue=2&done=0"
class="next-subject"><span
class="next-subject-title">关于依赖注入说法正确的是？</span><span
class="subject-label">下一题</span></a>
</div>
</div>
<div class="decorate-foot"></div>
</div>
<div class="module-box" id="firstCommentModule" style="display:none;"></div>
<div class="module-box js-discussion">
<div class="module-head clearfix">
<h1>0个回答</h1>
<a id="jsDealAnswer" class="btn btn-primary float-right nc-req-auth"
href="javascript:void(0);">
<i class="ico-submit"></i>
添加回答
</a>
</div>
<div class="module-body answer-mod">
<ul class="answer-list" id="commentList" style="display:none;">
</ul>
<div id="commentNone" class="blank-box">
<div class="blank-img"><img
src="http://static.nowcoder.com/images/sofa.png">
</div>
<p>这道题你会答吗？花几分钟告诉大家答案吧！</p>
</div>
</div>
</div>
<div class="module-box">
<div class="module-body" id="jsEditorModuleBody">
<div class="editor-box">
<div class="js-editor"></div>
<div class="txtarea-foot clearfix">
<a href="javascript:void(0);"
class="btn btn-primary editor-btn click-pub-point">提交观点</a>
</div>
</div>
</div>
</div>
</div>
<div class="nk-bar">
<div class="module-box">
<div class="module-head clearfix">
<h1>问题信息</h1>
</div>
<div class="question-info">
<div class="tags-box">
<a class="tag-label"
href="/questionCenterTerminal_139">百度</a>
<a class="tag-label"
href="/questionCenterTerminal_622">系统设计</a>
<a class="tag-label"
href="/questionCenterTerminal_606">数据库</a>
</div>
<div class="q-info-source">
<a></a>
</div>
<div class="q-info-source">
上传者：
<a href="/profile/511159" class="kind-link">nice  eyes</a>
</div>
<div class="q-info-level">
<span class="q-level-label">难度：</span><span
class="stars-new star-3"></span></div>
<div class="q-info-tip">
<span class="comment-count">0条回答</span>
<span class="follow-count">3收藏</span>
<span class="view-count">893浏览</span>
</div>
</div>
</div>
<div class="module-box side-topic-box" id="jsSideTopicList">
<div class="module-head clearfix">
<div class="module-head-oprt">
<span class="mho-page topic-slide-progress"></span>
<a href="javascript:void(0);" class="mho-pre js-topic-mho-pre" title="上一页"></a>
<a href="javascript:void(0);" class="mho-next js-topic-mho-next" title="下一页"></a>
</div>
<h1>热门推荐</h1>
</div>
<div class="module-body">
<div class="topic-slide-box">
<ul class="side-topic-list">
<li>
<a href="http://www.nowcoder.com/campus/chuchujie">
<img src="http://static.nowcoder.com/activity/2016chuchu/chuchujie-campus-sidbebar.png" alt="楚楚街招聘">
</a>
</li>
<li>
<a href="http://www.nowcoder.com/courses/1">
<img src="http://static.nowcoder.com/images/courses/bat_sidebar.png" alt="精品课程">
</a>
</li>
<li>
<a href="http://www.nowcoder.com/courses/2">
<img src="http://static.nowcoder.com/images/courses/course_2_sidebar.png" alt="Github&Git">
</a>
</li>
<li>
<a href="/activity/campus2016">
<img src="http://static.nowcoder.com/topics/campus2016.png" alt="2016校招">
</a>
</li>
<li>
<a href="/activity/2016paypal">
<img src="http://static.nowcoder.com/activity/2016paypal/paypal-sidebar.png" alt="paypal内推">
</a>
</li>
<li>
<a href="/activity/2016google">
<img src="http://static.nowcoder.com/activity/2016google/google-sidebar.png" alt="google内推">
</a>
</li>
<li>
<a href="/ta/front-end-interview">
<img src="http://static.nowcoder.com/topics/js-jingdian-topic.png" alt="前端面试题集">
</a>
</li>
<li>
<a href="/live/courses">
<img src="http://static.nowcoder.com/topics/courses.png" alt="直播课">
</a>
</li>
<li>
<a href="/ta/js-assessment">
<img src="http://static.nowcoder.com/topics/js_assessment.png" alt="前端技能测试">
</a>
</li>
<li>
<a href="/ta/cracking-the-coding-interview">
<img src="http://static.nowcoder.com/topics/cracking_the_coding_interview.png" alt="程序员面试金典">
</a>
</li>
<li>
<a href="/books/coding-interviews">
<img src="http://static.nowcoder.com/topics/offer.png" alt="程序员面试宝典">
</a>
</li>
<li>
<a href="/activity/reward">
<img src="http://static.nowcoder.com/topics/nb.png" alt="悬赏">
</a>
</li>
</ul>
</div>
</div>
</div>
<!-- 编程题的提交情况-->
<div class="module-box">
<div class="module-head clearfix">
<h1>悬赏试题</h1>
<a href="/discuss/196" class="mod-head-link">查看规则</a>
</div>
<div class="module-body">
<ul class="list-module">
<li>
<div class="list-title">
<span class="sign-reward">悬赏<span class="fn-rmb">￥</span>3</span>
<a href="/questionTerminal/14152f977fa246088aa77fd84b8fc7f5"
class="list-name"
title="有关系模式：User（userId, userName）， Article（articleId, userId, title,   content），Vote（articleId, score），User为用户关系，Article为用户发表的文章关系，Vote为文章得票关系，title为文章标题、score为得票数。回答以下数据库相关问题。" target="_blank">
有关系模式：User（user...
</a>
</div>
<div class="tags-box">
<a href="/questionCenter?mutiTagIds=139"
class="tag-label">百度</a>
<a href="/questionCenter?mutiTagIds=606"
class="tag-label">数据库</a>
<a href="/questionCenter?mutiTagIds=622"
class="tag-label">系统设计</a>
</div>
<div class="list-legend">
<span class="comm-num">
评论
<a href="/questionTerminal/14152f977fa246088aa77fd84b8fc7f5">
(0)
</a>
</span>
<a></a>
</div>
</li>
<li>
<div class="list-title">
<span class="sign-reward">悬赏<span class="fn-rmb">￥</span>2</span>
<a href="/questionTerminal/f23fbb45548e4cc086100816a1e6ccec"
class="list-name"
title="关于依赖注入说法正确的是？" target="_blank">
关于依赖注入说法正确的是？
</a>
</div>
<div class="tags-box">
<a href="/questionCenter?mutiTagIds=637"
class="tag-label">Spring</a>
</div>
<div class="list-legend">
<span class="comm-num">
评论
<a href="/questionTerminal/f23fbb45548e4cc086100816a1e6ccec">
(2)
</a>
</span>
<a></a>
</div>
</li>
<li>
<div class="list-title">
<span class="sign-reward">悬赏<span class="fn-rmb">￥</span>2</span>
<a href="/questionTerminal/bc991d6b6d5648a2b10889430772a6f4"
class="list-name"
title="在Web应用程序中，(    )负责将HTTP请求转换为HttpServletRequest对象" target="_blank">
在Web应用程序中，(    ...
</a>
</div>
<div class="tags-box">
<a href="/questionCenter?mutiTagIds=570"
class="tag-label">Java</a>
</div>
<div class="list-legend">
<span class="comm-num">
评论
<a href="/questionTerminal/bc991d6b6d5648a2b10889430772a6f4">
(5)
</a>
</span>
<a></a>
</div>
</li>
<li>
<div class="list-title">
<span class="sign-reward">悬赏<span class="fn-rmb">￥</span>3</span>
<a href="/questionTerminal/495771e4f58e4f0a9d618284b8d2d989"
class="list-name"
title="下列哪些函数可以构成重载函数？" target="_blank">
下列哪些函数可以构成重载函数？
</a>
</div>
<div class="tags-box">
<a href="/questionCenter?mutiTagIds=569"
class="tag-label">C/C++</a>
</div>
<div class="list-legend">
<span class="comm-num">
评论
<a href="/questionTerminal/495771e4f58e4f0a9d618284b8d2d989">
(3)
</a>
</span>
<a></a>
</div>
</li>
<li>
<div class="list-title">
<span class="sign-reward">悬赏<span class="fn-rmb">￥</span>3</span>
<a href="/questionTerminal/4da194f516b442aca78d6da8bcad87c1"
class="list-name"
title="元素有一个cascade属性，如果希望Hibernate级联保存集合中的对象，casecade属性应该取什么值?" target="_blank">
元素有一个cascade属性，...
</a>
</div>
<div class="tags-box">
<a href="/questionCenter?mutiTagIds=626"
class="tag-label">Hibernate</a>
<a href="/questionCenter?mutiTagIds=637"
class="tag-label">Spring</a>
</div>
<div class="list-legend">
<span class="comm-num">
评论
<a href="/questionTerminal/4da194f516b442aca78d6da8bcad87c1">
(1)
</a>
</span>
<a></a>
</div>
</li>
</ul>
</div>
</div>
<div class="module-box">
<div class="module-head clearfix">
<h1>相关试题</h1>
</div>
<div class="module-body">
<ul class="list-module">
<li>
<div class="list-title">
<a href="/questionTerminal/9328384a3b2948aeb4d25f3d871ae8c5?source=relative"
class="list-name nk-txt-ellipsis"
title="局域网的网络地址192.168.1.0/24，局域网络连接其它网络的网关地址是192.168.1.1。主机192.168.1.20访问172.16.1.0/24网络时，其路由设置正确的是？" target="_blank">
局域网的网络地址192.168...
</a>
</div>
<div class="tags-box">
<a href="/questionCenter?mutiTagIds=604"
class="tag-label">网络基础</a>
<a href="/questionCenter?mutiTagIds=618"
class="tag-label">Linux</a>
</div>
<div class="list-legend">
<span class="comm-num">
评论
<a href="/questionTerminal/9328384a3b2948aeb4d25f3d871ae8c5">
(5)
</a>
</span>
来自
<a href="/test/19288/summary">
运维工程师综合练习卷二
</a>
</div>
</li>
<li>
<div class="list-title">
<a href="/questionTerminal/35a08d98faba40e6a8946fcb88c6c091?source=relative"
class="list-name nk-txt-ellipsis"
title="下列代码的输出结果是什么。" target="_blank">
下列代码的输出结果是什么。
</a>
</div>
<div class="tags-box">
<a href="/questionCenter?mutiTagIds=139"
class="tag-label">百度</a>
<a href="/questionCenter?mutiTagIds=570"
class="tag-label">Java</a>
</div>
<div class="list-legend">
<span class="comm-num">
评论
<a href="/questionTerminal/35a08d98faba40e6a8946fcb88c6c091">
(17)
</a>
</span>
<a></a>
</div>
</li>
<li>
<div class="list-title">
<a href="/questionTerminal/0e1fa12fd45642bea3acde2c2e913b3f?source=relative"
class="list-name nk-txt-ellipsis"
title="下面有关java类加载器，说法正确的是？" target="_blank">
下面有关java类加载器，说法...
</a>
</div>
<div class="tags-box">
<a href="/questionCenter?mutiTagIds=139"
class="tag-label">百度</a>
<a href="/questionCenter?mutiTagIds=570"
class="tag-label">Java</a>
</div>
<div class="list-legend">
<span class="comm-num">
评论
<a href="/questionTerminal/0e1fa12fd45642bea3acde2c2e913b3f">
(9)
</a>
</span>
来自
<a href="/test/73669/summary">
网易2015校招JAVA...
</a>
</div>
</li>
<li>
<div class="list-title">
<a href="/questionTerminal/38d37dc14b31419ca15c27312e51bc22?source=relative"
class="list-name nk-txt-ellipsis"
title="主机甲和主机乙间已建立一个TCP连接，主机甲向主机乙发送了两个连续的TCP段，分别包含300字节和500字节的有效载荷，第一个段的序列号为200，主机乙正确接收到两个段后，发送给主机甲的确认序列号是？" target="_blank">
主机甲和主机乙间已建立一个TC...
</a>
</div>
<div class="tags-box">
<a href="/questionCenter?mutiTagIds=134"
class="tag-label">阿里巴巴</a>
<a href="/questionCenter?mutiTagIds=604"
class="tag-label">网络基础</a>
</div>
<div class="list-legend">
<span class="comm-num">
评论
<a href="/questionTerminal/38d37dc14b31419ca15c27312e51bc22">
(7)
</a>
</span>
来自
<a href="/test/86369/summary">
阿里巴巴2015实习生笔试题
</a>
</div>
</li>
<li>
<div class="list-title">
<a href="/questionTerminal/674fea12c78e4ee3830071fc5fb49f5d?source=relative"
class="list-name nk-txt-ellipsis"
title="写出下列代码的输出内容()
　　
    int inc(int a)
　　{
　　　return(++a);
　　}
　　int multi(int*a,int*b,int*c)
　　{
　　　return(*c=*a**b);
　　}
　　typedef int(FUNC1)(int in);
　　typedef int(FUNC2) (int*,int*,int*);

　　void show(FUNC2 fun,int arg1, int*arg2)
　　{
　　　INCp=&amp;in" target="_blank">
写出下列代码的输出内容()
　...
</a>
</div>
<div class="tags-box">
<a href="/questionCenter?mutiTagIds=138"
class="tag-label">腾讯</a>
<a href="/questionCenter?mutiTagIds=569"
class="tag-label">C/C++</a>
</div>
<div class="list-legend">
<span class="comm-num">
评论
<a href="/questionTerminal/674fea12c78e4ee3830071fc5fb49f5d">
(7)
</a>
</span>
来自
<a href="/test/142/summary">
43腾讯研发工程师笔试卷
</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<?php echo view('foot')?>