<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Goal;
use DB;

class GoalController extends Controller
{
    public function show()
    {
        return  view('Goals/store');
    }

    public function goals()
    {
        return  view('Goals/goals');
    }

    public function goal()
    {
        return  view('Goals/goal');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:200',
            'title' => 'required',
            'type' => 'required',
        ]);

        $Goal = new Goal();

        $Goal->create([
            'content' => $request['content'],
            'title' => $request['title'],
            'start_time' => $request['start_time'],
            'end_time' => $request['end_time'],
            'type' => $request['type']=='日清' ? 'day_finish' : 'other',
        ]);

        return redirect()->route('home');
    }

    public function finish(Request $request){

        $id = (int)$request->input('goal_id');

        $res = DB::table('goals')->where('id','=',$id)->update(['status'=>1]);

        return redirect()->back();
    }
}