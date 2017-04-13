<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Eloquent ORM
use Illuminate\Database\Capsule\Manager as Capsule;

// Autoload 自动载入
require "../vendor/autoload.php";

$capsule = new Capsule;
$capsule->addConnection(require '../config/database.php');
$capsule->bootEloquent();

// 载入路由配置
require "../apps/backend/config/routes.php";