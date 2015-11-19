<?php namespace App\Http\Controllers;

use App\User;
use Session;
use App\Http\Requests\DoRegisterRequest;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
header('content-type:text/html;charset=utf8');
class WelcomeController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    //主页
    public function index()
    {
        if(Session::get('id')==""){
            return view('welcome');
        }else{
            return view('alreadyLogin');
        }
        //mongo测试
        $user = User::all()->toarray();
        print_r($user);
        
        //session测试
        $value = Session::get('id');
        print_r($value);
    }

    //登录
    public function login()
    {
        return view('login');
    }
    public function dologin(DoRegisterRequest $request)
    {
        $data = $request->all();
        //print_r($data['email']);die;
        $arr = User::where('email','=',$data['email'])->get()->toarray();
        //print_r($arr);die;
        if($arr){
            if($arr[0]['password'] != md5($data['password'])){
               echo "<script>alert('密码错误');location='login'</script>";
               die;
            }else{
               Session::put('id', $arr[0]['_id']);
               Session::put('email', $arr[0]['email']);
               return redirect('/');
            }
        }else{
            echo "<script>alert('用户名不存在');location='login'</script>";
            die;
        }
    }
    public function loginout()
    {
        Session::forget('id');
        echo "<script>alert('退出成功');location='/'</script>";
    }

    //注册
    public function register()
    {
        return view('register');
    }
    public function doregister(DoRegisterRequest $request)
    {
        $data = $request->all();
        //print_r($data['captcha']);die;
        if(Session::get('milkcaptcha') != $data['captcha']){
            echo "<script>alert('验证码错误');location='register'</script>";
            die;
        }else{
            if($data['password'] != $data['password_confirmation']){
                echo "<script>alert('输入密码不一致');location='register'</script>";
                die;
            }else{
                $user = new User;
                $user->email=$data['email'];
                $user->password=md5($data['password']);
                if($user->save()){
                    return redirect('login');
                }else{
                    return redirect('register');
                }
            }
        }
    }
    
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 90, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        return response($builder->output())->header('Content-type','image/jpeg');
    }

}
