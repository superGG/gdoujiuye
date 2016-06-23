<?php
/**
 * Template Name: 前台编辑项目处理
 */

if( isset($_POST['tougao_form']) && $_POST['tougao_form'] == 'send')
{
    global $wpdb;
    global $current_user;
    get_currentuserinfo();

    $last_post = $wpdb->get_var("SELECT post_date FROM $wpdb->posts WHERE post_type = 'project' ORDER BY post_date DESC LIMIT 1");
 
    // 博客当前最新文章发布时间与要投稿的文章至少间隔120秒。
    // 可自行修改时间间隔，修改下面代码中的120即可
    // 相比Cookie来验证两次投稿的时间差，读数据库的方式更加安全
    if ( current_time('timestamp') - strtotime($last_post) < 120 )
    {      
        wp_die('您投稿也太勤快了吧，先歇会儿！');
    }
 
    // 表单变量初始化
    //$name = isset( $_POST['tougao_authorname'] ) ? trim(htmlspecialchars($_POST['tougao_authorname'], ENT_QUOTES)) : '';
    //$email =  isset( $_POST['tougao_authoremail'] ) ? trim(htmlspecialchars($_POST['tougao_authoremail'], ENT_QUOTES)) : '';
    //$blog =  isset( $_POST['tougao_authorblog'] ) ? trim(htmlspecialchars($_POST['tougao_authorblog'], ENT_QUOTES)) : '';    
    $name        = $current_user->user_login;
    $email       = $current_user->user_email;
    $title       =  isset( $_POST['project_name'] ) ? trim(htmlspecialchars($_POST['project_name'], ENT_QUOTES)) : '';
    $post_type   =  $_POST['type'] ;
    //$content =  isset( $_POST['content'] ) ? trim(htmlspecialchars($_POST['content'], ENT_QUOTES)) : '';
    $content     = isset( $_POST['content'] ) ? $_POST['content'] : '';
    $tag         = isset( $_POST['tag'] ) ? $_POST['tag'] : '';
    $post_author = $current_user->ID ;

    // 表单项数据验证
    if ( empty($name) || mb_strlen($name) > 20 )
    {
        wp_die('昵称必须填写，且长度不得超过20字');
    }
 
    if ( empty($email) || strlen($email) > 60 || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    {
        wp_die('Email必须填写，且长度不得超过60字，必须符合Email格式');
    }
 
    if ( empty($title) || mb_strlen($title) > 100 )
    {
        wp_die('标题必须填写，且长度不得超过100字');
    }
 
    if ( empty($content) || mb_strlen($content) > 10000 || mb_strlen($content) < 100)
    {
        wp_die('内容必须填写，且长度不得超过3000字，不得少于100字');
    }
 
    $post_content = '昵称: '.$name.'<br />Email: '.$email.'<br />blog: '.$blog.'<br />内容:<br />'.$content;
 
    $tougao = array(
        'post_title' => $title,
        'post_content' => $content,
        'post_type' => $post_type ,
        'tags_input' => $tag,
        'post_author' =>$post_author
    );
    //print_r($tougao);
 
 
    // 将文章插入数据库
    $status = wp_insert_post( $tougao );
 
    if ($status != 0) 
    { 
        // 投稿成功给博主发送邮件
        // somebody#example.com替换博主邮箱
        // My subject替换为邮件标题，content替换为邮件内容
        wp_mail("somebody#example.com","My subject","content");
 
        wp_die('投稿成功！您的文章将在审核通过后发布！','投稿成功！');

    }
    else
    {
        wp_die('投稿失败！');
    }
} 
?>