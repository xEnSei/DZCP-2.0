<?php
// include autoload composer file
require_once(dirname(__FILE__).'/../../../vendor/autoload.php');

// change the following paths if necessary
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

Yii::createWebApplication($config)->run();
