<?php
	get_header(); 


	if($_GET['post_type']&&$_GET['post_type']=='project'){
		get_template_part( 'content', 'projectlist'); 
	}elseif($_GET['post_type']&&$_GET['post_type']=='policy'){
		get_template_part( 'content', 'policylist');
	}elseif($_GET['post_type']&&$_GET['post_type']=='download'){
		get_template_part( 'content', 'download');
	}elseif($_GET['post_type']&&$_GET['post_type']=='about'){
		get_template_part( 'content', 'about');
	}else{
		get_template_part( 'content', 'index');
	}

	get_footer();
?>
	

