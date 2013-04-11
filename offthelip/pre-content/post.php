<?php
if($site['page'][2] == '' || empty($site['page'][2]))
header('Location:'.SITE_ROOT.'dashboard');

$site['pageTitle'] = 'View / Edit Post';

if($_POST['action'] == 'edit-post'):
	$title = $_POST['title'];
	$body = $_POST['body'];
	$uid = $_POST['uid'];
	$sql = "UPDATE `content` SET `title` = '".$title."', `body` = '".$body."' WHERE `uid` = '".$uid."'";
	$result = $db->query($sql);
	if($result):
		$errors = array(
			'type'	=> 'success',
			'msg'	=> 'Post successfully updated.'
		);
	else:
		$errors['msg'] = $db->error;
	endif;
elseif($_POST['action'] == 'delete-post'):
	$uid = $_POST['uid'];
	$sql = "DELETE FROM `content` WHERE `uid` = '".$uid."'";
	$result = $db->query($sql);
	if($result):
		$errors = array(
			'type'	=> 'success',
			'msg'	=> 'Post successfully deleted.'
		);
	else:
		$errors = array(
			'type'	=> 'danger',
			'msg'	=> 'There was a database issue. Please try again.'
		);
	endif;
endif;

$sql = "SELECT `uid`,`title`,`body` FROM `content` WHERE `uid` = '".$site['page'][2]."'";
$result=$db->query($sql);
if($result) $post = $result->fetch_assoc();