<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;


class FrontEndController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
     }

     public function home()
     {   
        $id = Auth::id();
        $user =  User::where('id' , $id)->first();
         $goals = Goal::where('user_id', $id)->get();
         return view('home.home' , compact('goals', 'user'));
        
     }

     public function history()
     {   
        $id = Auth::id();
        $user =  User::where('id' , $id)->first();
         $goals = Goal::where('user_id', $id)->get();
         return view('history.history' , compact('goals', 'user'));
     }

     public function profile()
     {   
         $id = Auth::id();
         $user =  User::where('id' , $id)->first();
         $goals = Goal::where('user_id', $id)->get();
         return view('profile.profile' , compact('goals', 'user'));
        
     }
     
}
