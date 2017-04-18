# DFrame
PHP framework by composer

DFrame 框架是一个轻量级PHP框架，此框架是由composer搭建起来的，所以管理特别方便。

此框架目前只集成了很少的组，所以使用起来特别简单

#### 包含组件
* macaw(路由)
* Eloquent(ORM)
* whoops(错误提示)
* twig(模板引擎)
* monolog(日志)
* captcha(验证码)
* curl(CURL)

以上6个组件，只需要会Eloquent和twig就能使用此框架进行开发。

以后打算集成更多好用的组件

* 邮件发送
* 文件上传
* Redis
* 等等...

#### 调用tiwg模板

```
use Lib\Controller;

class DefaultController extends Controller
{
	function index()
	{
		$assign = array(
			'title' => '(dframe.com)',
			'name' => 'Tome!'
		);
		$this->render("Default/index",$assign);
	}
}
```

#### monolog使用方式

```
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
```

```
function index()
{
	$log = new Logger('DefaultController_index');
	$logHandler = new StreamHandler('backend.log', $log::WARNING);
	$log->pushHandler($logHandler);
	$log->addWarning('omg what happend!');
}
```

#### captcha验证码使用
```
# controller
use Gregwar\Captcha\CaptchaBuilder;

function verify()
{
	$builder = new CaptchaBuilder;
	$builder->build();
	$builder->output();
	$_SESSION['phrase'] = $builder->getPhrase();
}

# template
<img src="/verify">

# routes.php

$routes = array(
	'verify' => "DefaultController@verify",
);
```

#### curl使用方式

```
use Curl\Curl;

$curl = new Curl();
$content = $curl->get('http://www.baidu.com/');
#echo "<pre>";
#var_dump($content);
echo $content->response;
```

参考文档：https://github.com/php-mod/curl
