<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Goal;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\TaskAdd;
use App\Models\FrontEnd;
class TaskController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $user =  User::where('id' , $id)->first();
        $tasks = Task::where('user_id', $id)->get();
        $goals = Goal::where('user_id', $id)->get();
        return view('tasks.tasks' , compact('tasks', 'goals' , 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->points = $request->points;
        $task->type = $request->type;
        $task->user_id = Auth::id();
        $task->goal_id = $request->goal_id;
        if(isset($request->weekdays)) {
            $task->weekdays = json_encode($request->weekdays);
            }
        $task->save();
        // add task for next 7 days
        if(isset($request->weekdays)) {
        $days = FrontEnd::sevenDaysAray();
        foreach($days as $day) {
                $task->weekdays = json_encode($request->weekdays);
                if(strpos($task->weekdays, '' . $day['weekday']) !== FALSE) {
                    $addTask= new TaskAdd();
                    $addTask->name = $request->name;
                    $addTask->description = $request->description;
                    $addTask->goal_id = $request->goal_id;
                    $addTask->user_id = Auth::id();
                    $addTask->points = $request->points;
                    $addTask->done = 0;
                    $addTask->due_date = $day['date'];
                    $addTask->save();
                }
                }
        }
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $id = Auth::id();
         $user =  User::where('id' , $id)->first();
        $goals = Goal::where('user_id', $id)->get();
        return view('tasks.edit' , \compact('task','goals', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        
        $task->name = $request->name;
        $task->description = $request->description;
        $task->points = $request->points;
        $task->type = $request->type;
        $task->goal_id = $request->goal_id;
        if($request->type = 'periodic') {
            if(isset($request->weekdays)) {
                $task->weekdays = json_encode($request->weekdays);
                }
            else {
                $task->weekdays = NULL;
            }

        }
        $task->save();
        return  redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function delete(Task $task)
    {
        $task->delete();
        return \redirect()->back();
    }
   
}
