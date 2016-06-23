<?php
/**
 * Template Name: 前台加入项目处理
 */
$user_id = $_GET['user_id'] ;
$post_id = $_GET['post_id'] ;
$joinProtect = get_post_meta($post_id,'joinProtect');

if(!is_user_logged_in()){
   wp_die('请您登陆后进行操作！');
}
foreach ($joinProtect as $key => $value) {
	if($value==$user_id){
        wp_die('您已经加入，请勿重复加入！');
	}
}
if(get_post($post_id)->post_author==$user_id){
	wp_die('很抱歉，您不能加入自己发布的项目！');
}
if(add_post_meta($post_id,'joinProtect',$user_id)){
	wp_die('加入成功！');
}
?>
