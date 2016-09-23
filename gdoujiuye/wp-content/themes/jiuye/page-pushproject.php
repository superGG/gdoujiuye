<?php 
/**
 * Template Name: 前台发布项目页面
 */
if(!is_user_logged_in()){
   wp_die('请您登陆后进行操作！');
}
get_header(); 
?>
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/pushProject.css">
  <div class="container">
    <div class="banner"></div>
    <div id="content" class="content">
      <div class="get">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/get.png">
        <div class="c1">
          <div class="c2"> <strong>来自同学和投资人的目光</strong>
            <p>
              广海孵化扎根海大，给学子们提供一个讨论的平台
              <br>也吸引投资人，来寻找优质项目，没准下一个就是你！</p>
          </div>
          <div class="c3">
            <strong>来自广东海洋大学创新创业孵化基地的帮助</strong>
            人气高的优质项目将有机会入驻孵化基地
              <br>基地提供配套齐全的办公室，优秀的创业导师，帮助你完成梦想！</p>
          </div>
        </div>
      </div>
      <div class="true">
       
        <div class="c5">
          <p>
            
          </p>
        </div>

        <a href="<?php site_url(); ?>?page_id=56" class="action-project-new">发起项目</a>
      </div>
    </div>
    <div id="popup_alert" class="popup-alert popup">
      <div class="c1">
        <div class="c11">
          <a class="action-toggle close" data-action-target="popup_alert" href="#toggle"></a>
        </div>
        <div class="c12">
          <p id="popup_alert_message"></p>
          <p class="c121">
            <span class="button button-green">
              <a href="#toggle" data-action-target="popup_alert" class="action-toggle">确定</a>
            </span>
          </p>
        </div>
      </div>
      <div class="c2"></div>
    </div>

    <div id="popup_notify" class="popup-notify hide">
      <a href="/notify?type=all" data-remote="true" class="close2 action-toggle" data-action-target="popup_notify">关闭</a>
      <ul></ul>
    </div>

    <div id="popup_verify" class="popup-verify popup">
      <div class="c1">
        <div class="c11">
          <h2>手机认证</h2>
          <a href="#toggle" data-action-target="popup_verify" class="action-toggle close"></a>
        </div>
        <form id="popup_verify_form" action="/tokens" accept-charset="UTF-8" data-remote="true" method="post">
          <input name="utf8" type="hidden" value="✓">
          <div class="c12">
            <label>手机号：</label>
            <input type="hidden" name="url" id="popup_verify_url">
            <input type="text" name="mobile" autocomplete="off" class="text" id="popup_verify_number">
            <span id="popup_verify_send" class="button button-ajax button-green">
              <button type="submit">获取验证码</button>
            </span>
            <span id="popup_verify_wait" class="hide c121"></span>
          </div>
          <div id="popup_verify_verify" class="c12 hide">
            <label>验证码：</label>
            <input type="text" name="token" autocomplete="off" class="text" id="popup_verify_token">
            <span class="button button-ajax button-green">
              <button type="submit">确认</button>
            </span>
          </div>
        </form>
      </div>
      <div class="c2"></div>
    </div>

    <div id="popup_preview" class="popup-preview popup">
      <div class="c1">
        <div class="c11">
          <a class="action-toggle close close3" data-action-target="popup_preview" href="#toggle"></a>
        </div>
        <div class="c12">
          <img id="popup_preview_image" src="">
          <img id="popup_preview_load" src="http://assets.demohour.com/assets/load-05eb745176d79ec27d52d544582483fc4d0f6378c7ed2060be24dfc4e8990668.gif" class="c14"></div>
        <div class="c13">
          <a href="#preview-prev" id="popup_preview_prev" class="c131 c134"></a>
          <a href="#preview-open" id="popup_preview_open" class="c132"></a>
          <a href="#preview-next" id="popup_preview_next" class="c133"></a>
        </div>
      </div>
      <div class="c2"></div>
    </div>

    <div id="popup_confirm" class="popup-confirm popup">
      <div class="c1">
        <div class="c11">
          <a class="action-toggle close" data-action-target="popup_confirm" href="#toggle"></a>
        </div>
        <div class="c12">
          <p id="popup_confirm_message"></p>
          <p class="c121">
            <a href="#toggle" data-action-target="popup_confirm" class="c123 action-toggle">取消</a>
            <span class="button button-green button-ajax">
              <a id="popup_confirm_url" href="#confirm">确定</a>
            </span>
          </p>
        </div>
      </div>
      <div class="c2"></div>
    </div>

  </div>

  

<?php 
get_footer();
?>