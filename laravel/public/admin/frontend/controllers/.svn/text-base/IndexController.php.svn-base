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
 * Index controller
 */
class IndexController extends MessageController
{
	
	public function beforeAction($action){

		if(!isset($_SESSION['user_info'])){

			echo $this->error("请登录","index.php?r=public/login",'1');
		}else{
		
			return true;
		}
		
	}

	
	public function actionIndex(){
		//session_destroy();
		$username=$_SESSION['user_info'];
		return $this->renderPartial('index',['username'=>$username]);
	}
}
