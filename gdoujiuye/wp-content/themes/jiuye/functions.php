<?php 
    //启动特色图像
    if ( function_exists( 'add_theme_support' ) )   add_theme_support( 'post-thumbnails' ); 
    
    //缩略图
    function dm_the_thumbnail() {  
        global $post;  
        $post_type = get_post_type();
        // 判断该文章是否设置的缩略图，如果有则直接显示  
	    if ( has_post_thumbnail() ) {  
			switch( $post_type ){
				case 'project':
			        the_post_thumbnail(array(232,165));
				break;
				case 'policy':
			        the_post_thumbnail(array(165,135));
				break;
				default:
                    the_post_thumbnail(array(232,165)); 
			}
	    } else { //如果文章没有设置缩略图，则查找文章内是否包含图片  
	   
	        $content = $post->post_content;  
	   
	        preg_match_all('/<img.*?(?: |\\t|\\r|\\n)?src=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>/sim', $content, $strResult, PREG_PATTERN_ORDER);  
	   
	        $n = count($strResult[1]);  
	   
	        if($n > 0){ // 如果文章内包含有图片，就用第一张图片做为缩略图 
	        	switch( $post_type ){
				case 'project':
			        echo '<img width=232 height=165 src="'.$strResult[1][0].'" alt="缩略图" />';
				break;
				case 'policy':
			        echo '<img width=135 height=135 src="'.$strResult[1][0].'" alt="缩略图" />'; 
				break;
				default:
                     echo '<img width=232 height=165 src="'.$strResult[1][0].'" alt="缩略图" />';
			    }	   
	        }else { // 如果文章内没有图片，则用默认的图片。 
	            switch( $post_type ){
				case 'project':
			        echo '<img width=232 height=165 src="'.get_bloginfo('template_url').'/img/project01.jpg" alt="缩略图" />';
				break;
				case 'policy':
			        echo '<img width=135 height=135 src="'.get_bloginfo('template_url').'/img/project01.jpg" alt="缩略图" />'; 
				break;
				default:
                     echo '<img width=232 height=165 src="'.get_bloginfo('template_url').'/img/project01.jpg" alt="缩略图" />';
			    } 	   
	        }  	   
	    }    
    }



    //require_once(TEMPLATEPATH . '/simple-local-avatars.php');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(); 
	if ( is_admin() && ( !defined( 'DOING_AJAX' ) || !DOING_AJAX ) ) {
		  $current_user = wp_get_current_user();
		  if($current_user->roles[0] == get_option('default_role')) {
		    wp_safe_redirect( home_url() );
		    exit();
		  }
    }

    //用户注册默认不显示工具栏
    add_action("user_register", "set_user_admin_bar_false_by_default", 10, 1);
	function set_user_admin_bar_false_by_default($user_id) {
	    update_user_meta( $user_id, 'show_admin_bar_front', 'false' );
	    update_user_meta( $user_id, 'show_admin_bar_admin', 'false' );
	}

	//让wordpress支持中文用户名的简便方法
	function ludou_sanitize_user ($username, $raw_username, $strict) {
		  $username = wp_strip_all_tags( $raw_username );
		  $username = remove_accents( $username );
		  // Kill octets
		  $username = preg_replace( '|%([a-fA-F0-9][a-fA-F0-9])|', '', $username );
		  $username = preg_replace( '/&.+?;/', '', $username ); // Kill entities

		  // 网上很多教程都是直接将$strict赋值false，
		  // 这样会绕过字符串检查，留下隐患
		  if ($strict) {
		    $username = preg_replace ('|[^a-z\p{Han}0-9 _.\-@]|iu', '', $username);
		  }

		  $username = trim( $username );
		  // Consolidate contiguous whitespace
		  $username = preg_replace( '|\s+|', ' ', $username );

		  return $username;
	}
    add_filter ('sanitize_user', 'ludou_sanitize_user', 10, 3);

    //学生和企业注册额外信息字段
    add_filter('user_contactmethods','my_user_contactmethods');
	function my_user_contactmethods($user_contactmethods){
		if( current_user_can( 'manage_options' ) ) {
			 $user_contactmethods ['company'] = '企业名称';
			 $user_contactmethods ['phone'] = '手机号码';
			 $user_contactmethods ['studentID'] = '学号';
			 $user_contactmethods ['academy'] = '学院';
			 return $user_contactmethods ;
		}else{
			return $user_contactmethods ;
		}
	}

?>