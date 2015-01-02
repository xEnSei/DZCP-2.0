<?php
// include autoload composer file
require_once(dirname(__FILE__).'/../../../vendor/autoload.php');

$config=dirname(__FILE__).'/protected/config/main.php';
Yii::createWebApplication($config)->run();