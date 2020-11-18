<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Reward;
use App\Models\FrontEnd;
use App\Models\Task;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
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
         $rewards = Reward::where('user_id', $id)->get();
         $tasks = Task::where('user_id', $id)->get();
         $now = Carbon::now();
         $days = FrontEnd::sevenDaysAray();
         return view('home.home' , compact('goals', 'user' , 'days', 'rewards', 'tasks'));
        
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
