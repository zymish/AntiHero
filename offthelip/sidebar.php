<div class='span3'>
	<div class='well sidebar-nav'>
		<ul class='nav nav-list'>
			<li <?php if($site['pageTitle'] == 'Dashboard'):?>class='active'<?endif;?>><a href='<?=SITE_ROOT?>dashboard'>Last 5 Posts</a></li>
				<?php $sql = "SELECT `uid`, `title` FROM `content` ORDER BY `timestamp` DESC LIMIT 5";
					$listPosts = $db->query($sql);?>
					<li>
						<ul>
							<?if($listPosts) while($listPost = $listPosts->fetch_assoc()):?>
								<li <? if($site['page'][1] == 'post' && $site['page'][2] == $listPost['uid']):?>class='active'<?endif;?> id='<?=$listPost['uid']?>'><a href='<?=SITE_ROOT?>post/<?=$listPost['uid']?>'><?=$listPost['title']?></a></li>
							<?endwhile;?>
						</ul>
					</li>
			<li <?php if($site['pageTitle'] == 'All Posts'):?>class='active'<?endif;?>><a href='<?=SITE_ROOT?>all-posts'>All posts</a></li>
		</ul>
		<br>
		<a href='<?=SITE_ROOT?>add-post' class='btn btn-success btn-block'><i class='icon-plus'></i> Add New Post</a>
	</div>
</div>