<?php
namespace Frontend\Controller;
use Lib\Controller;
use Frontend\Model\Article;

class DefaultController extends Controller
{
	function index()
	{
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