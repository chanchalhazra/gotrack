<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class RestApiController extends Controller
{
    

Const Application_id = '6464';


private $format = 'json';

public function filters()
{
    return array();
}

public function actionCreate()
{
    
}

public function actionList()
{
    
}

public function actionView()
{
    switch ($_GET['model']) 
    {
        case 'customers':
            $models = Customers::model()->findAll();

            break;

        default:
            $this->_sendResponse('501', spintf('Error: Mode <b>list</b> is not implemented for model <b>%s</b>',
                $_GET['model']) );
            yii::app()->end();
            break;
    }
    
    if(empty($models))
    {
        $this->_sendRensponse('200', sprintf('no items were found for model <b>%s</b>', $_GET['model']));
    }
    else
    {
        $rows = array();
        foreach($models as $model)
            $rows[]=$model->attributes;
        $this->_sendResponse('200', CJSON::encode($rows));
    }
}

public function actionUpdate()
{
    
}

public function actionDelete()
{
    
}

}