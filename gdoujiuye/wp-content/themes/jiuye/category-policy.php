<?php
get_header(); 
?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/pagelist.css">
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
		

        <?php
             
				// 开始循环
				if (have_posts() ) {//如果找到了结果，便输出以下内容 
					while (have_posts() ) {//再次判断是否有结果
						the_post();//不用问为什么，每次都要写这个；
						echo '<div class = "article">
			                    <a class="pic info_flow_news_image badge-column before-fade-in after-fade-in" data-fit-mobile="true" data-stat-click="wenzhangtupian.1.5037864.click" href="'.get_permalink().'" style="">';
			            dm_the_thumbnail();
			            echo '<span class="mask-tags" data-type="column">专栏</span></a>
			                 <div class="desc">
				                <a class="title info_flow_news_title" data-stat-click="wenzhangbiaoti.1.5037864.click" href="'.get_permalink().'" target="_blank">';
				                the_title();
				        echo  '</a>
				              <div class="author">
					            <a href="/posts/kyle">
						            <span class="avatar before-fade-in after-fade-in" data-stat-click="wenzhangzuozhe.1.5037864.click" style="">';
						echo get_avatar(get_the_author_meta('ID'));
						echo '</span>
						 	  <span class="name">';
						 	    the_author();
						echo '</span>
								</a>
								<span class="">
									&nbsp;•&nbsp;
									<time class="timeago" title="2015-09-25 19:25:34 +0800" datetime="2015-09-25 19:25:34 +0800">';
									 the_time(" Y.m.j");
                        echo '</time>
								</span>
								</div>
								<div class="brief">';
								 the_excerpt();
					    echo '</div>
								</div>
							</div>';

					}
				} else {
					// 如果没有找到任何结果，就输出这个
				} 
				wp_reset_postdata();//不用问为什么，每次都记得写就好
		?>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/pagelist.js"></script>
<?php get_footer(); ?>