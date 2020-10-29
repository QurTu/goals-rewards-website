<?php

namespace App\Http\Controllers;

use App\Models\TaskAdd;
use Illuminate\Http\Request;
use Auth;
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
        return \redirect()->back();
    }

    public function add(Request $request)
    {
        $task = new TaskAdd();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->goal_id = null;
        $task->user_id = Auth::id();
        $task->points = $request->points;
        $task->done = 0;
        $task->due_date = $request->due_date;
        $task->save();
        return \redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        return \redirect()->back();
    }
}
