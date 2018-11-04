<?php
    namespace  backend\controllers;
    use Yii;
    use yii\web\Controller;
    use yii\filters\VerbFilter;
    use yii\filters\AccessControl;
    use yii\data\Pagination;
    use backend\models\coupon\Coupon;
    use backend\models\coupon\CouponForm;
    use yii\web\Response;
    use \PhpOffice\PhpSpreadsheet\IOFactory;	  

     /**
     * coupon controller
     */
    class CouponController extends Controller
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
                            'actions' => ['lists','add','addsass','t','importexcel'],
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
	

//	$phpExcel =  new IOFactory();
	$excelReader = IOFactory::createReader('Xlsx');
	$excelSheet = $excelReader->load('/tmp/abc.xlsx');
	$currentSheet = $excelSheet->getActiveSheet();
	$rowNum = $currentSheet->getHighestRow();
	var_dump($rowNum);die;
	
	var_dump($nt);die;
         var_dump($ok);die;


            $query = Coupon::find();
            $pagination = new Pagination([
                'defaultPageSize' => 5,
                'totalCount' => $query->count(),
            ]);

            $res = $query->orderBy('product_id')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
            $coupons = [];
            if(!empty($res)){
                $nt ;
                foreach($res as $couponItem){
                    $coupon['product_id'] = $couponItem['product_id'];
                    $coupon['name'] = $couponItem['name'];
                    $coupon['mainpic'] = $couponItem['mainpic'];
                    $coupon['itemUrl'] = $couponItem['itemUrl'];
                    $coupon['cate'] = $couponItem['cate'];
                    $coupon['price'] = $couponItem['price'];
                    $coupon['tbkUrl'] = $couponItem['tbkUrl'];
                    $coupon['couponPrice'] = $couponItem['couponPrice'];
                    $coupon['sale'] = $couponItem['sale'];
                    $coupon['storeId'] = $couponItem['storeId'];
                    $coupon['storeName'] = $couponItem['storeName'];
                    $coupon['couponId'] = $couponItem['couponId'];
                    $coupon['sass'] = '天猫';
                    $nt = $coupon;
                }
                for($i =0;$i<5;$i++){
                    $coupons[] = $nt;
                }
           }
            return $this->render('/coupon/index', [
                'coupons' => json_encode($coupons,JSON_UNESCAPED_UNICODE ),
                'data'=>999,
                'pagination' => $pagination,
            ]);
        }
        public function actionAdd()
        {
            $vars = Yii::$app->request->post();
//            var_dump($vars);die;
            $model = new CouponForm();
            return $this->render('/coupon/addCoupon', [ 'model' => $model]);
        }

        public function action()
        {
            return $this->render('/coupon/addSass');
        }
        public function actionT()
        {
            $sassName = Yii::$app->request->post('name');
            if(!empty($sassName)){
                $sass = new Sass();
                $sass->name = $sassName;
                $sass->save();
            }
            $response = new Response();
            $response->send();
        }
	public function actionImportexcel($type)
	{	
	    
		$excelReader = IOFactory::createReader('Xls');
		$excelSheet = $excelReader->load('/tmp/ddd.xls');
		$currentSheet = $excelSheet->getActiveSheet();
		$rowNum = $currentSheet->getHighestRow();
		var_dump($rowNum);die;
	
	}





    }
