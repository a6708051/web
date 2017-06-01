<include file="Public:header" />
<body>
	<div class="login-wrapper fadeIn">
		<header>
			<h1 class="login-title">LOGIN LIESHOW BLOG</h1>
		</header>
		<div class="login-body">
			<form class="form vertical-form js-login-form">
				<div class="form-group">
					<label>用户名：</label><input type="text" id="userName" placeholder="请输入用户名">
					<span class="form-group error-tips"></span>
				</div>
				<div class="form-group">
					<label>密码：</label><input type="password" id="userPsw" placeholder="请输入密码">
					<span class="form-group error-tips"></span>
				</div>
				<button type="button" class="btn btn-default js-login">登录</button>
			</form>
		</div>
	</div>
</body>
<include file="Public:footer" />
</html>