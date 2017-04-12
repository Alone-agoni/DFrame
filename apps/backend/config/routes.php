<?php
use \NoahBuscher\Macaw\Macaw;

Macaw::get("backend.php", "Backend\Controller\DefaultController@index");

Macaw::get('(:all)', function($fu) {
  echo '未匹配到路由<br>'.$fu;
});

Macaw::dispatch();