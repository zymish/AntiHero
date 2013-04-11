<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?= DEFAULT_TITLE . " - ".((isset($site['pageTitle']) && !empty($site['pageTitle']))?$site['pageTitle']:'404') ?></title>
		<meta charset="UTF-8" />
        <meta name="description" content="Admin Panel">
		<meta name="author" content="Boundless Ether, LLC">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <link rel="icon" type="image/png" href="<?= SITE_ROOT ?>img/favicon.png">
        <link rel="stylesheet" type="text/css" media="screen" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
		<link rel='stylesheet' type='text/css' href='<?=SITE_ROOT?>css/custom.css'>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css" rel="stylesheet">
        
        <link href="//netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome-ie7.css" rel="stylesheet">
        
		<?php if(is_array($site['css'])) foreach($site['css'] as $file): ?>
			<link rel="stylesheet" href="css/<?= $file; ?>" />
		<?php endforeach; ?>
	</head>
    <body>
		<div id='content'>
			<div id='content-header'>
				<h3><?= (isset($site['pageTitle']) && !empty($site['pageTitle']))?$site['pageTitle']:'Error 404'; ?></h3>
				<?php if(!empty($errors)):?><h5 class='alert alert-<?=$errors['type']?>'><?=$errors['msg']?></h5><?endif;?>
			</div>
			<div class='container-fluid'>