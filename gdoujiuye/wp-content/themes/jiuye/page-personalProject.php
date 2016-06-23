<?php
/**
 * Template Name: 前台个人项目详细信息
 */
get_header();
?>
<?php
global $wpdb;
$post_id = $_GET['post_id'] ;


?>
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/projectlist.css">
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

<style type="text/css">
	.container {
		padding-top: 80px;
	}

	.container .table.table-hover tr th {
		text-align: center;
	}
</style>
<div class="container">		
	<table class="table table-hover">
	<tr>
		<th>姓名</th>
		<th>联系电话</th>
		<th>邮箱</th>
	</tr>
	<?php
	$member_array = array();
	$member_id_array = $wpdb->get_results("SELECT meta_value FROM $wpdb->postmeta WHERE post_id =".$post_id." AND meta_key = 'joinProtect'");
	foreach ($member_id_array as $key => $value) {
		$member_info = $wpdb->get_results("SELECT display_name,user_email FROM $wpdb->users WHERE ID =".$value->meta_value);
		$member_phone_array = $wpdb->get_results("SELECT meta_value FROM $wpdb->usermeta WHERE user_id =".$value->meta_value." AND meta_key = 'phone'");
		//$member_info[0]->phone = get_user_meta($value->meta_value,'user_type')[0];
		$member_info[0]->phone = $member_phone_array[0]->meta_value;
		$member_array[] = $member_info;
	}
		foreach ($member_array as $key => $value) {
			echo '<tr><td>'.$value[0]->display_name.'</td>';
			echo '<td>'.$value[0]->phone.'</td>';
			echo '<td>'.$value[0]->user_email.'</td></tr>';
		}
	?>
	</table>
</div>

<?php
	get_footer();
?>