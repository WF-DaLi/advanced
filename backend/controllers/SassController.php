<?php
    namespace  backend\controllers;

    use Yii;
    use yii\db\Query;
    use yii\web\Controller;
    use yii\filters\VerbFilter;
    use yii\filters\AccessControl;
    use backend\models\sass\Sass;

     /**
     * coupon controller
     */
    class SassController extends Controller
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
                            'actions' => ['lists','add','addsass','importexcel'],
                            'allow' => true,
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
	        $query = new Query;//Sass::find();
            $res = $query->select(['id', 'name','status'])
                        ->from('sass')
                        ->orderBy('id')
                        ->all();
            return $this->render('/sass/lists',['sass'=>json_encode($res,JSON_UNESCAPED_UNICODE )]);
        }
        public function actionAdd()
        {
            return $this->render('/sass/addSass');
        }

        public function actionAddsass()
        {
            $sassName = Yii::$app->request->post('name');
            if(!empty($sassName)){
                $sass = new Sass();
                $sass->name = $sassName;
                $sass->save();
            }
        }
    }
