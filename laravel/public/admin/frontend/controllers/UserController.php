<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\mongodb\Query;
use app\models\AdminUser;
use frontend\controllers\MessageController;

/**
 * User controller
 */
class UserController extends MessageController
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
                $query = new Query;
                $query->select(["username","password"])->from("admin_user");
                $re=$query->all();
				//print_r($re);die;
		return $this->renderPartial('index',["data"=>$re]);
	}
        
        //添加后台用户
        public function actionAdd()
        {
            return $this->renderPartial('add');
        }
        public function actionDoadd()
        {
            $adminuser = new AdminUser;
            $adminuser->username=$_POST['username'];
            $adminuser->password=md5($_POST['password']);
            if($adminuser->save()){
                echo $this->success("添加成功","index.php?r=user",'1');
            }else{
                echo $this->error("添加失败","index.php?r=user",'1');
            }
        }
}