<?php
get_header(); 
?>
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/context.css">
<div class="container">
	<?php
	  if(have_posts()){
	  	while (have_posts()) {
	  		
       	    the_post();
       	    echo '<div class="single-post">
			         <div class="single-post-header">
				       <div class="single-post-header__meta">
					     <h1 class="single-post__title" style="text-align: center;">';
			the_title();
			echo '</h1>
					</div>
					<div class="author">
						<a data-stat-click="Wenzhang.zuozhe.click" href="">
							';
		    
		    echo '	 	  <span class="name" style="float:right ;">';
						 	    
			echo '
					</a><time class="timeago"style="float:right ;" title="2015-09-25 19:25:34 +0800" datetime="2015-09-25 19:25:34 +0800"  >';
									 the_time(" Y.m.j");
			echo '
					</div>
					<div class="single-post-header__headline">';	
					the_post_thumbnail('full');
			echo '</div>
					</div>
					<br>		
					<div class="article">';
					the_content();
			echo '</div>
					</div>';
       }	
	  }
       
       wp_reset_postdata();//不用问为什么，每次都记得写就好
	?>

	<!-- <?php get_footer(); ?> -->

