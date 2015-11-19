<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\mongodb\Query;
use app\models\Company;
use yii\data\Pagination;
use frontend\controllers\MessageController;

/**
 * Type controller
 */
 header("content-type:text/html;charset=utf-8");
class CompanyController extends MessageController
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
		$query = Company::find();
                //var_dump($query);die;
		$pagination = new Pagination([
				'defaultPageSize' => 5,
				'totalCount' => $query->count(),
		]);
		
		$row = $query
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		
		return $this->renderPartial('index', [
				'data'   => $row,
				'pagination' => $pagination,
		]);
	}
        
        //公司添加
	public function actionAdd(){

		return $this->renderPartial('add');
	}
        
        public function actionDoadd()
        {
            $company = new Company;
            $company->c_name=$_POST['c_name'];
            $company->c_show=$_POST['c_show'];
            $company->c_desc=$_POST['c_desc'];
            if($company->save()){
                echo $this->success("添加成功","index.php?r=company",'1');
            }else{
                echo $this->error("添加失败","index.php?r=company",'1');
            }
        }
        
        //公司删除
        public function actionDelete()
        {
            $id = $_GET['id'];
            //$arr=Company::findOne($id);
            //echo $arr['_id'];die;
            if(Company::findOne($id)->delete())
            {
                echo $this->success("删除成功","index.php?r=company",'1');
            }
            else
            {
                echo $this->error("删除失败","index.php?r=company",'1');
            }
        }

}