<?php
$site['pageTitle'] = 'Dashboard';
$sql = "SELECT `uid`, `title`, `body` FROM `content` ORDER BY `timestamp` DESC LIMIT 5";
$posts = $db->query($sql);