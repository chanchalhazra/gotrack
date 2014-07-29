<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class ApiController extends Controller
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

public function actionView()
{
    
}

public function actionList()
{
    console.log(" Hello Api");
    switch ($_GET['model']) 
    {
        case 'customers':
            $models = Customers::model()->findAll();

            break;

        default:
            $this->sendResponse('501', spintf('Error: Mode <b>list</b> is not implemented for model <b>%s</b>',
                $_GET['model']) );
            yii::app()->end();
            
    }
    
    if(empty($models))
    {
        $this->sendRensponse('200', sprintf('no items were found for model <b>%s</b>', $_GET['model']));
    }
    else
    {
        $rows = array();
        foreach($models as $model)
            $rows[]=$model->attributes;
        $this->sendResponse('200', CJSON::encode($rows));
    }
}

public function actionUpdate()
{
    
}

public function actionDelete()
{
    
}

private function sendResponse($status, $body,$content_type='text/html')
{
    $status_header = 'HTTP/1.1'.$status.' '.$this->getStatusMessage($status);
    header($status_header);
    header($content_type);
    
    if($body !='')
    {
        echo $body;
    }
    else
    {
        $message='';
        switch($status)
         {
            case 401:
                $message = 'You must be authorized to view this page.';
                break;
            case 404:
                $message = 'The requested URL ' . $_SERVER['REQUEST_URI'] . ' was not found.';
                break;
            case 500:
                $message = 'The server encountered an error processing your request.';
                break;
            case 501:
                $message = 'The requested method is not implemented.';
                break;
        }
    $signature = ($_SERVER['SERVER_SIGNATURE'] == '') ? $_SERVER['SERVER_SOFTWARE'] . 
            ' Server at ' . $_SERVER['SERVER_NAME'] . ' Port ' . $_SERVER['SERVER_PORT'] : $_SERVER['SERVER_SIGNATURE'];
 
        // this should be templated in a real-world solution
        $body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
                <html>
                    <head>
                     <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
                         <title>' . $status . ' ' . $this->_getStatusCodeMessage($status) . '</title>
                    </head>
                    <body>
                         <h1>' . $this->_getStatusCodeMessage($status) . '</h1>
                             <p>' . $message . '</p>
                         <hr />
                             <address>' . $signature . '</address>
                    </body>
                    </html>';
 
        echo $body;
    }
    Yii::app()->end();

}

private function getStatusMessage($status_code)
{
     $codes = Array(
        200 => 'OK',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
    );
     
     return(isset($code[$status_code])? $code[$status_code]:'');
}
}