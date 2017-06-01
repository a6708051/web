<include file="Public:header" />
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
		<section class="b-wrapper">
			<div class="b-left">
			<?php
				if (!empty($list)) {
					foreach ($list as $lv) {
						$release_time = strtotime($lv['release_day']);
						$year = date('Y', $release_time);
						$month = date('m', $release_time);
						$day = date('d', $release_time);
			?>
				<div class="art-list">
					<article class="art-panel">
						<header class="art-header">
							<h2 class="art-title"><a href="index/details/id/<?php echo $lv['id']?>"><?php echo $lv['title'];?></a></h2>
						</header>
						<div class="art-body">
						<!--
							<div class="img">
								<a href="">
									<img src="[!Public]css/images/img01.jpg" alt="">
								</a>
							</div>
						-->
							<div class="art-content"><?php echo htmlspecialchars_decode($lv['content']);?></div>
						</div>
						
						<footer class="art-footer">
							<span><a href="index/details/id/<?php echo $lv['id']?>">详情</a></span>
						</footer>
						
					</article>
					<aside class="art-date">
						<p>
							<span><?php echo $year;?>年</span>
							<span><?php echo $month;?>月<?php echo $day;?>日</span>
						</p>
					</aside>
				</div>
			<?php
					}
				}
			?>
			</div>

			<include file="Public:category" />
		</section>

	</div>
	<include file="Public:footer" />
<script type="text/javascript" src="[!Public]js/Lib/clamp/clamp.min.js"></script>
</body>
</html>