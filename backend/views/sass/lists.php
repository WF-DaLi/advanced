<?php

use backend\assets\AppAsset;

$this->title = 'Sass lists';
?>
<style>
    /*body {overflow-y: scroll;}*/
</style>
<div id="app" class="layout"  style="margin-left:10px;">
    <Layout>
        <Content>
            <i-button type="success" style="margin:10px 5px 0 10px;" v-on:click="addsass()">新增sass记录</i-button>
            <div style="margin-top:10px;">
                <i-table style=" width:100%; margin-bottom: 15px;" border :columns="columns1" :data="data1" ></i-table>
            </div>
        </Content>
<!--        <div style="margin-top:-20px;" id="pager"></div>-->
    </Layout>
</div>

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
                    key: 'id',
                    width:100
                },
                {
                    title: 'sass名称',
                    key: 'name',
                    width:200
                },
                {
                    title: '状态',
                    key:'status',
                    render:function (h,param) {
                        var status = '',  dstatus = param.row.status;
                        if(dstatus ==1 ){
                           status = '启用';
                        }else{
                            status = '禁用';
                        }
                        return h('span',status);
                    }
                },
                {
                    title:"操作",
                    render:function (h,param) {
                       var opt = [
                            h('a',{
                            attrs:{
                                "href":"http://www.1111111111",
                            }
                        },'启用'),
                            h('a',{
                                attrs:{
                                    "href":"http://www.22222222222222",
                                },
                                style:{
                                    marginLeft:"10px",
                                }
                            },'禁用')

                        ];
                       return h('span',opt)
                    }
                }
            ],
            data1: <?=$sass?>
        },
        methods:{
            addsass: function () {
                window.location = 'index.php?r=sass/add';
            }
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

//    $(document).ready(function(){
//        $('#clid').click(function(){
//            layui.use('layer', function(){
//                var layer = layui.layer;
//                layer.msg('hello');
//            });
//
//        });
//    });
</script>
