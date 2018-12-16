<?php
namespace backend\controllers\common\upload;

use Yii;
use yii\web\Controller;
use common\models;
use yii\web\UploadFile;

class UploadController extends Controller 
{
    public $enableCsrfValidation = false;
    public function init(){
        $this->enableCsrfValidation = false;
    }
	public	function actionUpload()
	{
	   $model = new UploadForm();
       if (Yii::$app->request->isPost) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if ($model->upload()) {
                // 文件上传成功
                return;
            }
        }
	   return 88;
	}							

}
