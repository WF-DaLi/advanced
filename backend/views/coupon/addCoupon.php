<?php

/* @var $this yii\web\View */

$this->title = 'addd';
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="row">
    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(['id' => 'coupon-form']); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'num')->textInput(['autofocus' => true]) ?>
        <div class="form-group">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

