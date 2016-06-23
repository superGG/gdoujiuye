<!DOCTYPE html />
<html lang="zh-CN" style="overflow: visible;">
<head>
<?php wp_head(); ?>
	<title>广海孵化 - 支持创新的力量</title>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/index.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css">

<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.12.3.min.js"></script>
<script>
	(function(){
		if (typeof jQuery == 'undefined') {
				document.write(unescape("%3Cscript src='<?php bloginfo( 'template_url' ); ?>/js/jquery-2.1.4.min.js' type='text/javascript'%3E%3C/script%3E"));
		}
	})()
</script>
</head>
<body class="home home-" style="overflow: visible;">
	<div class="cover">
		<div class="log">
			<li class="log-in">登陆</li><li class="false"></li>
			<div class="log_right">
				<?php
					// if(!isset($_SESSION))
  			        // session_start();
                     //$token = md5(uniqid(rand(), true));
                     //session('ludou_token',$token);
					 //$_SESSION['ludou_token'] = $token;
				?> 
				<form action="<?php site_url(); ?>?page_id=52" method="post" id="foo">
					<li class="log_name">登陆 邮箱/手机</li>
					<input id="log_name" name="log" type="text" placeholder=" 输入邮箱/手机">
					<li class="log_password">登陆密码</li>
					<input id="log_password" type="password" placeholder=" 输入密码" name="pwd" size="25"><span>忘记密码？</span><br>
					<li class="remenber-me"><input name="rememberme" class="log_checkbox" type="checkbox" value="1">记住我（下次自动登陆）</li>
					<input type="hidden" name="redirect_to" value="<?php if(isset($_GET['r'])) echo $_GET['r']; ?>" />
			      	<input type="hidden" name="ludou_token" value="<?php echo $token; ?>" />
					<input class="log_button" type="submit" value="登陆"><span>取消登录</span>
				</form>
			</div>
		</div>
	</div>	
	<div class="header">
		<div class="c1">
			<a href="http://zsjy.gdou.edu.cn/gdoujiuye/">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/gdou.png" class="logo"></a>
				<?php
                     wp_nav_menu( array( 
                     	'menu' => '首页', 
                     	'depth' => 1, 
                     	'menu_class'=>'c2'
                     	) 
                     );
				?>
			
			<ul class="c6">
				<li>
					<a href="<?php site_url(); ?>?page_id=34">个人中心</a>
					<span>|</span>
				</li>
				<?php
                     if(is_user_logged_in()){
                          echo '<li><a href="'.wp_logout_url(home_url()).'" title="登出">登出</a></li>';
                          echo '<li><a href="javascript:;" data-clicks-track="custom::首页::用户名">'.wp_get_current_user()->user_login.'</a></li>';
                     }else{
                     	   echo '<li><a href="http://zsjy.gdou.edu.cn/gdoujiuye/?page_id=11" data-clicks-track="custom::首页::注册">注册</a></li>';
                     	   echo '<li><a href="javascript:;"  class="action-popup-login" data-clicks-track="custom::首页::登录">登录</a></li>';
                     }
				?>
				
			</ul>
		</div>
	</div>