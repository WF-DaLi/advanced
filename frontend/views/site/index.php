<?php

/* @var $this yii\web\View */

$this->title = '省钱,折扣，帮你省' ;
?>
<!--<div class="container">-->
<!--     -->
<!--</div>-->

<?php
for($i=1;$i<=24;$i++){
    ?>
    <div class="product_box">
        <a href="http://www.baidu.com" alter = "999999">
            <img src="https://img.alicdn.com/tfscom/i3/475437642/TB2aKlitpmWBuNjSspdXXbugXXa_!!475437642.jpg_230x230.jpg" class="img">
            <div class="coupon_info">

                <span class= "coupon_name" name="coupon_name">冬季兔毛大衣冬季兔毛大衣</span>
                <span class="coupon_desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                </span>
                <div class="money_info">
                    <div class="left">
                        <span class="color_red">￥</span>
                        <span class="coupon_price">19<em>.6</em></span>
                    </div>
                    <div class=" midle">
                        <span>券后价</span>
                    </div>
                    <div class= "right">
                        <span>已售5335</span>
                        <img src = "https://l2.51fanli.net/shop/ico/c086f236fabf61d6.png?1405671048" class="logo">
                    </div>
                </div>
                <input type="hidden" value="
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut">
            </div>
        </a>
    </div>
    <?php
}
?>