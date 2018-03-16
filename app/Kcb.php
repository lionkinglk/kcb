<?php
/**
 * Created by PhpStorm.
 * User: djk
 * Date: 2018/3/16
 * Time: 21:52
 */
namespace App;
use Illuminate\Database\Eloquent\Model;
class Kcb extends model
{
//  指定表名
    protected $table = 'kcb';
//    指定主键
    protected $primaryKey = 'id';
//    指定允许批量赋值的字段
    protected $fillable = ['branch','class','course'];
//    自动维护时间戳 created_at创建时间，updated_at更新时间
    public $timestamps = true;
//    以unix时间戳形式存储日期时间
    public function getDateFormat()
    {
        return time();
    }
//    返回unix时间戳格式的日期时间
    protected  function asDateTime($value)
    {
        return $value;
    }
}
