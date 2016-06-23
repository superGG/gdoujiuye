<?php
get_header(); 
?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/projectlist.css">
	<div class="header">
		<div class="c1">
			<a href="http://zsjy.gdou.edu.cn/gdoujiuye/">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/gdou.png" class="logo"></a>
				<?php
                     wp_nav_menu( array( 
                     	'menu' => '首页', 
                     	'depth' => 1, 
                     	'menu_class'=>'c2'
                     	) 
                     );
				?>
			<form action="javascript:;" method="get">
				<input name="q" value="" class="head-search-l" autocomplete="off" placeholder="搜索">
				<input type="submit" class="sub-button"></form>
			<ul class="c6">
				<li>
					<a>服务介绍</a>
					<span>|</span>
				</li>
				<li>
					<a href="http://zsjy.gdou.edu.cn/gdoujiuye/?page_id=11" data-clicks-track="custom::首页::注册">注册</a>
				</li>
				<li>
					<a  class="action-popup-login" data-clicks-track="custom::首页::登录">登录</a>
				</li>
			</ul>
		</div>
	</div>
	<a>test ,hello world!!</a>


<?php get_footer(); ?>