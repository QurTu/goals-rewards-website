<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Task;
use App\Models\TaskAdd;
use App\Models\FrontEnd;
use Auth;
class addtasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'addnew:tasks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tasks = Task::where('type' , 'periodic')->get();
        $day =  FrontEnd::daySeven();
    foreach($tasks as $task){
         if(isset($task->weekdays)) {
                    $task->weekdays = json_encode($task->weekdays);
                    if(strpos($task->weekdays, '' . $day['weekday']) !== FALSE) {
                        $addTask= new TaskAdd();
                        $addTask->name = $task->name;
                        $addTask->description = $task->description;
                        $addTask->goal_id = $task->goal_id;
                        $addTask->user_id = $task->user_id;
                        $addTask->points = $task->points;
                        $addTask->done = 0;
                        $addTask->due_date = $day['date'];
                        $addTask->save();
                    } 
            }
    } 
    }
}
