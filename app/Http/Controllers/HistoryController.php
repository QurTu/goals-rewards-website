<?php

namespace App\Http\Controllers;

use App\Models\history;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\TaskAdd;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TakeRewardNew(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'points' => 'required',
        ]);
        $history = new History();
    
        $history->name = $request->name;
        $history->type= "reward";
        $history->due_date = Carbon::now()->toDateTimeString();
        $history->user_id = Auth::id();
       
         $history->done = 2;
         $history->points = $request->points;
          // give user points
          $id = Auth::id();
          $user =  User::where('id' , $id)->first();
          $user->points -= $request->points;
          $user->save();
         $history->balance = $user->points;
         $history->save();
         $notification=array(
            'messege'=>'New Reward Taken!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
        
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TakeRewardList(Request $request)
    {
        
       
        $history = new History();
        $request->reward = \json_decode($request->reward );
        $history->name = $request->reward->name;
        $history->type= "reward";
        $history->due_date = Carbon::now()->toDateTimeString();
        $history->user_id = Auth::id();
         $history->done = 2;
         $history->points = $request->reward->points;
          // give user points
          $id = Auth::id();
          $user =  User::where('id' , $id)->first();
          $user->points -= $request->reward->points;
          $user->save();
         $history->balance = $user->points;
         $history->save();
         $notification=array(
            'messege'=>'Reward Taken From The List!',
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
    public function history(Request $request)
    {   
        $id = Auth::id();
        $user =  User::where('id' , $id)->first();
        $start = $request->start;
        $end = $request->end;
       $history = History::whereBetween('due_date', [$start, $end]);
       $history =  $history->where('user_id' , $id)->get();
       

       return view('history.histroyList', \compact('history', 'user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\history  $history
     * @return \Illuminate\Http\Response
     */
    public function show(history $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\history  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(history $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\history  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, history $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\history  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(history $history)
    {
        //
    }
}
