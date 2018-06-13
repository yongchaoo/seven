<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{

    protected $guarded = ['id','created_at','updated_at'];

    public static $dayFinishList = array(
        array(
            'title'=>'sport',
            'content' =>'do one hour sport',
            'type' =>'day_finish',
            'img' =>'sport',
        ),
        array(
            'title'=>'meditation',
            'content' =>'15 min meditation',
            'type' =>'day_finish',
            'img' =>'meditation'
        ),
        array(
            'title'=>'summarise',
            'content' =>'summarise what I have done',
            'type' =>'day_finish',
            'img' =>'summarise',
        ),
    );

    public function dayFinish(){
        foreach(self::$dayFinishList as $goal){
            $Goal = new Goal();

            $Goal->title = $goal['title'];
            $Goal->content = $goal['content'];
            $Goal->type = $goal['type'];
            $Goal->start_time = now();

            $Goal->save();
        }
    }

    public function lastGoal(){
        return Goal::first();
    }
}