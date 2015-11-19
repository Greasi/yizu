<?php 
namespace App\Http\Controllers;
use Session;
//讨论区
class DiscussController extends Controller {


	//主页：帖子列表
	public function index()
	{
		return view('discuss.index');//discuss.htm==>index.php
	}
	//话题发布
	public function post()
	{
		if($value = Session::get('id')){
			return view('discuss.post');//post.htm==>post.php
		}else{
			echo "<script>alert('请登录');location='/login'</script>";
		}
		
	}

	//讨论贴
	public function discuss_all()
	{
		return view('discuss.discuss_all');//discuss_all.htm==>discuss_all.php
	}
}