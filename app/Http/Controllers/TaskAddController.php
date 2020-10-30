<?php

namespace App\Http\Controllers;
use App\Models\Goal;
use App\Models\User;
use App\Models\Task;
use App\Models\TaskAdd;
use App\Models\FrontEnd;
use App\Models\History;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
class TaskAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addFromList(Request $request)
    {
        $task = new TaskAdd();
        $request->reward = json_decode($request->reward);
        $task->name = $request->reward->name;
        $task->description = $request->reward->description;
        $task->goal_id = $request->reward->goal_id;
        $task->user_id = Auth::id();
        $task->points = $request->reward->points;
        $task->done = 0;
        $task->due_date = $request->due_date;
        $task->save();
        $notification=array(
            'messege'=>'Task From The List Added',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
        
        
    }

    public function add(Request $request)
    {

        $request->validateWithBag('post', [
            'name' => ['required' ],
            'description' => ['required' ],
            'points' => ['required'],
        ]);

     

        $task = new TaskAdd();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->goal_id = null;
        $task->user_id = Auth::id();
        $task->points = $request->points;
        $task->done = 0;
        $task->due_date = $request->due_date;
        $task->save();
        $notification=array(
            'messege'=>'New Task Added!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function done(Request $request , TaskAdd $taskAdd)
    {
        //mark as complieted
        $taskAdd->done = 1 ;
        $taskAdd->save();
        // give user points
        $id = Auth::id();
        $user =  User::where('id' , $id)->first();
        $user->points += $taskAdd->points;
        $user->save();
        // goal progress
        if(isset($request->closer)) {
         $goal = Goal::where('id', $taskAdd->goal_id)->first();
        $goal->progress += $request->closer;
        $goal->save();
        }
        // save in history
         $history = new History();
         $history->name = $taskAdd->name;
         $history->type = "task";
         $history->due_date = Carbon::now()->toDateTimeString();
         $history->user_id = Auth::id();
         if(isset($request->closer)) {
            $history->goal_id = $goal->id;
          }
          $history->done = 1;
          $history->points = $taskAdd->points;
          $history->balance = $user->points;
          $history->save();
          $notification=array(
            'messege'=>'Task Complieted',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
        
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaskAdd  $taskAdd
     * @return \Illuminate\Http\Response
     */
    public function show(TaskAdd $taskAdd)
    {
    
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaskAdd  $taskAdd
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskAdd $taskAdd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaskAdd  $taskAdd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskAdd $taskAdd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskAdd  $taskAdd
     * @return \Illuminate\Http\Response
     */
    public function delete(TaskAdd $taskAdd)
    {
        $taskAdd->delete();
        $notification=array(
            'messege'=>'Task Removed!',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
        
        
    }
}
