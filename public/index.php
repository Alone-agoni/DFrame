<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// 定义 PUBLIC_PATH
define('PUBLIC_PATH', __DIR__);

// 启动器
require PUBLIC_PATH.'/../bootstrap.php';

// 路由配置、开始处理

require BASE_PATH.'/apps/frontend/config/routes.php';