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
	

	<div class="container">
		<div class="c1">
			<dl>
				<dt>分类：</dt>
				<dd>
					<a  id="category_0" class="c3">所有分类</a>
					<a  id="category_927219">通讯数码</a>
					<a  id="category_927151">家居生活</a>
					<a  id="category_927158">智能穿戴</a>
					<a  id="category_927218">影音娱乐</a>
					<a  id="category_927162">出行定位</a>
					<a  id="category_927250">办公相关</a>
				</dd>
			</dl>
			<dl class="c2">
				<dt>排行：</dt>
				<dd>
					<a  id="attribute_popular" class="c3">最热门的</a>
					<a  id="attribute_latest">最新上线</a>
					<a  id="attribute_soon_starts">即将开始</a>
					<a  id="attribute_end_soon">即将结束</a>
					<a  id="attribute_most_funded">筹资最多</a>
				</dd>
			</dl>
		</div>
		<div id="project_list" class="c8">
			<?php
					// 开始循环
					if (have_posts() ) {//如果找到了结果，便输出以下内容 
						while (have_posts() ) {//再次判断是否有结果
							the_post();//不用问为什么，每次都要写这个；
							echo '<dl class="project-poster project-running">
									<dd class="c3">';
							echo '<a href="'.get_permalink().'" title="阅读全文">';
							dm_the_thumbnail();
							echo '</a>';
							echo		'</dd>
									<dt>
										<a href="';
										the_permalink();
							echo			'" target="_blank" class="project-poster-name">';
										the_title();
							echo		'</a>
									</dt>
									<dd class="c6">
										<span> ';
										the_excerpt();
							echo		'</span>
									</dd>
								</dl>
							';//这里开始输出你想要的模板标签
						}
					} else {
						// 如果没有找到任何结果，就输出这个
					} 
					wp_reset_postdata();//不用问为什么，每次都记得写就好
				?>
		</div>
	</div>

<?php get_footer(); ?>