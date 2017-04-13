<?php
namespace Frontend\Controller;
use Lib\Controller;
use Frontend\Model\Article;
use Gregwar\Captcha\CaptchaBuilder;

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
		echo $_SESSION['phrase'];
	}
	
	function verify()
	{
		$builder = new CaptchaBuilder;
		$builder->build();
		$builder->output();
		$_SESSION['phrase'] = $builder->getPhrase();
	}
}