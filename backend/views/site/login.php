<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div style="color:#999;margin:1em 0">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
            </div>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


<script src="/assets/11ef7736/jquery.js"></script>




<!--<div class="layui-main">-->
<!---->
<!--                <div class="layui-bg-black">-->
<!--                sssssssssssssssssssssssssssssssssssssssssss-->
<!--            </div>-->
<!--</div>-->
<!--<input type= button  id="nk" value="click">-->


<script>
    $(document).ready(function(){
        $('#nk').click(function(){

            layui.use('layer', function(){
                var layer = layui.layer;

                layer.msg('hello');
            });

        });
    });



    // window.onload(function(){
    //     layer.open({
    //         title: '在线调试'
    //         ,content: '可以填写任意的layer代码'
    //     });
    //     layer.confirm(
    //         '操作成功',
    //         {
    //             title:'提示',
    //             btn:['确定'],
    //             closeBtn: 0,
    //             icon: 1
    //         },
    //         function(){
    //             window.location = '';
    //         }
    //     )
    // })

</script>
