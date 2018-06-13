<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Goal;

class HomeController extends Controller
{
    public function home(Request $request)
    {
       $start_time = strtotime(midNightTime());//当天

       $Goal = new Goal();
       if($start_time == time()){//add goals at 00:00
           $Goal->dayFinish();
       }

       $next_day_time = date('Y-m-d',strtotime('+1 day'));

        $datas = $Goal::select('*')
           ->where('start_time','<',$next_day_time)
           ->where('status',0)
           ->get();

       return  view('Static/home',compact('datas', $datas));
    }
}