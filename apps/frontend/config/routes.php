<?php
use \NoahBuscher\Macaw\Macaw;

// The main entrance to the file
$entrance = "";

// Controller namespace
$namespace = "Frontend\Controller\\";

// All routes array
$routes = array(
	'' 		=> "DefaultController@index",
	'hello' => "DefaultController@hello"
);

// Parsing the routing 
foreach($routes as $key=>$val){
	if(empty($key)){
		Macaw::get($entrance.$key, $namespace.$val);
	}else{
		Macaw::get("{$entrance}/{$key}", $namespace.$val);
	}
}

Macaw::$error_callback = function() {

  throw new Exception("Routing has no matches 404 Not Found");

};

Macaw::dispatch();