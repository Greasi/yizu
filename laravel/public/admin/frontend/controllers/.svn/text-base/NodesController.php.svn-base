<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\mongodb\Query;
use frontend\controllers\MessageController;

/**
 * User controller
 */
class NodesController extends MessageController
{

	public function beforeAction($action){

		if(!isset($_SESSION['user_info'])){

			echo $this->error("请登录","index.php?r=public/login",'1');
		}else{
		
			return true;
		}
	}

        //显示用户管理页面
	public function actionIndex(){
              
		return $this->renderPartial('index');
	}	
}