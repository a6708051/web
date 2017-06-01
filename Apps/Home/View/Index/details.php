<include file="Public:header" />
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

			<include file="Public:category" />
		</section>

	</div>
<include file="Public:footer" />
</body>
</html>