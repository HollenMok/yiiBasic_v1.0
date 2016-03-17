<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Customers;

class CustomersController extends Controller{
	
	public function actionIndex(){
		 $query = Customers::find();
		 $pagination = new Pagination([
		 		'defaultPageSize'=>5,
		 		'totalCount' =>$query->count(),
		 		]);
		 $customers = $query->orderBy('customers_id')
		 ->offset($pagination->offset)
		 ->limit($pagination->limit)
		 ->all();
		
		 return $this->render('index',[
		 		'customers'=>$customers,
		 		'pagination'=>$pagination,
		 		]);
	}
    
}

   