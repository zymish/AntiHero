<?php require_once('sidebar.php');?>
<div class='span9'>
	<table class='table table-striped table-bordered posts-table' width='100%'>
		<thead>
			<tr>
				<th>Title</th>
				<th>Body</th>
			</tr>
		</thead>
		<tbody>
			<?php if($posts) while($post = $posts->fetch_assoc()):?>
				<tr>
					<td><a href='<?=SITE_ROOT?>post/<?=$post['uid']?>'><?=$post['title']?></a></td>
					<td><a href='<?=SITE_ROOT?>post/<?=$post['uid']?>'><?=$post['body']?></a></td>
				</tr>
			<?php endwhile;?>
		</tbody>
	</table>
</div>