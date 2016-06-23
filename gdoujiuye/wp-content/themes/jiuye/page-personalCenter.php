<?php
/**
 * Template Name: 前台个人中心页面
 */
if(!is_user_logged_in()){
   wp_die('请您登陆后进行操作！');
}
global $wpdb;
get_header();

get_currentuserinfo();
$name  	 	 = $current_user->user_login;
$email  	 = $current_user->user_email;
$user_id 	 = $current_user->ID ;
$user_type   = get_user_meta($user_id, 'user_type');

$project_count = $wpdb->get_var("SELECT count(*) FROM $wpdb->posts WHERE post_author = $user_id AND post_status = 'publish' AND post_type = 'project' ");
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/perCenter.css">
<div class="container">
    <div class="content">
    <div class="l1">  
        <dl class="c10">
          <dd class="c2"><a href=""><img src=""></a></dd>
          <dt class=""><a href=""><?php echo $name ; ?></a><i></i></dt>
          <?php if($user_type[0]=='student'){ ?>
         		<dd class="c4">
		            <b>email:</b><?php echo $email ?>
		        </dd>
		        <dd class="c4">
		            <b>学院:  </b><?php $academy = get_user_meta($user_id, 'academy');echo $academy[0] ?>
		        </dd> 
		        <dd class="c4">
		            <b>学号:  </b><?php  $studentID = get_user_meta($user_id, 'studentID');echo $studentID[0] ?>
		        </dd>  
		        <dd class="c4">
		            <b>phone: </b><?php $phone = get_user_meta($user_id, 'phone');echo $phone[0] ?>
		        </dd>  		
          <?php }else if($user_type[0]=='company'){?>
      			<dd class="c4">
		            <b>email:</b><?php echo $email ?>
		        </dd>
		        <dd class="c4">
		            <b>企业名称:</b><?php $company = get_user_meta($user_id, 'company'); echo $company[0]?>
		        </dd> 
		        <dd class="c4">
		            <b>phone:</b><?php $phone = get_user_meta($user_id, 'phone');echo $phone[0] ?>
		        </dd> 
          <?php }else{ ?>
          		<dd class="c4">
		            <b>email:</b><?php echo $email ?>
		        </dd>
         <?php } ?>
        </dl>

      </div>
      <div class="l2">
        <div class="c95">
          <div class="c99"></div>
          <a href="<?php site_url(); ?>?page_id=38&user_id=<?php echo $user_id; ?>" class="c551"><strong><?php echo $project_count; ?></strong><br>发起</a>
          <div class="cl"></div>
        </div>
        <div class="c57">
        </div>
      </div>
    </div>
</div>
<?php
get_footer();
?>