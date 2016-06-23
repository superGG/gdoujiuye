<?php
/**
 * Template Name: 前台编辑项目页面
 */
get_header(); 
?>
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/pushProject.css">
<div class="container">
		<div class="tab">
			<div class="c1">
				<h2>发布我的项目</h2>
				<ul>
					<li>
						<a id="tab_edit-basic" href="">基本信息</a>
					</li>
				</ul>
				
			</div>
		</div>

		<div id="content" class="content">
			<div class="l1">
				<form  method="post" action="<?php site_url(); ?>?page_id=54" >
					<input type="hidden" name="tougao_form" value="send" />
					<input type="hidden" name="type" value="project" />
					<ul class="form">
						<li>
							<label>项目名称:</label>
							<div>
								<input autocomplete="off" placeholder="不超过25个字" class="text" type="text" name="project_name" id="project_name" />
							</div>
						</li>
						<li>
							<label>选择类别:</label>
							<div class="c10">
								<p>
									<label class="radio" style="background:none;">
										<input type="radio" value="internet" style="height:21px; width:15px;display:block"name="tag"  />
										通讯数码
									</label>
									<label class="radio" style="background:none">
										<input type="radio" value="home" style="height:21px; width:15px;display:block"name="tag"  />
										家居生活
									</label>
									<label class="radio" style="background:none">
										<input type="radio" value="smartwear" style="height:21px; width:15px;display:block"name="tag"  />
										智能穿戴
									</label>
									<label class="radio" style="background:none">
										<input type="radio" value="entertainment" style="height:21px; width:15px;display:block"name="tag"  />
										影音娱乐
									</label>
									<label class="radio" style="background:none">
										<input type="radio" value="travel" style="height:21px; width:15px;display:block"name="tag"  />
										出行定位
									</label>
									<label class="radio" style="background:none">
										<input type="radio" value="office" style="height:21px; width:15px;display:block"name="tag"  />
										办公相关
									</label>
								</p>
							</div>
						</li>						
						<li>
							<label>项目简介:</label>
							<div>
								<script id="container" name="content" type="text/plain">
							        这里写你的初始化内容
							    </script>
							</div>
						</li>
<!-- 						<li>
							<label>封面图片:</label>
							<div>
								<div class="c30">
									<span id="project_posters_button"></span> <strong>支持JPG、JPEG、PNG、GIF格式；建议尺寸：690x512px；</strong>
								</div>
								<input type="file" name="" id="">
							</div>
						</li> -->											
						<li class="c4">							
							<span class="button button-green action-next">
								<input type="submit" value="保存，并发布" id="submit"/>
							</span>
						</li>
					</ul>
				</form>
			</div>

		</div>
	</div>
</div>
<!-- 配置文件 -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/ueditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>

<?php
get_footer();
?>