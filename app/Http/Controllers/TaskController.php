<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Goal;
use Illuminate\Http\Request;
use Auth;

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
        $tasks = Task::where('user_id', $id)->get();
        $goals = Goal::where('user_id', $id)->get();
        return view('tasks.tasks' , compact('tasks', 'goals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        $goals = Goal::where('user_id', $id)->get();
        return view('tasks.create' , compact('goals', $goals)); 
    }

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
        $task->weekdays = json_encode($request->weekdays);
        $task->save();
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
        $goals = Goal::where('user_id', $id)->get();
        return view('tasks.edit' , \compact('task', $task ,'goals', $goals));
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
        $task->weekdays = json_encode($request->weekdays);
        $task->save();
        return  redirect()->back();
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
