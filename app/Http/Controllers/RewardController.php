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
        $reward = new Reward();
        $reward->name = $request->name;
        $reward->description = $request->description;
        $reward->points = $request->points;
        $reward->user_id = Auth::id();
        $reward->save();
        return redirect()->back();

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
        $reward->name = $request->name;
        $reward->description = $request->description;
        $reward->points = $request->points;
        $reward->save();
        return \redirect()->route('rewards.index');
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
        return \redirect()->back();
    }
}
