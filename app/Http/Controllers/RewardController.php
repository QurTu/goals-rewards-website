<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class RewardController extends Controller
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
        $rewards = reward::where('user_id', $id)->get();
        return view('rewards.rewards' , compact('rewards', 'user'));
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
            'points' => 'required',
        ]);

        $reward = new Reward();
        $reward->name = $request->name;
        $reward->description = $request->description;
        $reward->points = $request->points;
        $reward->user_id = Auth::id();
        $reward->save();

        $notification=array(
            'messege'=>'New Reward Created!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function show(Reward $reward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function edit(Reward $reward)
    {
        $id = Auth::id();
         $user =  User::where('id' , $id)->first();
        return view('rewards.edit', \compact('reward', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reward $reward)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'points' => 'required',
        ]);
        
        $reward->name = $request->name;
        $reward->description = $request->description;
        $reward->points = $request->points;
        $reward->save();

        $notification=array(
            'messege'=>' Reward Successfully Edited!',
            'alert-type'=>'success'
             );
           return Redirect()->route('rewards.index')->with($notification);
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function delete(Reward $reward)
    {
        $reward->delete();
        $notification=array(
            'messege'=>'Reward Was Deleted!',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
        
        
    }
}
