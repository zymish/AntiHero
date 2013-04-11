<?php
$site['pageTitle'] = 'Add New Post';

if(isset($_POST['action']) && $_POST['action'] == 'add-post'):
	if($_POST['title'] != '' || $_POST['body'] != ''):
		$title = $_POST['title'];
		$body = $_POST['body'];
		$imgs = $_FILES;
		$sql = "INSERT INTO `content` (`title`,`body`,`timestamp`) VALUES('".$title."','".$body."','".date('Y-m-d H:i:s')."')";
		$result = $db->query($sql);
		if($result):
			$errors = array(
				'type'	=> 'success',
				'msg'	=> 'Post successfully added.'
			);
		else:
			$errors['msg'] = $db->error;
		endif;
	else:
		$errors = array('type'=>'error','msg'=> 'Title and Body cannot be left blank.');
	endif;
endif;