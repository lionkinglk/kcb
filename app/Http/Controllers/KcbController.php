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
    public function ormdelete()
    {
        //使用模型删除记录，find(主键)，返回bool值
//        $kcb = Kcb::find(1);
//        $bool = $kcb->delete();
//        dd($bool);
        //使用主键删除，返回删除的记录数
//        $sum = Kcb::destroy(1);
//        $sum = Kcb::destroy(2,3);
//        $sum = Kcb::destroy([4,5]);
//        dd($sum);
        //删除指定条件的记录，返回删除的记录数
        $sum = Kcb::where('id','>',2)->delete();
        dd($sum);
    }
}
