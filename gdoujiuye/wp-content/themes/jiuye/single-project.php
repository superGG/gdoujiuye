<?php

    get_header(); 
?>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/projectinfo.css">
	<div class="container" >
		<div id="home_main" class="banner-large" style="background:#333 url(<?php bloginfo( 'template_url' ); ?>/img/slides03.jpg) no-repeat center center;">
			<div >
				<a href=""></a>
			</div>
		</div>

		<div class="content">
			<?php
               while (have_posts()) {
               	    the_post();
               	    get_template_part( 'content', 'project');
               	    
               }
               wp_reset_postdata();//不用问为什么，每次都记得写就好
		    ?>
			
		</div>
<!-- 		<?php comments_template(); ?> -->
	</div>



<?php
    get_footer();
?>