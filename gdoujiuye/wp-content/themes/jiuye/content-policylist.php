<?php
get_header(); 
?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/pagelist.css">
	<div class="container">
		

        <?php
             
				// 开始循环
				if (have_posts() ) {//如果找到了结果，便输出以下内容 
					while (have_posts() ) {//再次判断是否有结果

						the_post();//不用问为什么，每次都要写这个；
						
			                    
			            
			            echo '
			            	<div class = "article">
			                 <div class="desc">
				                <a class="title info_flow_news_title" data-stat-click="wenzhangbiaoti.1.5037864.click" href="'.get_permalink().'" style="">';
				                the_title();
				        echo  '</a>
				              
					            
						            <span class="avatar before-fade-in after-fade-in" data-stat-click="wenzhangzuozhe.1.5037864.click" style="">';
						
						echo '</span>
						 	  <span class="name" style="float:right ;">';
						 	    
						echo '
								</a>
								<span class="">
									&nbsp;•&nbsp;
									<time class="timeago" title="2015-09-25 19:25:34 +0800" datetime="2015-09-25 19:25:34 +0800">';
									 the_time(" Y.m.j");
                       
					    echo '</div>
					    </div>';

					}
				} else {
					// 如果没有找到任何结果，就输出这个
				} 
				wp_reset_postdata();//不用问为什么，每次都记得写就好
		?>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/pagelist.js"></script>
<?php get_footer(); ?>