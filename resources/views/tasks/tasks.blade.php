@extends('layouts.front-end')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href=" {{ asset('front-end/css2/mobtables2.css')}}">

@section('content')


 
      

           
    
                                     <!--    content  SECTION -->
                                     <div  style="background-color: white;" class="container collar"> 
            
            <div class="day">
                <div class="tableflex">
                  <h2>LIST OF TASKS:</h2> 
                  <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#rewardmodal">Create New Task</button>
                </div> 
                
                        <!--  DESTOP TASKS TABLE-->
                  <table  id="dtBasicExample"  class="table table-striped table-bordered table-sm  " cellspacing="0" width="100%">
                      <thead>
                        <tr >
                          <th style="width: 15%">TASK</th>
                          <th style="width: 45%">DESCRIPTION</th>
                          <th style="width: 10%">POINTS</th>
                          <th style="width: 10%">EDIT</th>
                          <th style="width:  10%">DELETE</th>
                          
                        </tr>
                  
                      
                      </thead>
                      <tbody>
                      @foreach ($tasks as $task)
                        <tr >
                          <td class="tasktd">{{$task->name}}</td>
                          <td class="tasktd">{{$task->description}}</td>
                          <td class="tasktd">{{$task->points}}</td>
                          <form method="get" action="{{route('tasks.edit', [$task])}}">
                          <td class="tasktd"><button type="submit" class="btn btn-warning">Update</button></td>
                          </form>
                          <form method="post" action="{{route('tasks.delete', [$task])}}">
                          @csrf
                          <td class="tasktd">  <button type="submit" class="btn btn-danger">Delete </button> </td>
                          </form>
                        </tr>
                        @endforeach
                      
                      </tbody>
                    </table>
  
                  
                
              </div>
  
     
  
              
          </div>
          <!-- CREATE NEW TASK-->
  <div class="modal fade" id="rewardmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class=" modal-header  ">
          <h5 class=" text-center" id="exampleModalLongTitle">CREATE NEW TASK</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('tasks.add')}}" method="post">
    <label  for=""> name</label>
    <input name='name' type="text"> <br>
    <label for=""> description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea> <br>
    <label  for="">points for completed task</label>
    <input type='number'step='0.1'name= 'points'  > <br>
    

    <label >  tikslas  </label>
        <select name="goal_id" > 
        <option value=""   >NONE </option> 
        @foreach ($goals as $goal)
            <option value="{{$goal->id}}"   >{{$goal->name}} </option>
        @endforeach
        </select> <br>
        <label >  times doing  </label>
        <select name="type" >
        <option value="periodic" > Periodic </option>
        <option value="non-periodic" > Many times (non-periodic) </option>
        </select> <br>

        
       
        <label >  1  </label>
 <input type="checkbox" value='1' name="weekdays[]" /> 
 <label >  2 </label>
 <input type="checkbox" value='2' name="weekdays[]" />
 <label >  3 </label>
 <input type="checkbox"value='3' name="weekdays[]" />
 <label >4  </label>
 <input type="checkbox" value='4' name="weekdays[]" />
 <label >  5  </label>
 <input type="checkbox" value='5' name="weekdays[]" />
 <label > 6  </label>
 <input type="checkbox" value='6' name="weekdays[]" />
 <label >  7  </label>
 <input type="checkbox" value='7' name="weekdays[]" />
      
    @csrf
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Create New TASK</button>
          </form>
        </div>
      </div>
    </div>
  </div>
                  <!--    content  SECTION  END-->
  
 

@endsection

  
