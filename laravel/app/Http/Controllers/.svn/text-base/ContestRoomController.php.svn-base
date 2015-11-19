<?php namespace App\Http\Controllers;

use App\Zhiye;
use App\Company;
use App\Time;
use App\Http\Controllers\Controller;

//题库
header('content-type:text/html;charset=utf8');
class ContestRoomController extends Controller {

	
    //主页(公司真题)
    public function index()
    {
        $data['is_showzhiye'] = Zhiye::where('z_show','=','1')->get();
        $data['allzhiye'] = Zhiye::all();
        $data['is_showcompany'] = Company::where('c_show','=','1')->get();
        $data['allcompany'] = Company::all();
        $data['alltime'] = Time::all();
        return view('contestRoom.index',$data);
    }

    //精华专题
    public function topics(){
        return view('contestRoom.topics');
    }

    //试题广场
    public function questionCenter(){
        return view('contestRoom.questionCenter');
    }

    //试题广场--》题
    public function questionTerminal(){
        return view('contestRoom.questionTerminal');
    }

    //在线编程
    public function oj(){
        return view('contestRoom.oj');//oj.htm=>oj.php
    }

    //专项练习
    public function intelligentTest(){
        return view('contestRoom.intelligentTest');//intelligentTest.htm=>intelligentTest.php
    }

    //题库答题
    public function question(){
        return view('contestRoom.answerquestion');//answerquestion.htm=>question.php
    }
}