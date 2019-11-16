<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单信息</title>
    <link href="favicon.ico" rel="shortcut icon">
    <style>
        *{margin:0;padding:0;}
        body{width:100%;height:100%;background:#F6F8F9;}
        span.red{color:red;}
        .title{width:auto;height:40px;line-height:40px;border-bottom:1px solid #e4eaec;font-size:18px;color:#343434;padding:0 30px;}
        .basic-info{width:auto;height:165px;background:#fff;margin:14px 30px 0 30px;padding:5px;}
        .basic-info-title{width:auto;height:43px;line-height:43px;border-bottom:2px solid #e4eaec;font-size:15px;color:#343434;}
        .basic-info-content{width:100%;height:29px;line-height:29px;border-bottom:1px solid #e4eaec;font-size:12px;color:#343434;}
        .basic-info-content-node{width:20%;height:auto;float:left;}
        .basic-info-content-node-color{color:#c0c0c0;}
        .consignee-info{width:auto;height:105px;background:#fff;margin:14px 30px 0 30px;padding:5px;}
        .consignee-info-title{width:auto;height:43px;line-height:43px;border-bottom:2px solid #e4eaec;font-size:15px;color:#343434;}
        .consignee-info-content{width:100%;height:29px;line-height:29px;border-bottom:1px solid #e4eaec;font-size:12px;color:#343434;}
        .consignee-info-content-node{width:20%;height:auto;float:left;}
        .consignee-info-content-node-color{color:#c0c0c0;}
        .goods-info{width:auto;height:190px;background:#fff;margin:14px 30px 0 30px;padding:5px;}
        .goods-info-title{width:auto;height:43px;line-height:43px;border-bottom:2px solid #e4eaec;font-size:15px;color:#343434;}
        .goods-info-content{width:100%;height:29px;line-height:29px;border-bottom:1px solid #e4eaec;font-size:12px;color:#343434;}
        .goods-info-content2{width:100%;height:84px;line-height:84px;border-bottom:1px solid #e4eaec;font-size:12px;color:#343434;}
        .goods-info-content-sum{width:auto;height:29px;line-height:29px;border-bottom:1px solid #e4eaec;font-size:12px;color:#343434;text-align:right;padding:0 30px;}
        .goods-info-content-node37{width:37%;height:auto;float:left;}
        .goods-info-content-node7{width:7%;height:auto;float:left;}
        .goods-info-content-node-color{color:#c0c0c0;}
    </style>
</head>
<body>
    <div class="title">订单 - 订单信息</div>
    <div class="basic-info">
        <div class="basic-info-title">基本信息</div>
        <div class="basic-info-content">
            <div class="basic-info-content-node basic-info-content-node-color">订单号：</div>
            <div class="basic-info-content-node basic-info-content-node-color">购货人：</div>
            <div class="basic-info-content-node basic-info-content-node-color">支付方式：</div>
            <div class="basic-info-content-node basic-info-content-node-color">订单状态：</div>
            <div class="basic-info-content-node basic-info-content-node-color"></div>
        </div>
        <div class="basic-info-content">
            <div class="basic-info-content-node"><?php echo $_GET['orderno']; ?></div>
            <div class="basic-info-content-node"><?php echo $_GET['name']; ?></div>
            <div class="basic-info-content-node"><?php echo $_GET['pay']; ?></div>
            <div class="basic-info-content-node">已分单,已付款</div>
            <div class="basic-info-content-node"></div>
        </div>
        <div class="basic-info-content">
            <div class="basic-info-content-node basic-info-content-node-color">下单时间：</div>
            <div class="basic-info-content-node basic-info-content-node-color">付款时间：</div>
            <div class="basic-info-content-node basic-info-content-node-color">发货时间：</div>
            <!-- <div class="basic-info-content-node basic-info-content-node-color">收货地址：</div> -->
            <div class="basic-info-content-node basic-info-content-node-color">状态：</div>
        </div>
        <div class="basic-info-content">
            <div class="basic-info-content-node"><?php echo $_GET['posttime']; ?></div>
            <div class="basic-info-content-node"><?php echo $_GET['successtime']; ?></div>
            <div class="basic-info-content-node"><?php echo $_GET['gotime']; ?></div>
            <!-- <div class="basic-info-content-node"><?php echo $_GET['shouhuo']; ?></div> -->
            <div class="basic-info-content-node"><?php
            if (is_numeric ( $_GET['delno'] )) {
                echo "已支付，已发货";
            }
            else echo "已支付，等待发货";
             ?></div>
            <div class="basic-info-content-node"></div>
        </div>
    </div>
    <div class="consignee-info">
        <div class="consignee-info-title">收货人信息</div>
        <div class="consignee-info-content">
            <div class="consignee-info-content-node consignee-info-content-node-color">收货人：</div>
            <div class="consignee-info-content-node consignee-info-content-node-color">联系电话：</div>
            <div class="consignee-info-content-node consignee-info-content-node-color">快递：</div>
            <div class="consignee-info-content-node consignee-info-content-node-color">运单号：</div>
            <div class="consignee-info-content-node consignee-info-content-node-color">收货地址：</div>
            <!-- <div class="consignee-info-content-node consignee-info-content-node-color">状态：</div> -->
        </div>
        <div class="consignee-info-content">
            <div class="consignee-info-content-node"><?php echo $_GET['name']; ?></div>
            <div class="consignee-info-content-node"><?php echo $_GET['tel']; ?></div>
            <div class="consignee-info-content-node"><?php echo $_GET['wuliu']; ?></div>
            <div class="consignee-info-content-node"><?php echo $_GET['delno']; ?></div>
            <div class="consignee-info-content-node"><?php echo $_GET['shouhuo']; ?></div>
<!--             <div class="consignee-info-content-node"><?php
            if (is_numeric ( $_GET['delno'] )) {
                echo "已支付，已发货";
            }
            else echo "已支付，等待发货";
             ?></div> -->
        </div>
    </div>
    <div class="goods-info">
        <div class="goods-info-title">商品信息</div>
        <div class="goods-info-content">
            <div class="goods-info-content-node37 goods-info-content-node-color">商品名称：</div>
            <div class="goods-info-content-node7 goods-info-content-node-color">货号：</div>
            <!-- <div class="goods-info-content-node7 goods-info-content-node-color">条形码：</div> -->
            <div class="goods-info-content-node7 goods-info-content-node-color">货品号：</div>
            <div class="goods-info-content-node7 goods-info-content-node-color">价格：</div>
            <div class="goods-info-content-node7 goods-info-content-node-color">数量：</div>
            <div class="goods-info-content-node7 goods-info-content-node-color">属性：</div>
            <div class="goods-info-content-node7 goods-info-content-node-color">库存：</div>
            <div class="goods-info-content-node7 goods-info-content-node-color">小计：</div>
            <div class="goods-info-content-node7 goods-info-content-node-color">操作：</div>
        </div>
        <div class="goods-info-content goods-info-content2">
            <div class="goods-info-content-node37">
                <div style="width:20%;height:83px;float:left;"><img src="<?php echo $_GET['goodimg']; ?>" width="83" height="83"></div>
                <div style="width:80%;height:83px;float:left;overflow:auto;line-height:20px;"><?php echo $_GET['good']; ?></div>
            </div>
            <!-- <div class="goods-info-content-node7">&nbsp;</div> -->
            <div class="goods-info-content-node7"><?php echo $_GET['goodno']; ?></div>
            <div class="goods-info-content-node7"><?php echo $_GET['goodno']; ?></div>
            <div class="goods-info-content-node7">¥<?php echo $_GET['single']; ?></div>
            <div class="goods-info-content-node7"><?php echo $_GET['total']/$_GET['single']; ?></div>
            <div class="goods-info-content-node7"><?php echo "合格品"; ?></div>
            <div class="goods-info-content-node7"><?php echo $_GET['stock']; ?></div>
            <div class="goods-info-content-node7">¥<?php echo $_GET['total']; ?></div>
            <div class="goods-info-content-node7"><span class="red"><?php
            if (is_numeric ( $_GET['delno'] )) {
                echo "订单支付完成，已发货";
            }
            else echo "订单支付完成，备货中";
             ?></span></div>
        </div>
        <div class="goods-info-content-sum">合计：<span class="red">¥<?php echo $_GET['total']; ?></span></div>
    </div>
</body>
</html>