<?php

use backend\assets\AppAsset;

$this->title = 'lists';
?>
<style>
    body {overflow-y: scroll;}
</style>
<div id="app" class="layout"  style="margin-left:10px;">
    <Layout>
        <Header>
            <div style="margin:10px 0 0 10px">
<!--                <i-input   placeholder="Enter ……" style="width: 150px" />-->
                <i-input search enter-button="Search" placeholder="small size"  style="width: 300px" />
            </div>
        </Header>
        <Content>
            <div style="margin-top:10px;">
                <i-table style=" width:100%; margin-bottom: 15px;" border :columns="columns1" :data="data1" ></i-table>
            </div>
        </Content>
        <div style="postion:relative;float:right;margin-top:-20px;" id="pager"></div>
    </Layout>
</div>
<?
//var_dump($coupons);

?>

<script src="/static/js/vue/iview.min.js"></script>
<script>
    const app = new Vue({
        el: '#app',
        data: {
            value1: '',
            value2: '',
            value3: '',
            columns1: [
                {
                    title: 'ID',
                    key: 'product_id',
                    width:100
                },
                {
                    title: '名称',
                    key: 'name',
                    width:200
                },
                {
                    title: '类别',
                    key: 'cate',
                    width:80
                },
                {
                    title: '店铺',
                    key: 'storeName',
                    width:80
                },
                {
                    title: '价格',
                        key:'price',
                    width:60
                },
                {
                    title: '券价格',
                    key:'sale',
                    width:60
                },
                {
                    title: '券价格',
                    key:'couponPrice',
                    width:80
                },{
                    title: 'ID',
                    key: 'product_id',
                    width:100
                },
                {
                    title: '名称',
                    key: 'name',
                    width:100
                },
                {
                    title: '类别',
                    key: 'cate',
                    width:80
                },
                {
                    title: '店铺',
                    key: 'storeName',
                    width:80
                },
                {
                    title: '价格',
                    key:'price',
                    width:60
                },
                {
                    title: '券价格',
                    key:'sale',
                    width:60
                },
                {
                    title: '券价格',
                    key:'couponPrice',
                    width:80
                },{
                    title: 'ID',
                    key: 'product_id',
                    width:100
                },
                {
                    title: '名称',
                    key: 'name',
                    width:100
                },
                {
                    title: '类别',
                    key: 'cate',
                    width:80
                },
                {
                    title: '店铺',
                    key: 'storeName',
                    width:80
                },
                {
                    title: '价格',
                    key:'price',
                    width:60
                },
                {
                    title: '券价格',
                    key:'sale',
                    width:60
                },
                {
                    title: '券价格',
                    key:'couponPrice',
                    width:80
                }
            ],
            data1: <?=$coupons?>
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
                if (!this.age) {
                    this.errors.push('Age required.');
                }

                e.preventDefault();
            },
            show:function(){
                console.log('99999999999');
            },
        }
    })
</script>

<script>
    layui.use('laypage', function(){
        var laypage = layui.laypage;
        //执行一个laypage实例
        laypage.render({
            elem: 'pager'
            ,count: 100 //数据总数，从服务端得到
            ,limit:10
            ,jump: function(obj, first){
                //obj包含了当前分页的所有参数，比如：
                console.log(obj.curr); //得到当前页，以便向服务端请求对应页的数据。
                console.log(obj.limit); //得到每页显示的条数

                //首次不执行
                if(!first){
                    //do something
                }
            }
        });
    });

    $(document).ready(function(){
        $('#clid').click(function(){

            layui.use('layer', function(){
                var layer = layui.layer;

                layer.msg('hello');
            });

        });
    });
</script>
