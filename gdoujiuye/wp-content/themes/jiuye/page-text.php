<?php
/**
 * Template Name: 前台表单测试页面
 */
?>
<!-- <form method="post" action="http://localhost/wordpress/?page_id=175">
			<ul>
				<li style="font-size:20px; color:#888;">学生注册</li><li class="registed">已是广海孵化用户！<span id="regist_log">登陆</span></li>
				<hr size="1" width="600" color="#ddd">
				<li><input class="regist_academic" type="text" name="user_academy" placeholder=" 所在学院"></li>
				<li><input class="regist_number" type="text" name="user_studentID" placeholder=" 学号"></li>
				<li><input class="regist_name" type="text" name="user_login" placeholder=" 姓名"></li>
				<li><input class="regist_email" type="text" name="user_email" placeholder=" 邮箱"></li>
				<li><input class="regist_mobile" type="text" name="user_phone" placeholder=" 手机号码"></li>
				<li><input class="regist_password" type="text" size="25" name="user_pass" placeholder=" 密码（至少6个字符）"></li>
				<li class="regist_clause" >广海孵化服务条款</li>
				<input type="hidden" name="reg" value="ok" />
				<input type="hidden" name="reg_type" value="student" />
				<input class="regist_button" type="submit" value="同意并注册">
			</ul>	
</form> -->

<form  method="post" action="<?php site_url(); ?>?page_id=175" >
		
		
		<ul class="form">

				<input type="hidden" name="type" value="project" />

				<input type="hidden" name="tougao_form" value="send" />

			<li>
				<label>项目名称:</label>
				<div>
					<input autocomplete="off" placeholder="不超过25个字" class="text" type="text" name="project_name" id="project_name" />
				</div>
			</li>
<!-- 			<li>
				<label>选择类别:</label>
				<div class="c10">
					<p>
						<label class="radio" style="background:none;">
							<input type="radio" value="internet" style="height:21px; display:block"name="tag"  />
							通讯数码
						</label>
						<label class="radio" style="background:none">
							<input type="radio" value="home" style="height:21px; display:block"name="tag"  />
							家居生活
						</label>
						<label class="radio" style="background:none">
							<input type="radio" value="smartwear" style="height:21px; display:block"name="tag"  />
							智能穿戴
						</label>
						<label class="radio" style="background:none">
							<input type="radio" value="entertainment" style="height:21px; display:block"name="tag"  />
							影音娱乐
						</label>
						<label class="radio" style="background:none">
							<input type="radio" value="travel" style="height:21px; display:block"name="tag"  />
							出行定位
						</label>
						<label class="radio" style="background:none">
							<input type="radio" value="office" style="height:21px; display:block"name="tag"  />
							办公相关
						</label>
					</p>
				</div>
			</li>	 -->					
<!-- 						<li>
				<label>项目简介:</label>
				<div>
					<script id="container" name="content" type="text/plain">
				        这里写你的初始化内容
				    </script>
				</div>
			</li> -->
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
					<input type="submit" value="保存，并发布"/>
				</span>
			</li>
		</ul>
</form>

