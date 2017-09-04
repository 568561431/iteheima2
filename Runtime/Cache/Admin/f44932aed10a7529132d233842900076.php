<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Common/Ueditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/Public/Common/Ueditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/Common/Ueditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/Common/Ueditor/umeditor.min.js"></script>
    <script src="/Public/Common/laydate/laydate.js"></script>
    <script type="text/javascript" src="/Public/Common/Ueditor/lang/zh-cn/zh-cn.js"></script>
</head>

<body>
<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">表单</a></li>
    </ul>
</div>
<div class="formbody">
    <div class="formtitle"><span>基本信息</span></div>
    <form action="" method="post" enctype="multipart/form-data">
        <ul class="forminfo">
            <input type="hidden" name="goods_id" value="<?php echo ($goods_info["goods_id"]); ?>">
            <li>
                <label>商品名称</label>
                <input name="name" type="text" value="<?php echo ($goods_info["goods_name"]); ?>" class="dfinput" /><i>名称不能超过30个字符</i>
            </li>
            <li>
                <label>商品价格</label>
                <input name="price" value="<?php echo ($goods_info["goods_price"]); ?>" type="text" class="dfinput" /><i></i>
            </li>
            <li>
                <label>会员价格</label>
                <input name="vip_price" value="<?php echo ($goods_info["goods_vip_price"]); ?>" type="text" class="dfinput" /><i></i>
            </li>
            <li>
                <label>商品数量</label>
                <input name="num" value="<?php echo ($goods_info["goods_num"]); ?>" type="text" class="dfinput" />
            </li>
            <li>
                <label>商品logo</label>
                <img src="<?php echo (ltrim($goods_info["goods_small_logo"],'.')); ?>" alt="">
                <input name="logo" placeholder="请输入商品logo" type="file" class="" />
            </li>

            <li>
                <label>商品重量</label>
                <input name="weight" value="<?php echo ($goods_info["goods_weight"]); ?>" type="text" class="dfinput" />
            </li>
            <li>
                <label>一级分类</label>
                <select name="" id="level1" class="dfinput" onchange="getCate(this.value,2)">
                    <option value="0">--请选择--</option>
                    <?php if(is_array($cate_list)): foreach($cate_list as $key=>$vo): ?><option value="<?php echo ($vo["cate_id"]); ?>"><?php echo ($vo["cate_name"]); ?></option><?php endforeach; endif; ?>
                </select>
                <i></i>
            </li>
            <li>
                <label>二级分类</label>
                <select name="" id="level2" class="dfinput" onchange="getCate(this.value,3)">
                    <option value="0">--请选择--</option>
                </select>
                <i></i>
            </li>
            <li>
                <label>三级分类</label>
                <select name="cateid" id="level3" class="dfinput" ">
                <option value="0">--请选择--</option>
                </select>
                <i></i>
            </li>
            <li>
                <label>商品状态</label>
                <cite>
                    <input name="isdel" type="radio" value="上架" <?php if($goods_info['goods_isdel'] == '上架' ): ?>checked<?php endif; ?> />上架&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="isdel" type="radio" value="下架" <?php if($goods_info['goods_isdel'] == '下架' ): ?>checked<?php endif; ?> />下架
                </cite>
            </li>
            <li>
                <label>开售日期</label>
                <input name="goods_saletime" value="<?php echo (date('Y-m-d',$goods_info["goods_saletime"])); ?>" class="laydate-icon" onclick="laydate()">
            </li>
            <li>
                <label>商品描述</label>
                <textarea name="introduce"  id="myEditor"  cols="" rows="" class="textinput"><?php echo ($goods_info["goods_introduce"]); ?></textarea>
            </li>
            <li>
                <label>&nbsp;</label>
                <input name="" id="btnSubmit" type="submit" class="btn" value="确认保存" />
            </li>
        </ul>
    </form>
</div>
</body>
</html>
<script type="text/javascript">
    var um = UM.getEditor('myEditor',
            {
                initialFrameWidth:500,
                initialFrameHeight:200
            });
</script>
<script language="JavaScript" src="/Public/Admin/js/jquery.js"></script>
<script>
    function getCate(data,level){
        $.post('<?php echo U('getCate');?>',{'cate_id':data},function (msg) {
            var tmp = "#level"+level;
            $(tmp).html('');
            $(tmp).parent().next().children('select').html('<option value="0">--请选择--</option>');
            $(tmp).html(msg);
        })
    }
</script>