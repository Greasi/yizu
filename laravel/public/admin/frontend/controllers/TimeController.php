<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\mongodb\Query;
use app\models\Time;
use yii\data\Pagination;
use frontend\controllers\MessageController;

/**
 * Type controller
 */
 header("content-type:text/html;charset=utf-8");
class TimeController extends MessageController
{

	public function beforeAction($action){

		if(!isset($_SESSION['user_info'])){

			echo $this->error("请登录","index.php?r=public/login",'1');
		}else{
		
			return true;
		}	
	}
        
        //公司主页
	public function actionIndex(){
		$query = Time::find();
                //var_dump($query);die;
		$pagination = new Pagination([
				'defaultPageSize' => 5,
				'totalCount' => $query->count(),
		]);
		
		$row = $query
                ->orderBy('_id desc')
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		
		return $this->renderPartial('index', [
				'data'   => $row,
				'pagination' => $pagination,
		]);
	}
        
        //时间添加
	public function actionAdd(){
            return $this->renderPartial('add');
	}
        
        public function actionDoadd()
        {
            $time = new Time;
            $time->t_name=$_POST['t_name'];
            if($time->save()){
                echo $this->success("添加成功","index.php?r=time",'1');
            }else{
                echo $this->error("添加失败","index.php?r=time",'1');
            }
        }
        
        //时间删除
        public function actionDelete()
        {
            $id = $_GET['id'];
            //$arr=Company::findOne($id);
            //echo $arr['_id'];die;
            if(Time::findOne($id)->delete())
            {
                echo $this->success("删除成功","index.php?r=time",'1');
            }
            else
            {
                echo $this->error("删除失败","index.php?r=time",'1');
            }
        }

}