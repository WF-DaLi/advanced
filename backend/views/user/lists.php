<?php

use backend\assets\AppAsset;

$this->title = '用户列表';
?>
<style>
</style>
<div id="app" class="layout"  style="margin-left:10px;">
    <Layout>
        <Content>
            <i-button type="success" style="margin:10px 5px 0 10px;" v-on:click="updateuser()">新增用户</i-button>
            <div style="margin-top:10px;">
                <i-table style=" width:100%; margin-bottom: 15px;" border :columns="users_column" :data="users" ></i-table>
            </div>
        </Content>
<!--        <div style="margin-top:-20px;" id="pager"></div>-->
    </Layout>

    <Modal
     v-model="isShow"
    title="添加用户"
    width="360"
     height = "700"
    >
    <div class="form-group">
        <label class="col-sm-3">name:</label>
        <div class="col-sm-8" style="margin-left:-20px;height:10px;">
            <i-input type="text" value="sdsfsdfsd">
        </div>
    </div><br>
        <div class="form-group">
            <label class="col-sm-3">pwd:</label>
            <div class="col-sm-8" style="margin-left:-20px;">
                <i-input type="text" value="sdsfsdfsd">
            </div>
        </div><br>
        <div class="form-group">
            <label class="col-sm-3">角色:</label>
            <div class="col-sm-8" style="margin-left:-20px;">
                <i-select v-model="role">
                    <option></option>
                </i-select>
            </div>
        </div><br>
        <div class="form-group">
            <label class="col-sm-3">状态:</label>
            <div class="col-sm-8" style="margin-left:-20px;">
               <i-select v-model="role">
                   <option>启用</option>
                   <option>禁用</option>
               </i-select>
            </div>
        </div><br>
<!--    <div class="form-group">-->
<!--        <div class="col-sm-12 other_reason " style="margin:20px auto 10px;" >-->
<!--            <textarea type="text"  class="form-control textreason"  rows="8" maxlength="500" ></textarea>-->
<!---->
<!--        </div>-->
<!--    </div>-->
    </Modal>
</div>


<script>
    const app = new Vue({
        el: '#app',
        data: {
            isShow:false,
            // role:'[{"id":'1',"role":"管理员"},{"id":"2","role":"普通用户"}]',
            role:'',
            users_column: [
                {
                    title: 'ID',
                    key: 'id',
                    width:100
                },
                {
                    title: '用户名',
                    key: 'username',
                    width:200
                },
                {
                    title: '角色',
                    key: 'status',
                    render:function (h,param) {
                        var dstatus = param.row.status;
                        if(dstatus ==1 ){
                            status = '管理员';
                        }else{
                            status = '普通';
                        }
                        return h('span',status);
                    }
                },
                {
                    title: '状态',
                    key:'userstatus',
                    render:function (h,param) {
                        var dstatus = param.row.userstatus;
                        if(dstatus == '1' ){
                           status = '正常';
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
                            },'编辑'),
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
            users: <?=$users?>
        },
        methods:{
            updateuser: function () {
                this.isShow = true;
            }
        }
    })
</script>

<script>
    // layui.use('laypage', function(){
    //     var laypage = layui.laypage;
    //     //执行一个laypage实例
    //     laypage.render({
    //         elem: 'pager'
    //         ,count: 100 //数据总数，从服务端得到
    //         ,limit:10
    //         ,jump: function(obj, first){
    //             //obj包含了当前分页的所有参数，比如：
    //             console.log(obj.curr); //得到当前页，以便向服务端请求对应页的数据。
    //             console.log(obj.limit); //得到每页显示的条数
    //
    //             //首次不执行
    //             if(!first){
    //                 //do something
    //             }
    //         }
    //     });
    // });

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
