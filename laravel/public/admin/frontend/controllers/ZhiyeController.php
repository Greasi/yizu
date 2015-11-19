<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\mongodb\Query;
use app\models\Zhiye;
use yii\data\Pagination;
use frontend\controllers\MessageController;

/**
 * Type controller
 */
 header("content-type:text/html;charset=utf-8");
class ZhiyeController extends MessageController
{

	public function beforeAction($action){

		if(!isset($_SESSION['user_info'])){

			echo $this->error("请登录","index.php?r=public/login",'1');
		}else{
		
			return true;
		}	
	}
        
        //职业首页
	public function actionIndex(){

		$query = Zhiye::find();
                //var_dump($query);die;
		$pagination = new Pagination([
				'defaultPageSize' => 5,
				'totalCount' => $query->count(),
		]);
		
		$row = $query
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		
                print_r( $pagination);
		return $this->renderPartial('index', [
				'data'   => $row,
				'pagination' => $pagination,
		]);
	}
        
        //职业添加
	public function actionAdd(){

		return $this->renderPartial('add');
	}
        
        public function actionDoadd()
        {
            $zhiye = new Zhiye;
            $zhiye->z_name=$_POST['z_name'];
            $zhiye->z_show=$_POST['z_show'];
            $zhiye->z_desc=$_POST['z_desc'];
            if($zhiye->save()){
                echo $this->success("添加成功","index.php?r=zhiye",'1');
            }else{
                echo $this->error("添加失败","index.php?r=zhiye",'1');
            }
        }
        
        //职业删除
        public function actionDelete()
        {
            $id = $_GET['id'];
            //$arr=Company::findOne($id);
            //echo $arr['_id'];die;
            if(Zhiye::findOne($id)->delete())
            {
                echo $this->success("删除成功","index.php?r=zhiye",'1');
            }
            else
            {
                echo $this->error("删除失败","index.php?r=zhiye",'1');
            }
        }

}