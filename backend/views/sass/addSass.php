<?php

/* @var $this yii\web\View */

$this->title = 'add sass';
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div id="app" >
    <div class="m-title">
        添加 sass 来源
    </div>
    <div class="col-lg-6 " style="margin-top:10px;">
        <i-form :model="sassName" :label-width="80">
            <Form-item label="name">
                <i-input v-model="sassName" placeholder="sass 来源..." id="sass_name" ></i-input>
            </Form-item>
            <Form-item>
                <i-button type="primary" v-on:click="addsass(sassName)">Submit</i-button>
            </Form-item>
        </i-form>
    </div>
</div>
<script>
    const app = new Vue({
        el: '#app',
        data: {
            sassName:''
        },
        methods:{
            checkForm: function (e) {
                if (this.name && this.age) {
                    return true;
                }
                this.errors = [];
                if (!this.name) {
                    this.errors.push('Name required.');
                }
                e.preventDefault();
            },
            addsass:function(sassName){
                var _this = this;
                if(sassName != ''){
                    $.post('index.php?r=sass/sass/addsass',{name:sassName},function(){
                        layui.use(['layer'], function(){
                            var layer = layui.layer;
                            layer.confirm(
                                '操作成功',
                                 {
                                     title:'提示',
                                     btn:['确定'],
                                     closeBtn: 0,  
                                     icon:1
                                 },
                                 function(){
                                    window.location = 'index.php?r=sass/sass/lists';
                                 })
                        });
                    });
                }
                },
            }
    })
</script>
