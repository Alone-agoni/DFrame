<?php
namespace Frontend\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	// 该模型是否被自动维护时间戳
	public $timestamps = false;
	// 与模型关联的数据表
	protected $table = 'article';
}