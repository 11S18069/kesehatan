<?php

// change the following paths if necessary
<<<<<<< HEAD
$yii=dirname(__FILE__).'../yii/framework/yii.php';
=======
$yii=dirname(__FILE__).'/yii/framework/yii.php';
>>>>>>> 3776da6a226a7e2eb38c069c608ab7f9dde5a9dd
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
