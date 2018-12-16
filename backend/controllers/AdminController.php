<?php
namespace  backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * admin controller
 */
class AdminController extends Controller
{

        public $user = '';
        public $uid = 0 ;

        public function init()
        {
//            var_dump(\Yii::$app->authManager);die;
            $this->user = Yii ::$app->user->identity->username?? '';
	    //$this->user = 'admin';
        }







}
