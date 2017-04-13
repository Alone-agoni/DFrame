<?php
namespace Frontend\Controller;
use Frontend\Model\Article;

class DefaultController
{
	function index()
	{
		echo "<h2>Welcome DFrame!</h2>";
		$articles = Article::find(2);
		require dirname(__FILE__).'/../view/Default/index.php';
	}
	
	function hello()
	{
		echo "<h2>Welcome DFrame！Hello！</h2>";
	}
}