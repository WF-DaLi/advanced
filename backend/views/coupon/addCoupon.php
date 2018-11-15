<?php

/* @var $this yii\web\View */

$this->title = 'M2 add';
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div id="app" >
    <div class="m-title">
        add M2
    </div>
    <div class="col-lg-6 " style="margin-top:10px;">
        <i-form :model="formItem" :label-width="80">
            <Form-item label="Name">
                <i-input v-model="formItem.input" placeholder="Enter something..."></i-input>
            </Form-item>
            <Form-item label="From">
                <i-select v-model="formItem.opt" required style="width:200px">
                    <i-option v-for="item in formItem.select" :value="item.ID" >{{ item.name }}</i-option>
                </i-select>
            </Form-item>
            <Form-item label="DateShow">
                <Row>
                    <Col span="11">
                    <Date-Picker type="date" placeholder="Select date" v-model="formItem.date"></Date-Picker>
                    </Col>
                    <Col span="2" style="text-align: center">-</Col>
                    <Col span="11">
                    <Time-Picker type="time" placeholder="Select time" v-model="formItem.time"></Time-Picker>
                    </Col>
                </Row>
            </Form-item>
            <Form-item label="Radio">
                <RadioGroup v-model="formItem.radio">
                    <Radio label="male">Male</Radio>
                    <Radio label="female">Female</Radio>
                </RadioGroup>
            </Form-item>
            <Form-item label="Checkbox">
                <Checkbox-Group v-model="formItem.checkbox">
<!--                    <Checkbox v-for="item in formItem.checkbox" :value=item.id :label=item.name></Checkbox>-->
                    <Checkbox label="Sleep"></Checkbox>
                    <Checkbox label="Run"></Checkbox>
                    <Checkbox label="Movie"></Checkbox>
                </Checkbox-Group>
            </Form-item>
<!--            <Form-item label="Switch">-->
<!--                <i-switch v-model="formItem.switch" size="large">-->
<!--                    <span slot="open">On</span>-->
<!--                    <span slot="close">Off</span>-->
<!--                </i-switch>-->
<!--            </Form-item>-->
            <Form-item label="Slider">
                <Slider v-model="formItem.slider" range></Slider>
            </Form-item>
            <Form-item label="Text">
                <i-input v-model="formItem.textarea" type="textarea" :autosize="{minRows: 2,maxRows: 5}" placeholder="Enter something..."></i-input>
            </Form-item>
            <Form-item>
                <i-button type="primary" @click="addItem()">Submit</i-button>
                <i-button style="margin-left: 8px">Cancel</i-button>
            </Form-item>
        </i-form>
    </div>
</div>
<script>
    const app = new Vue({
        el: '#app',
        data: {
            value1: '',
            value2: '',
            value3: '',
            data1: [
                {
                    ID:1,
                    name: '天猫'
                },
                {
                    ID:2,
                    name: '京东'
                },
                {
                    ID:3,
                    name: '1号店'
                },
                {
                    ID:4,
                    name: '苏宁易购'
                }
            ],
            data2:'',
            formItem: {
                input: '',
                opt:'',
                select: [
                    {
                        ID:1,
                        name: '天猫'
                    },
                    {
                        ID:2,
                        name: '京东'
                    },
                    {
                        ID:3,
                        name: '1号店'
                    },
                    {
                        ID:4,
                        name: '苏宁易购'
                    }
                ],
                radio: 'male',
                checkbox: [
                    {
                        id:1,
                        name:'12'
                    },
                    {
                        id:3,
                        name:'333'
                    },
                    {
                        id:2,
                        name:'222'
                    },

                ],
                switch: true,
                date: '',
                time: '',
                slider: [0, 100],
                textarea: ''
            }
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
            addItem:function(){
                $.post('http://www.baidu.com');
            }
        }
    })
</script>
