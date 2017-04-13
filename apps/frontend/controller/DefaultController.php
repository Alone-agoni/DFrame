<?php
namespace Frontend\Controller;
use Lib\Controller;
use Frontend\Model\Article;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class DefaultController extends Controller
{
	function index()
	{
		$log = new Logger('DefaultController_index');
		$logHandler = new StreamHandler('backend.log', $log::WARNING);
		$log->pushHandler($logHandler);
		$log->addWarning('omg what happend!');

		$articles = Article::where('id', '>', 0)->get();
		$assign = array(
			'title' => '(dframe.com)',
			'name' => 'Tome!',
			'article' => $articles
		);
		$this->render("Default/index",$assign);
	}
	
	function hello()
	{
		echo "<h2>Welcome DFrame！Hello！</h2>";
	}
}