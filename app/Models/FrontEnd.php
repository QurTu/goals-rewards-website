<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\TaskAdd;
use Illuminate\Support\Str;

class FrontEnd extends Model
{
    use HasFactory;

   public static function sevenDaysAray() {
    $sevendays = array();
    $savendaysWithTasks = array();
    for($x = 0; $x <= 6; $x++)  {
        $now = Carbon::now();
        $dayArray = $now->addDays($x)->toArray();
        if( $dayArray['dayOfWeek'] == 0 ) {
            $dayArray['dayOfWeek'] = 7;
        }
        $day['weekday'] = $dayArray['dayOfWeek'];
        if( $dayArray['month'] <10 ) {
            $dayArray['month'] = '0' . $dayArray['month'];
        }
        if( $dayArray['day'] <10 ) {
            $dayArray['day'] = '0' . $dayArray['day'];
        }
        
        $day['date'] = $dayArray['year'] . "-" . $dayArray['month'] . '-' . $dayArray['day'] ;
        array_push(  $sevendays, $day );
    }
    foreach($sevendays as $day) {
        $day['tasks'] = TaskAdd::where('due_date', $day['date'])->get();
        foreach($day['tasks'] as $task) {
            $task['uuid']  = (string) Str::uuid();
        }
        array_push(   $savendaysWithTasks, $day );
    }


    return  $savendaysWithTasks;
  }
 
}
