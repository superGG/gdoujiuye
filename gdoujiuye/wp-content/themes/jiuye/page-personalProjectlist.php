<?php
/**
 * Template Name: 前台个人项目列表
 */
$user_id = $_GET['user_id'];
$args = array(
		'post_type'   => 'project',
		'author' => $user_id,
	);
// 实例化wp_query
$the_query = new WP_Query( $args );

get_header();
?>

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/projectlist.css">
<div class="container">		
	<div id="project_list" class="c8">
		<?php
				// 开始循环
				if ($the_query->have_posts() ) {//如果找到了结果，便输出以下内容 
					while ($the_query->have_posts() ) {//再次判断是否有结果
						$the_query->the_post();//不用问为什么，每次都要写这个；
						echo '<dl class="project-poster project-running">
								<dd class="c3">';
						echo '<a href="'. site_url() .'/?page_id=40&post_id='.get_the_ID().'" title="阅读全文">';
						dm_the_thumbnail();
						echo '</a>';
						echo		'</dd>
								<dt>
									<a href="'. site_url() .'?page_id=40&post_id='.get_the_ID().'" target="_blank" class="project-poster-name">';
									the_title();
						echo		'</a>
								</dt>
								<dd class="c6">
									<span> <b>项目加入人数</b>：';
									$people_count = $wpdb->get_var("SELECT count(*) FROM $wpdb->postmeta WHERE post_id = ".get_the_ID()." AND meta_key = 'joinProtect' ");
									echo $people_count;
									
						echo		'人</span>
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


<?php
	get_footer();
?>