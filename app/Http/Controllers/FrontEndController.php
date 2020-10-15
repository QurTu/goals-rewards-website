<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;
use Auth;

class FrontEndController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
     }

     public function home()
     {   
         $id = Auth::id();
         $goals = Goal::where('user_id', $id)->get();
         return view('home.home' , compact('goals', 'goals'));
        
     }

     public function history()
     {   
         $id = Auth::id();
         $goals = Goal::where('user_id', $id)->get();
         return view('history.history' , compact('goals', 'goals'));
        
     }
}
