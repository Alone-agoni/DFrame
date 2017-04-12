<?php
use \NoahBuscher\Macaw\Macaw;

$home = "Home\Controller\\";
$admin = "Admin\Controller\\";

Macaw::get("", "{$home}IndexController@index");
Macaw::get("create", "{$home}IndexController@create");


Macaw::get("Admin", "{$admin}IndexController@index");

Macaw::get('(:all)', function($fu) {
  echo '未匹配到路由<br>'.$fu;
});

Macaw::dispatch();
