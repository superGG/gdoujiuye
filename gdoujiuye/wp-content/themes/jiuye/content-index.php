
	<div class="container">
		<div id="banner_large" class="fullpage-wrapper" style="height: 100%; position: relative; top: 0px;">
			<div class="section fp-section active" >
				<div class="fp-slides">
					<div class="fp-slidesContainer" style="width: 600%;">
						<div class="slide fp-slide" title="广东海洋大学首届创客街大赛" style="width: 16.666%; background-image: url(<?php bloginfo( 'template_url' ); ?>/img/slides01.jpg);">
							<a  target="_blank"></a>
						</div>
						<div class="slide fp-slide" title="广海创业孵化网站上线了！" style="width: 16.666%; background-image: url(<?php bloginfo( 'template_url' ); ?>/img/slides02.jpg);">
							<a  target="_blank"></a>
						</div>
						<div class="slide fp-slide" title="相信梦想的力量" style="width: 16.666%; background-image: url(<?php bloginfo( 'template_url' ); ?>/img/slides03.jpg);">
							<a  target="_blank"></a>
						</div>
						<div class="slide fp-slide" title="相信梦想的力量" style="width: 16.666%; background-image: url(<?php bloginfo( 'template_url' ); ?>/img/slides04.jpg);">
							<a  target="_blank"></a>
						</div>
						<div class="slide fp-slide active" title="相信梦想的力量" style="width: 16.666%; background-image: url(<?php bloginfo( 'template_url' ); ?>/img/slides05.jpg);">
							<a  target="_blank"></a>
						</div>
						<div class="slide fp-slide" title="广东海洋大学首届创客街大赛" style="width: 16.666%; background-image: url(<?php bloginfo( 'template_url' ); ?>/img/slides01.jpg);">
							<a  target="_blank"></a>
						</div>
					</div>
				</div>
				<div class="fp-controlArrow fp-prev"></div>
				<div class="fp-controlArrow fp-next"></div>
				<div class="fp-slidesNav bottom">
					<table style="table-layout: fixed;">
						<tbody>
							<tr>
								<td>
									<a  >
										广东海洋大学首届创客街大赛
										<span></span>
									</a>
								</td>
								<td>
									<a  >
										广海创业孵化网站上线了！
										<span></span>
									</a>
								</td>
								<td>
									<a  >
										相信梦想的力量
										<span></span>
									</a>
								</td>
								<td>
									<a  >
										相信梦想的力量
										<span></span>
									</a>
								</td>
								<td>
									<a  >
										相信梦想的力量
										<span></span>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
		<div id="content" class="content">
			<div class="c31">
				<!-- <a  target="_blank">
					<img src="<?php bloginfo( 'template_url' ); ?>/img/content01.jpg"></a>
				<a  target="_blank">
					<img src="<?php bloginfo( 'template_url' ); ?>/img/content01.jpg"></a> -->

			</div>
			<div class="cl"></div>
			<div class="c30">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/tuijian.png">
				
				<p>
					
					<a href="">热门项目</a>
					<a  class="m" href="<?php site_url(); ?>?post_type=project">查看更多</a>
				</p>
			</div>
			<div class="cl"></div>
			<div id="project_list" class="c8">
				<?php
                    $args=array(
						  'post_type'=>'project',//查找出所有文章（多个结果集，复数）
						   //'page_id'=>19//仅仅查询id号为x(x是数字，你自己系统中‘现有’的某个文章的id)的页面，只有一个结果，单数，如果page_id不指定，则返回所有page
							'comment_status' => "open",
					);
					$remen=array(
						  'post_type'=>'project', 
						  'comment_status' => "closed",
					);
					// 实例化wp_query
					$the_query = new WP_Query( $args );
					$remen_query = new WP_Query($remen);
					$sum = 0;

					// 开始循环
					if ( $remen_query->have_posts() ) {//如果找到了结果，便输出以下内容 
						// $i = 0;
						while ( $remen_query->have_posts() && $sum<8) {//再次判断是否有结果
							$remen_query->the_post();//不用问为什么，每次都要写这个；
							$sum++;
							// print($the_query[0]->comment_status);
							echo '<dl class="project-poster project-running">
									<dd class="c3">';
							echo '<a href="'.get_permalink().'" title="阅读全文">';
							dm_the_thumbnail();
							echo '</a>';  
							echo		'</dd>
									<dt>
										<a href="';
										the_permalink();
							echo			'" target="_blank" class="project-poster-name">';
										the_title();
							echo		'</a>
									</dt>
									<dd class="c6">
										<span> ';
										the_excerpt();
							echo		'</span>
									</dd>
								</dl>
							';//这里开始输出你想要的模板标签
						}
					} else {
						// 如果没有找到任何结果，就输出这个
					} 
					// 开始循环
					if ( $the_query->have_posts() ) {//如果找到了结果，便输出以下内容 
						
						while ( $the_query->have_posts() && $sum < 8) {//再次判断是否有结果
							$the_query->the_post();//不用问为什么，每次都要写这个；
							$sum ++;
							echo '<dl class="project-poster project-running">
									<dd class="c3">';
							echo '<a href="'.get_permalink().'" title="阅读全文">';
							dm_the_thumbnail();
							echo '</a>';  
							echo		'</dd>
									<dt>
										<a href="';
										the_permalink();
							echo			'" target="_blank" class="project-poster-name">';
										the_title();
							echo		'</a>
									</dt>
									<dd class="c6">
										<span> ';
										the_excerpt();
							echo		'</span>
									</dd>
								</dl>
							';//这里开始输出你想要的模板标签
						}
					} else {
						// 如果没有找到任何结果，就输出这个
					} 
					wp_reset_postdata();//不用问为什么，每次都记得写就好
				?>
				


			</div>
			<div class="cl"></div>
		</div>
		<div class="adv" background="url(img/info_background.png) no-repect center center"></div>
		<div class="whitebg">
			<div class="intro">
				<h2>创意的实现需要发起人和支持者共同努力</h2>
				<div>
					<p>
						展示创意，设定筹资的目标和期限。在筹资期限内必须达到设置的筹款目标，反之则失败，原款将返还支持者。在项目发展的各个阶段必须与支持者保持有效沟通。
					</p>
					<span class="c2">
						<a href="<?php site_url(); ?>?page_id=44">发起项目</a>
					</span>
				</div>
				<div>
					<p>
						以资金支持项目即成为该项目的支持者。全面了解和认同发起人的理念，在理解项目可能存在的风险后，谨慎支持，不但对参与的项目报以最大热情且认真监督。
					</p>
					<span class="c3">
						<a href="<?php site_url(); ?>?post_type=project">浏览项目</a>
					</span>
				</div>
				<div class="c4">
					<p>
						如果你需要或能提供产品定位、融资天使、孵化空间、工业设计、品牌营销、代工资源、软件云服务、销售渠道、媒体公关、团队人才等各类资源，请跟我们联系。
					</p>
					<span>
						<a  class="action-popup-login">联系我们</a>
					</span>
				</div>
			</div>
			<div class="partner">
				<!--<span>合作伙伴</span>
			<a >
				<img src="http://assets.demohour.com/assets/demo/60-709e3f625ebaf3f9f3f0bb5f650fca67464851198ccf85c1db700723fd7d5ac2.jpg"/>
			</a>
			<a href="">
				<img src="http://assets.demohour.com/assets/demo/60-709e3f625ebaf3f9f3f0bb5f650fca67464851198ccf85c1db700723fd7d5ac2.jpg"/>
			</a>
			-->
		</div>
	</div>

</div>

<?php get_footer(); ?>