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
        return view('tasks.tasks' , compact('tasks', 'tasks'));
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
        return view('tasks.create' , compact('goals', 'goals')); 
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
        $task->type = $request->type;
        $task->user_id = Auth::id();
        $task->points = $request->points;
        $task->goal_id = $request->goal_id;
        if(isset( $request->due)){
            $task->due_date = $request->due;   
        }
       
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
    public function koja(Request $request) {
        return $request;
    }
}
