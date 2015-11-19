<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\mongodb\Query;
use frontend\controllers\MessageController;

/**
 * Public controller
 */
class PublicController extends MessageController
{

	/*public function beforeAction($action){

		if(isset($_SESSION['user_info'])){

			echo $this->error("您已经登陆","index.php?r=index/index",'1');
			
		}else{

			return true;
		}
		//var_dump($_SESSION);
	}*/


	public function actionIndex(){

		return $this->renderPartial('login');
	}

        //登录
	public function actionLogin(){
		
		return $this->renderPartial('login');
	}

	public function actionCheck_login(){
		//print_r($_POST);
		$username=$_POST['username'];
		$arr=array('username'=>$username);
		$query = new Query;		
		$query->select(['username','password'])
			  ->from('admin_user')
			  ->where($arr);		
		$rows = $query->all();
		//echo $rows[0]['password'];die;
		if($rows){
			if($rows[0]['password']==md5($_POST['password'])){

				 $_SESSION['user_info'] = $username;

				 echo $this->success("登陆成功","index.php?r=index/index",'1');

			}else{
				 
				 echo $this->error("密码错误，登陆失败","index.php?r=public/login",'1');
			}			
		}else{

			 echo $this->error("账号错误，登陆失败","index.php?r=public/login",'1');
		}
		
	}
	public function actionLogin_out(){
		$session = \Yii::$app->session;
		$session->remove('user_info');
		echo $this->success("退出成功","index.php?r=public/login",'1');
	}
        
}