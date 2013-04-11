<?php
$site['pageTitle'] = 'All Posts';
$sql = "SELECT `uid`, `title`, `body` FROM `content` ORDER BY `timestamp` DESC";
$posts = $db->query($sql);