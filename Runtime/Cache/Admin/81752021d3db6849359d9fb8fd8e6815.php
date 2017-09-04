<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".click").click(function() {
            $(".tip").fadeIn(200);
        });

        $(".tiptop a").click(function() {
            $(".tip").fadeOut(200);
        });

        $(".sure").click(function() {
            $(".tip").fadeOut(100);
        });

        $(".cancel").click(function() {
            $(".tip").fadeOut(100);
        });

    });
    </script>
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">数据表</a></li>
            <li><a href="#">基本内容</a></li>
        </ul>
    </div>
    <div class="rightinfo">
        <div class="tools">
            <ul class="toolbar">
                <li><span><img src="/Public/Admin/images/t01.png" /></span>添加</li>
                <li><span><img src="/Public/Admin/images/t02.png" /></span>修改</li>
                <li><span><img src="/Public/Admin/images/t03.png" /></span>删除</li>
                <li><span><img src="/Public/Admin/images/t04.png" /></span>统计</li>
            </ul>
        </div>
        <table class="tablelist">
            <thead>
                <tr>
                    <th>
                        <input name="" type="checkbox" value="" id="checkAll" />
                    </th>
                    <th>编号</th>
                    <th>商品名称</th>
                    <th>商品价格</th>
                    <th>库存数量</th>
                    <th>开售事件</th>
                    <th>商品图片</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
                    <td>
                        <input name="" type="checkbox" value="" />
                    </td>
                    <td>20</td>
                    <td>Nikon/尼康D5600单反相机18-55防抖套机 入门级数码相机</td>
                    <td>4588.00</td>
                    <td>200</td>
                    <td>1970-01-01 08:00:00</td>
                    <td><img src="/Uploads/2017-06-23/thumb_594c0a48e325d.jpg" /></td>
                    <td>
                    	<a href="/Admin/Goods/photos/goods_id/20.html" class="tablelink">相册管理</a> 
                    	<a href="#" class="tablelink"> 删除</a>
                    	<a href="#" class="tablelink"> 上架</a>
                    	
                    </td>
                </tr><tr>
                    <td>
                        <input name="" type="checkbox" value="" />
                    </td>
                    <td>21</td>
                    <td>阿斯达</td>
                    <td>30000.00</td>
                    <td>5000</td>
                    <td>2017-07-14 00:00:00</td>
                    <td><img src="/uploads/2017-07-14/thumb5968a51a4cabd.jpg" /></td>
                    <td>
                    	<a href="/Admin/Goods/photos/goods_id/21.html" class="tablelink">相册管理</a> 
                    	<a href="#" class="tablelink"> 删除</a>
                    	<a href="#" class="tablelink"> 上架</a>
                    	
                    </td>
                </tr><tr>
                    <td>
                        <input name="" type="checkbox" value="" />
                    </td>
                    <td>23</td>
                    <td>水电费</td>
                    <td>5000.00</td>
                    <td>200</td>
                    <td>2017-07-14 00:00:00</td>
                    <td><img src="/uploads/2017-07-14/thumb5968a631814cc.jpg" /></td>
                    <td>
                    	<a href="/Admin/Goods/photos/goods_id/23.html" class="tablelink">相册管理</a> 
                    	<a href="#" class="tablelink"> 删除</a>
                    	<a href="#" class="tablelink"> 上架</a>
                    	
                    </td>
                </tr><tr>
                    <td>
                        <input name="" type="checkbox" value="" />
                    </td>
                    <td>28</td>
                    <td>《西瓜是怎么炼成的》</td>
                    <td>300.00</td>
                    <td>50</td>
                    <td>2017-07-18 00:00:00</td>
                    <td><img src="/uploads/2017-07-18/thumb596e0ecf3f8ca.jpg" /></td>
                    <td>
                    	<a href="/Admin/Goods/photos/goods_id/28.html" class="tablelink">相册管理</a> 
                    	<a href="#" class="tablelink"> 删除</a>
                    	<a href="#" class="tablelink"> 上架</a>
                    	
                    </td>
                </tr><tr>
                    <td>
                        <input name="" type="checkbox" value="" />
                    </td>
                    <td>29</td>
                    <td>《菠萝是怎么练成的》</td>
                    <td>200.00</td>
                    <td>30</td>
                    <td>2017-07-18 00:00:00</td>
                    <td><img src="/uploads/2017-07-18/thumb596e0f4195e57.jpg" /></td>
                    <td>
                    	<a href="/Admin/Goods/photos/goods_id/29.html" class="tablelink">相册管理</a> 
                    	<a href="#" class="tablelink"> 删除</a>
                    	<a href="#" class="tablelink"> 上架</a>
                    	
                    </td>
                </tr>            </tbody>
        </table>
        <div class="pagin">
            <div class="message"><div> <a class="prev" href="/Admin/Goods/goodsList/p/1.html"><<</a> <a class="num" href="/Admin/Goods/goodsList/p/1.html">1</a><span class="current">2</span><a class="num" href="/Admin/Goods/goodsList/p/3.html">3</a><a class="num" href="/Admin/Goods/goodsList/p/4.html">4</a><a class="num" href="/Admin/Goods/goodsList/p/5.html">5</a> <a class="next" href="/Admin/Goods/goodsList/p/3.html">>></a> </div></div>
            <ul class="paginList">
                <li class="paginItem"><a href="javascript:;"><span class="pagepre"></span></a></li>
                <li class="paginItem"><a href="javascript:;">1</a></li>
                <li class="paginItem current"><a href="javascript:;">2</a></li>
                <li class="paginItem"><a href="javascript:;">3</a></li>
                <li class="paginItem"><a href="javascript:;">4</a></li>
                <li class="paginItem"><a href="javascript:;">5</a></li>
                <li class="paginItem more"><a href="javascript:;">...</a></li>
                <li class="paginItem"><a href="javascript:;">10</a></li>
                <li class="paginItem"><a href="javascript:;"><span class="pagenxt"></span></a></li>
            </ul>
        </div>
        <div class="tip">
            <div class="tiptop"><span>提示信息</span>
                <a></a>
            </div>
            <div class="tipinfo">
                <span><img src="images/ticon.png" /></span>
                <div class="tipright">
                    <p>是否确认对信息的修改 ？</p>
                    <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
                </div>
            </div>
            <div class="tipbtn">
                <input name="" type="button" class="sure" value="确定" />&nbsp;
                <input name="" type="button" class="cancel" value="取消" />
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.tablelist tbody tr:odd').addClass('odd');
    </script>
</body>

</html>