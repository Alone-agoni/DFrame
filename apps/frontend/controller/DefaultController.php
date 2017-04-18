<?php
namespace Frontend\Controller;
use Lib\Controller;
use Frontend\Model\Article;
use Gregwar\Captcha\CaptchaBuilder;
use Curl\Curl;

class DefaultController extends Controller
{
	function index()
	{
		$curl = new Curl();
		$content = $curl->get('http://www.baidu.com/');
		#echo "<pre>";
		#var_dump($content);
		echo $content->response;
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