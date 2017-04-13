<?php
namespace Lib;

class Controller
{
	function render($file,$array=array())
	{
		\Twig_Autoloader::register();
		$loader = new \Twig_Loader_Filesystem(dirname(__DIR__).'/apps/frontend/view');
		$twig = new \Twig_Environment($loader, array(  
            'cache' => BASE_PATH.'/cache/log/twig',  
            'debug' => true,  
        ));
		$template = $twig->loadTemplate($file.'.html');
		$template->display($array);  
	}
}