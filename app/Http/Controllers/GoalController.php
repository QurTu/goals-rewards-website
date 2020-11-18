<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Task;
use App\Models\TaskAdd;
use App\Models\History;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class GoalController extends Controller
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
        $goals = Goal::where('user_id', $id)->get();
        return view('goals.goals' , compact('goals', 'user'));
       
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'why' => 'required',
            'due' => 'required',
        ]);
        $goal = new Goal();
        $goal->name = $request->name;
        $goal->description = $request->description;
        $goal->why = $request->why;
        $goal->user_id = Auth::id();
        $goal->due_date = $request->due;
        $goal->save();
        
        $notification=array(
            'messege'=>'New Goal Added!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {
        $id = Auth::id();
         $user =  User::where('id' , $id)->first();
        return view('goals.edit' , compact('goal', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'why' => 'required',
            'due' => 'required',
        ]);
        $goal->name = $request->name;
        $goal->description = $request->description;
        $goal->why = $request->why;
        $goal->due_date = $request->due;
        $goal->save();
        
        $notification=array(
            'messege'=>'Goal Successfully Edited',
            'alert-type'=>'success'
             );
           return Redirect()->route('goals.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function delete(Goal $goal)
    {
        $tasks = Task::where('goal_id', $goal->id)->delete();
        $tasksAdd = TaskAdd::where('goal_id', $goal->id)->delete();
        $history = History::where('goal_id', $goal->id)->get();
        foreach($history as $task) {
            $task->goal_id = null;
            $task->save();
        }
        $goal->delete();      
        $notification=array(
            'messege'=>'Goal And Goal Tasks was Deleted',
            'alert-type'=>'error'
             );
           return Redirect()->route('goals.index')->with($notification);
    }



    // visions methods
    public function visions() {
        $id = Auth::id();
         $user =  User::where('id' , $id)->first();
        return view('auth.visions', \compact('user'));
    }

    public function visionsAdd(Request $request){
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $user->vision = $request->vision;
        $user->worst = $request->worst;
        $user->save();
        return \redirect()->route('goals.index');

    }

    public function visionsEdit( ) {
        $id = Auth::id();
        $user =  User::where('id' , $id)->first();
       return view('auth.visionsEdit', \compact('user'));
    }
    }

