<?php include_once('sidebar.php');?>
<div class='span9'>
	<form class='form-horizontal' method='post' id='post-form'>
		<input type='hidden' name='action'>
		<input type='hidden' name='uid' value='<?=$post['uid']?>'>
		<div class='control-group'>
			<label class='control-label'>Title</label>
			<div class='controls'>
				<input type='text' class='input-xxlarge' name='title' value="<?=$post['title']?>"><br>
			</div>
		</div>
		<div class='control-group'>
			<label class='control-label'>Body</label>
			<div class='controls'>
				<textarea class='input-xxlarge' name='body'><?=$post['body']?></textarea>
			</div>
		</div>
		<div class='control-group'>
			<div class='controls'>
				<button type='button' class='btn btn-success' onclick='editPost()'><i class='icon-save'></i> Save Changes</button>
				<button type='button' class='btn btn-danger' onclick='deletePost()'><i class='icon-remove'></i> Delete Post</button>
			</div>
		</div>
	</form>
</div>
<script type='text/javascript'>
function deletePost()
{
	removePost = confirm('Are you sure you want to remove this post? This action cannot be undone!');
	if(removePost == true)
	{
		$('[name=action]').val('delete-post');
		$('#post-form').submit();
	}
}
function editPost()
{
	$('[name=action]').val('edit-post');
	$('#post-form').submit();
}
</script>