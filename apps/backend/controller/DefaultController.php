<?php
namespace Backend\Controller;
use Frontend\Model\Article;

class DefaultController
{
	function index()
	{
		echo "<h2>Welcome Backend！</h2>";
		$articles = Article::find(2)->toArray();
		echo "<pre>";
		var_dump($articles);
		
	}
	
	function hello()
	{
		echo "<h2>Welcome Backend！Hello！</h2>";
	}
}