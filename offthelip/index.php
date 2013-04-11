<?php
require_once("includes/startup.php");

/* --Page Finding--*/
$site['page'] = explode('/',substr($_SERVER['REQUEST_URI'],1));
if(sizeof($site['page']) < 2 || $site['page'][0] != 'offthelip' || empty($site['page'][PAGE_INDEX]))
	$site['page'] = array('offthelip','dashboard');
foreach($site['page'] as $key => $value)
	$site['page'][$key] = str_replace('.','/',$value);
	
/*--CSS Scripts--*/
$site['css'] = array();
$site['css'][] = 'bootstrap.min.css';
$site['css'][] = 'bootstrap-responsive.min.css';

/* --JS Scripts--*/
$site['js'] = array();
$site['js'][] = 'bootstrap.min.js';

/* --Pre Processing--*/

if(file_exists('pre-content/' . $site['page'][PAGE_INDEX].'.php'))
	include_once('pre-content/' . $site['page'][PAGE_INDEX].'.php');

if(!file_exists('content/' . $site['page'][PAGE_INDEX].'.php'))
	$site['page'][1] = '404';

/* --Content Display--*/

require_once('header.php');
flush();
include('content/' . $site['page'][PAGE_INDEX] . '.php');
flush();
require_once('footer.php');