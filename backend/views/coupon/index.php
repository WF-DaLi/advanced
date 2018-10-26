<?php

use backend\assets\AppAsset;

$this->title = 'lists';
?>
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
                <i-table style="width:100%; margin-bottom: 15px;" border :columns="columns1" :data="data1" ></i-table>
            </div>
        </Content>
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
                    key: 'ID'
                },
                {
                    title: 'Name',
                    key: 'name'
                },
                {
                    title: 'Age',
                    key: 'age'
                },
                {
                    title: 'Address',
                    key: 'address'
                }
            ],
            data1: [
                {
                    ID:1,
                    name: 'John Brown',
                    age: 18,
                    address: 'New York No. 1 Lake Park',
                    date: '2016-10-03'
                },
                {
                    ID:1,
                    name: 'Jim Green',
                    age: 24,
                    address: 'London No. 1 Lake Park',
                    date: '2016-10-01'
                },
                {
                    ID:1,
                    name: 'Joe Black',
                    age: 30,
                    address: 'Sydney No. 1 Lake Park',
                    date: '2016-10-02'
                },
                {
                    ID:1,
                    name: 'Jon Snow',
                    age: 26,
                    address: 'Ottawa No. 2 Lake Park',
                    date: '2016-10-04'
                }
            ]
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

    $(document).ready(function(){
        $('#clid').click(function(){

            layui.use('layer', function(){
                var layer = layui.layer;

                layer.msg('hello');
            });

        });
    });
</script>
