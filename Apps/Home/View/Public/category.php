<aside class="b-aside fr">
	<div class="aside-panel">
		<header class="aside-header">
			<h3 class="aside-title">文章分类</h3>
		</header>
		<?php
			if (!empty($category)) {
				foreach ($category as $cv) {
		?>
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
				}
			}
		?>
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