<?php
/**
 * Template Name: 前台学生注册
 */
get_header(); 
?>

<div class="regist_area">
	<div class="regist">
		<form method="post" action="<?php site_url(); ?>?page_id=50">
			<ul style="text-align: center;">
				<li style="font-size:25px; color:#888;">学生注册</li><li class="registed">如果已是广海孵化用户！<span id="regist_log">请登陆</span></li>
				<hr size="1" width="600" color="#ddd">
				<li>所在学院：<input class="regist_academic" type="text" name="user_academy" placeholder=" 所在学院"></li>
				<li>学&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp号：<input class="regist_number" type="text" name="user_studentID" placeholder=" 学号"></li>
				<li>姓&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp名：<input class="regist_name" type="text" name="user_login" placeholder=" 姓名"></li>
				<li>邮&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp箱：<input class="regist_email" type="text" name="user_email" placeholder=" 邮箱"></li>
				<li>手机号码：<input class="regist_mobile" type="text" name="user_phone" placeholder=" 手机号码"></li>
				<li>密&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp码：<input class="regist_password" type="password" size="25" autoComplete='false' name="user_pass" placeholder=" 密码（至少6个字符）"></li>
				<!-- <li class="regist_clause" >广海孵化服务条款</li> -->
				<input type="hidden" name="reg" value="ok" />
				<input type="hidden" name="reg_type" value="student" />
				<input class="regist_button" type="submit" value="注册">
			</ul>	
		</form>
		
	</div>
</div>
<div class="footer" style="position:absolute;top:480px;left:0">
	<div class="c1">
		<ul class="c3">
			<li>
				<a >关于点名时间</a>
				|
			</li>
			<li>
				<a >服务条款</a>
				|
			</li>
			<li>
				<a >隐私权政策</a>
				|
			</li>
			<li>
				<a >加入我们</a>
				|
			</li>
			<li>
				<a >常见问题</a>
				|
			</li>
			<li>
				<a >联系我们</a>
			</li>
		</ul>

		<p class="c6">© 2015 广东海洋大学 招生与就业指导中心　Powerby EarlTechnology 
		<div class="cl"></div>
	</div>
</div>
<div class="toolbar"><a href="#top" id="scroll"></a></div>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/index.js"></script>
<?php wp_footer(); ?>
</body>
</html>