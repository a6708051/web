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
				<span class="logo">LEISHOW BLOG</span>
				<ul class="nav-menu">
					<li class="active"><a href="index.html">首页</a></li>
					<li><a href="">分类</a></li>
					<li><a href="">联系</a></li>
				</ul>
			</nav>
		</header>
		<section class="b-wrapper">
			<div class="b-left">
				<article class="con-panel">
					<header class="con-header">
						<h1 class="con-title"><?php echo htmlspecialchars_decode($data['title']);?>
							<!--<small><?php echo date('Y-m-d', strtotime($data['release_day']));?></small>-->
						</h1>
					</header>
					<div>
						<?php echo htmlspecialchars_decode($data['content']);?>
					</div>
				</article>
			</div>

			<aside class="b-aside fr">
	<div class="aside-panel">
		<header class="aside-header">
			<h3 class="aside-title">文章分类</h3>
		</header>
		<?php
 if (!empty($category)) { foreach ($category as $cv) { ?>
		<ul class="class-list">
			<li>
				<a class="js-updown" href="javascript:;"><?php echo $cv['name'];?></a>
			</li>
			<!--
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
			-->
		</ul>
		<?php
 } } ?>
	</div>
	<div class="aside-panel">
		<header class="aside-header">
			<h3 class="aside-title">个人分享</h3>
		</header>
		<ul class="class-list">
			<!--<li><a href="">五子棋</a></li>-->
			<li><a href="http://game.lieshow.com/fiverow/public/snake.html">贪吃蛇</a></li>
			<li><a href="http://game.lieshow.com/fiverow/public/2048.html">2048</a></li>
			<li><a href="http://game.lieshow.com/fiverow/public/calendar.html">日历</a></li>
			<li><a href="http://game.lieshow.com/fiverow/public/lock.html">时钟</a></li>
		</ul>
	</div>
</aside>
		</section>

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
</body>
</html>