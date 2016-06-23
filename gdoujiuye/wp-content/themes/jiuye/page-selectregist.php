<?php
/**
 * Template Name: 前台注册
 */
get_header(); 
?>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/select_regist.css">
	<div class="banner"><img src="<?php bloginfo( 'template_url' ); ?>/img/info_bg.jpg"></div>
	<div class="container">
		<p style="text-align:center">请选择用户注册类型</p>
		<div class="students">
			<a href="<?php site_url(); ?>?page_id=46"><img src="<?php bloginfo( 'template_url' ); ?>/img/student.png"></a>
			<a href="<?php site_url(); ?>?page_id=46"><li>学生注册</li></a>
		</div>
		<div class="enterprise">
			<a href="<?php site_url(); ?>?page_id=36"><img src="<?php bloginfo( 'template_url' ); ?>/img/enterprise.png"></a>
			<a href="<?php site_url(); ?>?page_id=36"><li>企业注册</li></a>
		</div>

	</div>
	<div class="footer" style="position:absolute;top:800px;left:0">
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
	</body>
	</html>