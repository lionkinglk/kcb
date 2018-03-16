<?php
/**
 * Created by PhpStorm.
 * User: djk
 * Date: 2018/3/16
 * Time: 22:18
 */
namespace App\Http\Controllers;
use App\Kcb;
use Illuminate\Support\Facades\DB;
class KcbController extends Controller
{
    public function ormadd()
    {
        //使用模型新增记录
        //需处理unix时间戳
//        $kcb = new Kcb();
//        $kcb->branch = 4;
//        $kcb->class = '16春检验';
//        $kcb->course = '生物化学';
//        $bool = $kcb->save();
//        dd($bool);
        //显示记录
//        $kcb = Kcb::find(5);
//        echo $kcb->created_at;
        //格式化日期时间
//        echo date('Y-m-d H:i:s',$kcb->created_at);
        //使用模型的Create方法新增记录
        //需指定指定允许批量赋值的字段
//        $kcb = Kcb::create(
//          ['branch' => 5,'class' => '16秋药学','course' => '药剂学']
//        );
        //以属性查询，如没有则添加
//        $kcb = Kcb::firstOrCreate(
//          [class' => '16秋药学']
//        );
        //以属性查询，如没有则创建新的实例，如需保存要调用save()
        $kcb = Kcb::firstOrNew(
            ['class' => '13秋药学']
        );
        $bool = $kcb->save();
        dd($bool);
    }
}