<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/Apps/Home/View/Public/css/reset.css">
	<link rel="stylesheet" href="/Apps/Home/View/Public/css/public.css">
	<link rel="stylesheet" href="/Apps/Home/View/Public/css/style.css">
	<script type="text/javascript" charset="utf-8" src="../../../../ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../../../../ueditor/ueditor.all.min.js"> </script>
	<script type="text/javascript" charset="utf-8" src="../../../../ueditor/lang/zh-cn/zh-cn.js"></script>

	<title>发布文文章</title>
</head>
<body>
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
	<div class="b-wrapper">
		<div class="editor-content">
			<form action="<?php echo U('add');?>" method="post" class="form editor-form ">
				<input name="id" type="hidden" value="<?php echo $data['id'];?>">
				<div class="form-group">
					<label>标题：</label><input name="title" type="text" placeholder="请输入标题内容" value="<?php echo $data['title'];?>">
				</div>
				<div class="form-group">
					<!--<script id="editor" type="text/plain" style="width:100%;height:500px;"></script>-->
					<textarea type="text/plain" id="editor" name="content" style="width:100%;height:500px;"><?php echo $data['content'];?></textarea>
				</div>
				<div class="form-group clearfix">
					<button type="submit" class="btn btn-bright fr">发布</button>
				</div>
			</form>
		</div>
		
	</div>

<script>
	var ue = UE.getEditor('editor');
</script>
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