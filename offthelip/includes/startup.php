<?php
if(!isset($_SESSION)) session_start();
require_once('config.php');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
set_include_path(SITE_PATH);
setlocale(LC_MONETARY, 'en_US');

//innitialize $errors and connect to MySQL database.
global $db,$errors,$site;
$errors = array();
$db = new MySQLi(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);
if (mysqli_connect_errno()) {
    error_log(mysqli_connect_error());
	exit('<h2>There has been a database connection error. Please refresh and try again.</h2>');
}