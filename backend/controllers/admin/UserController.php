<?php
    namespace  backend\controllers\admin;

    use Yii;
    use yii\db\Query;
    use backend\controllers\AdminController;
    use yii\filters\VerbFilter;
    use yii\filters\AccessControl;
    use common\models\User;
    use common\models\AdduserForm;

     /**
     * coupon controller
     */
    class UserController extends AdminController
    {
        public $enableCsrfValidation = false;
        /**
         * {@inheritdoc}
         */
        public function behaviors()
        {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'actions' => ['lists','checkuserexist','add','adduser','addsass','importexcel','updatestatus'],
                            'allow' => true,
                            'roles' => ['@'],
                        ]
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'logout' => ['post'],
                        't' => ['post'],
                    ],
                ],
            ];
        }

        /**
         * {@inheritdoc}
         */
        public function actions()
        {
            return [
                'error' => [
                    'class' => 'yii\web\ErrorAction',
                ],
            ];
        }

    
        public function actionLists()
        {
	        $query = new Query;
            $res = $query->select(['id', 'username','email','userimg','created_at','updated_at','status','userstatus'])
                        ->from('user')
                        ->orderBy('id')
                        ->all();
            return $this->render('/user/lists',
			['users'=>json_encode($res,JSON_UNESCAPED_UNICODE),
			'role'=>json_encode([['id'=>10,'name'=>'普通用户'],['id'=>2,'name'=>'管理员']],JSON_UNESCAPED_UNICODE)
			]
			);
        }
	
	public function actionAdduser()
	{
	     $user = new AdduserForm();	
	     $user->username = Yii::$app->request->post('username');
	     $user->password = Yii::$app->request->post('password');
             $user->status = Yii::$app->request->post('role');
	     $user->userstatus = Yii::$app->request->post('status');
	     $user->email = Yii::$app->request->post('email');	
	     $user->adduser(false);	
         }

	public function actionUpdatestatus()
	{	
	     $uid = Yii::$app->request->post('uid');	
	     $status = Yii::$app->request->post('status');
	     if($uid > 0 ){
	        $user = User::findOne($uid);     
                $user->userstatus = $status;
	        $user->save();
	     }	
	}		
	public function actionCheckuserexist()
	{
	      $userName = Yii::$app->request->post('uname');
	      $query = new Query();
	      $user = $query->select(['id'])->from('user')->where(['username'=>$userName])->count();
	      if($user > 0){
		 return true;
              }else{
		return false;
	      }
	    
	}	
    }
