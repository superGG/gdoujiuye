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
			         <div class="single-post-header" style="text-align:center;">
				       <div class="single-post-header__meta" >
					     <h1 class="single-post__title" style="text-align:center;">';
			the_title();
			echo '</h1>
					</div>
					<div class="author">
						<a data-stat-click="Wenzhang.zuozhe.click" href="/posts/kyle">
							';
		   
		    echo '
				<span class="name">';
				the_author();
		    echo '</span>
					</a>
					<span class="">
						&nbsp;•&nbsp;
						<span class="timeago" title="2015-09-25 19:25:34 +0800" datetime="2015-09-25 19:25:34 +0800">';
			    the_time("m.j, Y");
			echo '</span>
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

<?php get_footer(); ?>