<style type="text/css">
#joinUs {
	position: absolute;
margin-left: -123px;
margin-top: 30px;
background: #d7d528;
color: #fff;
padding: 15px 45px;
font-size: 16px;
border-radius: 10px;
}
</style>
<?php 
$current_user = wp_get_current_user();
$post_id = get_the_id();
?>
<div class="l1">
				<div class="c12">
					<div class="t43">
						<div class="t40"><?php the_title();?></div>
						<div class="c42">
							<?php
							    $tags = get_the_tags();
							    if($tags){
								    foreach ($tags as $tag ) {
								    	echo '<a ">'.$tag->name.'</a>';
								    }	
							    }
							    

							?>
						</div>
						<div class="c44"><?php the_excerpt();?></div>
					</div>
					<div class="t31">
						<div id="project_content" class="">
							<div class="c311">
								<?php the_content();?>
							</div>
						</div>
					</div>
					<div class="c32 action-toggle-content" data-action-target="project_content" style="display: none;">查看更多详情 &gt;&gt;</div>
				</div>
			</div>

			<div class="l2">
				<div class="support" style="height: 225px;">
					<div class="c5">
						<strong> <b>作者:</b>
							<?php the_author();?>
						</strong>
						<!-- <span>181人支持</span> -->
						
						<div class="c3">
							如果你对这个项目感兴趣，可以点击下方的“加入讨论”，项目发起人将会获取你的联系方式，你将有空能一起参加这个项目的落地发展哦！
							<a href="<?php site_url(); ?>?page_id=42&user_id=<?php echo $current_user->ID; ?>&post_id=<?php echo $post_id ;?>" id="joinUs">加入讨论</a>
						</div>
					</div>
				</div>
				
				<div class="repay">
				</div>

			</div>
