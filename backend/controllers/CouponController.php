<?php
    namespace  backend\controllers;
    use Yii;
    use yii\web\Controller;
    use yii\filters\VerbFilter;
    use yii\filters\AccessControl;
    use backend\models\coupon\CouponForm;

     /**
     * coupon controller
     */
    class CouponController extends Controller
    {
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
                            'actions' => ['lists','add'],
                            'allow' => true,
                        ]
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'logout' => ['post'],
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
            return $this->render('/coupon/index');
        }
        public function actionAdd()
        {
            $vars = Yii::$app->request->post();
//            var_dump($vars);die;
            $model = new CouponForm();
            return $this->render('/coupon/addCoupon', [ 'model' => $model]);
        }

    }