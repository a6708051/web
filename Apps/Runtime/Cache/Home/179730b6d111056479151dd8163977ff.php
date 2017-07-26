<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/Apps/Home/View/Public/css/reset.css">
	<link rel="stylesheet" href="/Apps/Home/View/Public/css/public.css">
	<link rel="stylesheet" href="/Apps/Home/View/Public/css/style.css">
	<script type="text/javascript" src="/Apps/Home/View/Public/js/Lib/jQuery/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="/Apps/Home/View/Public/js/Lib/layer/layer.js"></script>
	<script type="text/javascript" src="/Apps/Home/View/Public/js/app/controller.js"></script>
	<title>LIESHOW BLOG</title>
</head>
<body>

	<div id="container">
		<header class="nav-top">
			<nav>
				<span class="logo">LIESHOW BLOG</span>
				<ul class="nav-menu">
					<li class="active"><a href="index.html">首页</a></li>
					<li><a href="">分类</a></li>
					<li><a href="">联系</a></li>
				</ul>
			</nav>
		</header>
		<section class="wrapper">
			<aside class="b-aside">
				<div class="aside-panel">
					<header class="aside-header">
						<h3 class="aside-title">文章分类</h3>
					</header>
					<ul class="class-list">
						<li>
							<a class="js-updown" href="javascript:;">原创 <span class="icon-count">12</span></a>
							<ul class="sub-class-list">
								<li><a href="">phpphp</a></li>
								<li><a href="">phpphp</a></li>
								<li><a href="">phpphp</a></li>
								<li><a href="">phpphp</a></li>
								<li><a href="">phpphp</a></li>
							</ul>
						</li>
						<li>
							<a class="js-updown" href="javascript:;">分享<span class="icon-count">2</span></a>
							<ul class="sub-class-list">
								<li><a href="">分享</a></li>
								<li><a href="">分享</a></li>
								<li><a href="">分享</a></li>
								<li><a href="">分享</a></li>
							</ul>
						</li>
						<li><a class="js-updown" href="javascript:;">摘抄<span class="icon-count">122</span></a></li>
					</ul>	
				</div>
			</aside>
			<div class="article-content">
				<ul class="article-list">
				<?php  if (!empty($list)) { foreach ($list as $lv) { ?>
					<li>
						<div class="art-group">
							<h1 class="title"><a href="javascript:;"><?php echo $lv['title'];?></a></h1>
							<div class="operate-group">
								<a href="editor/id/<?php echo $lv['id']?>">编辑</a>
								<a href="change/id/<?php echo $lv['id']?>"><?php echo $lv['status']>0 ? '关闭' : '发布';?></a>
								<a href="javascript:;" values="<?php echo $lv['id'];?>" class="js-del-article">删除</a>
							</div>
						</div>
					</li>
				<?php
 } } ?>
				</ul>
				<div class="pagination">
					<?php echo ($page); ?>
					<!--<ul class="page-list">
						<li><a href="javascript:;">首页</a></li>
						<li class="disabled"><a href="javascript:;">上一页</a></li>
						<li class="active"><a href="javascript:;">1</a></li>
						<li><a href="javascript:;">...</a></li>
						<li><a href="javascript:;">2</a></li>
						<li><a href="javascript:;">3</a></li>
						<li><a href="javascript:;">...</a></li>
						<li><a href="javascript:;">9</a></li>
						<li><a href="javascript:;">10</a></li>
						<li><a href="javascript:;">11</a></li>
						<li><a href="javascript:;">下一页</a></li>
						<li><a href="javascript:;">末页</a></li>
					</ul>-->
				</div>
			</div>
		</section>
	</div>


<div class="delConfirm" style="display: none">
	<p style="margin: 30px; text-align: center">确定删除此文章?</p>
</div>
<hr />
<p class="footer-icp">备案号：粤ICP备15113383号</p>
<style>
hr {
	width:80%;
	height:2px;
	border:none;
	border-top:1px solid #ccc;"
}
.footer-icp {
	font-size: 12px;
	text-align: center;
}
<style>
<script src="js/Lib/jQuery/jquery-2.1.3.js"></script>
<script src="js/Lib/layer/layer.js"></script>
<script src="js/app/controller.js"></script>
</body>
</html>