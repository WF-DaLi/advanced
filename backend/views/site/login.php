<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login col-md-4 col-md-offset-3"  style="background:dimgray;margin-top:80px;width:50%" >
    <div style="padding-top:20px;width:100%;text-align: center;position: relative">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <div class="row ">
        <div class="col-md-5 col-md-offset-3" style="margin-top:10px;width:60%;padding-top:10px;position:relative;">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group col-md-offset-4">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

            </div>


                    <?php ActiveForm::end(); ?>


    </div>
<!---->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control" id="uname" placeholder=" name">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="password" class="form-control" id="upwd" placeholder="password">-->
<!--                name: --><?//= $form->field($model, 'password') ?>
<!--                --><?//= $form->field($model, 'username')->textInput()->hint('Please enter your name')->label('Name') ?>
<!--            </div>-->
<!--            <div class="form-group col-md-offset-1" style="margin-top:20px;">-->
<!--                <input type="button" class="btn  btn-default"  value="sign up">&nbsp;&nbsp;&nbsp;-->
<!--                <input type="button" class="btn  btn-default col-md-offset-2"  value="login">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
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
