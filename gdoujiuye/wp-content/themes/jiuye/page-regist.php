<?php 
/**
 * Template Name: 前台注册处理
 */
if( !empty($_POST['reg']) ) {
  $error = '';
  $sanitized_user_login = sanitize_user( $_POST['user_login'] );
  $user_email = apply_filters( 'user_registration_email', $_POST['user_email'] );
  //$user_email =$_POST['user_email'];
  // Check the username
  if ( $sanitized_user_login == '' ) {
    $error .= '<strong>错误</strong>：请输入用户名。<br />';
  } elseif ( ! validate_username( $sanitized_user_login ) ) {
    $error .= '<strong>错误</strong>：此用户名包含无效字符，请输入有效的用户名<br />。';
    $sanitized_user_login = '';
  } elseif ( username_exists( $sanitized_user_login ) ) {
    $error .= '<strong>错误</strong>：该用户名已被注册，请再选择一个。<br />';
  }

  // Check the e-mail address
  if ( $user_email == '' ) {
    $error .= '<strong>错误</strong>：请填写电子邮件地址。<br />';
  } elseif ( ! is_email( $user_email ) ) {
    $error .= '<strong>错误</strong>：电子邮件地址不正确。！<br />';
    $user_email = '';
  } elseif ( email_exists( $user_email ) ) {
    $error .= '<strong>错误</strong>：该电子邮件地址已经被注册，请换一个。<br />';
  }
    
  //Check the password
  if(strlen($_POST['user_pass']) < 6)
    $error .= '<strong>错误</strong>：密码长度至少6位!<br />';
  if($_POST['user_pass']=='')
    $error .= '<strong>错误</strong>：请输入密码!<br />';

    //check the type
    if($_POST['reg_type'] == 'student'){
    	if($_POST['user_academy']==''){
    		$error .= '<strong>错误</strong>：请填写所在学院。<br />';
    	}
    	if($_POST['user_studentID']==''){
    		$error .= '<strong>错误</strong>：请填写您的学号。<br />';
    	}
    	if($_POST['user_phone']==''){
    		$error .= '<strong>错误</strong>：请填写您的手机号。<br />';
    	}
    }else{
    	if($_POST['user_company']==''){
    		$error .= '<strong>错误</strong>：请填写您所在企业名称。<br />';
    	}
    	if($_POST['user_phone']==''){
    		$error .= '<strong>错误</strong>：请填写您的手机号。<br />';
    	}
    }

      
    if($error == '') {
	    $user_id = wp_create_user( $sanitized_user_login, $_POST['user_pass'], $user_email );

	    if($_POST['reg_type'] == 'student'){
	    	update_user_meta($user_id, 'academy', $_POST['user_academy'],true);
	    	update_user_meta($user_id, 'studentID', $_POST['user_studentID'],true);
	    	update_user_meta($user_id, 'phone', $_POST['user_phone'],true);
	    	update_user_meta($user_id, 'user_type', $_POST['reg_type'],true);
	    }else{
	    	update_user_meta($user_id, 'company', $_POST['user_company'],true);
	    	update_user_meta($user_id, 'phone', $_POST['user_phone'],true);
	    	update_user_meta($user_id, 'user_type', $_POST['reg_type'],true);
	    }
        
        
	    
	    if ( ! $user_id ) {
	      	$error .= sprintf( '<strong>错误</strong>：无法完成您的注册请求... 请联系<a href=\"mailto:%s\">管理员</a>！<br />', get_option( 'admin_email' ) );
	    }
	    else if (!is_user_logged_in()) {
		      $user = get_userdatabylogin($sanitized_user_login);
		      $user_id = $user->ID;
		  
		      // 自动登录
		      wp_set_current_user($user_id, $user_login);
		      wp_set_auth_cookie($user_id);
		      do_action('wp_login', $user_login);

		      wp_safe_redirect(home_url());
	    }
    }
}
get_header(); 
?>
<!-- 	<div class="container">

		<?php
               while (have_posts()) {
               	    the_post();?>
        <?php the_content(); ?> -->
		<?php if(!empty($error)) {
		 echo '<p class="ludou-error">'.$error.'</p>';
		}
		if (!is_user_logged_in()) { ?>
<!-- 		<form name="registerform" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" class="ludou-reg">
		    <p>
		      <label for="user_login">用户名<br />
		        <input type="text" name="user_login" tabindex="1" id="user_login" class="input" value="<?php if(!empty($sanitized_user_login)) echo $sanitized_user_login; ?>" />
		      </label>
		    </p>

		    <p>
		      <label for="user_email">电子邮件<br />
		        <input type="text" name="user_email" tabindex="2" id="user_email" class="input" value="<?php if(!empty($user_email)) echo $user_email; ?>" size="25" />
		      </label>
		    </p>
		    
		    <p>
		      <label for="user_pwd1">密码(至少6位)<br />
		        <input id="user_pwd1" class="input" tabindex="3" type="password" tabindex="21" size="25" value="" name="user_pass" />
		      </label>
		    </p>
		    
		    <p>
		      <label for="user_pwd2">重复密码<br />
		        <input id="user_pwd2" class="input" tabindex="4" type="password" tabindex="21" size="25" value="" name="user_pass2" />
		      </label>
		    </p>
		    
		    <p class="submit">
		      <input type="hidden" name="ludou_reg" value="ok" />
		      <button class="button button-primary button-large" type="submit">注册</button>
		    </p>
		</form> -->
		<?php } else {
		 echo '<p class="ludou-error">您已注册成功，并已登录！</p>';
		} ?>
        <?php    }
               wp_reset_postdata();//不用问为什么，每次都记得写就好
		?>
<!-- 	<div class="footer">
		<div class="c1">
			<ul class="c3">
				<li>
					<a href="javascript:;">关于点名时间</a>|
				</li>
				<li>
					<a href="javascript:void(0);">服务条款</a>|
				</li>
				<li>
					<a href="javascript:;">隐私权政策</a>|
				</li>
				<li>
					<a href="javascript:;">加入我们</a>|
				</li>
				<li>
					<a href="javascript:;">常见问题</a>|
				</li>
				<li>
					<a href="javascript:;">联系我们</a>
				</li>

			</ul>

			<p class="c6">
				© 2015 广东海洋大学 招生与就业指导中心　Powerby EarlTechnology
				<div class="cl"></div>
		</div>

	</div>
	<div class="toolbar">
		<a href="#top" id="scroll"></a>
	</div> -->
<?php get_footer(); ?>