<?php include_once('sidebar.php');?>
<div class='span9'>
	<form class='form-horizontal' method='post' enctype='multipart/form-data'>
		<input type='hidden' value='add-post' name='action'>
		<div class='control-group'>
			<label class='control-label'>Title</label>
			<div class='controls'>
				<input type='text' class='input-xxlarge' name='title'><br>
			</div>
		</div>
		<div class='control-group'>
			<label class='control-label'>Body</label>
			<div class='controls'>
				<textarea name='body' class='input-xxlarge'></textarea>
			</div>
		</div>
		<div class='control-group'>
			<label class='control-label'>Image(s)</label>
			<div class='controls'>
				<input type='file' name='blog-photos'>
			</div>
		</div>
		<div class='control-group'>
			<div class='controls'>
				<button type='submit' class='btn btn-success'>Publish</button>
			</div>
		</div>
	</form>
</div>