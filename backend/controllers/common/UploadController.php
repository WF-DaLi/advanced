<?php
namespace backend\controllers\common;

use Yii;
use yii\web\Controller;
use common\models\UploadForm;
use yii\web\UploadedFile;

class UploadController extends Controller 
{
//    public function init(){
//        $this->enableCsrfValidation = false;
//    }
	public	function actionUpload()
	{
	   $model = new UploadForm();
       if (Yii::$app->request->isPost) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if ($model->upload()) {
                // 文件上传成功
                return $model->filePath;
            }
        }
	}							

}
