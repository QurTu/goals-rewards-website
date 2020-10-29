@extends('layouts.front-end')
@section('content')

                                     <!--    content  SECTION -->
                                     <div style="background-color: white;" class="container collar"> 
                                     <button  type="button" class="btn btn-success float-right"  data-toggle="modal" data-target="#rewardmodal">Take Reward</button>
            @foreach ($days as $day)
            <div class="day">       
                <div class="tableflex">
                  <h2>{{$day['date']}}</h2>                   
                </div> 
                        <!--  DESTOP TASKS TABLE-->
                  <table   class="table desktop ">
                      <thead>
                        <tr>
                          <th style="width: 15%">TASK</th>
                          <th style="width: 45%">DESCRIPTION</th>
                          <th style="width: 20%">STATUS</th>
                          <th style="width:  20%">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($day['tasks'] as $task)                   
                        <tr>
                          <td>{{$task->name}}</td>
                          <td>{{$task->description}}</td>
                          @if ($task->done == 0)                          
                          <td class="tasktd"> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#b{{$task->uuid}}">
                          Not Complieted
                                       </button>  </td>
                                       @endif 
                                       @if ($task->done == 1)
                          <td><button type="button" class="btn btn-success"> Complieted</button></td>
                         @endif
                        <td class="tasktd"> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#a{{$task->uuid}}">
                        Remove Task
                                       </button>  </td>
                        </tr>
                          <!-- To Completed Model  -->
                          <div class="modal" id="b{{$task->uuid}}" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                             
                                <h5 class="modal-title">Marks Task As completed?</h5>
                                 <form method="post" action="{{route('TaskAdd.done' , [$task])}}">
                                @if(isset($task->goal_id))
                                </div>
                                <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput3">how many percent moved towards goal achievement by completing this task? :</label>
                                <input type='number'step='0.1'name= 'closer' class="form-control" placeholder='%' min='0' id="exampleFormControlInput3">
                                  </div>
                                  @endif
                              </div>
                              <div class="modal-footer">
                          @csrf
                           <button type="submit" class="btn btn-success">Completed </button> 
                          </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>

                          <!-- Delete Model  -->
                          <div class="modal" id="a{{$task->uuid}}" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Are you sure, you want to remove this task?</h5>
                              </div>
                              <div class="modal-footer">
                              <form method="post" action="{{route('TaskAdd.delete' , [$task])}}">
                          @csrf
                           <button type="submit" class="btn btn-danger">Remove </button> 
                          </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                        <tr>
                          <td>  </td>
                          <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#a{{$day['date']}}">
                            +Add Task
                          </button></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- MOBILE TASKS TABLE-->
                    <div class="services-content"> 
                    @foreach ($day['tasks'] as $task)
                      <div class='serviss'>
                           <div class="line">
                           <div class="top"></div>
                           </div>
                            <div class='head'> {{$task->name}} </div>
                            <div class='text'> {{$task->description}}</div>
                            <table   class="table ">
                              <thead>
                                <tr>
                                  <th >STATUS</th>
                                  <th >ACTION</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                @if ($task->done == 0)
                                          <td class="tasktd"> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#b{{$task->uuid}}">
                          Not Complieted
                                       </button>  </td>
                                  @else
                                    <td><button type="button" class="btn btn-success"> Complieted</button></td>
                                  @endif
                                  <td class="tasktd"> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#a{{$task->uuid}}">
                        Remove Task
                                       </button>  </td>
                        </tr>

                                   <!-- To Completed Model  -->
                <div class="modal" id="b{{$task->uuid}}" tabindex="-1" role="dialog">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                            
                                                <h5 class="modal-title">Marks Task As completed?</h5>
                                                <form method="post" action="{{route('TaskAdd.done' , [$task])}}">
                                                @if(isset($task->goal_id))
                                                </div>
                                                <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput3">how many percent moved towards goal achievement by completing this task? :</label>
                                                <input type='number'step='0.1'name= 'closer' class="form-control" placeholder='%' min='0' id="exampleFormControlInput3">
                                                  </div>
                                                  @endif
                                              </div>
                                              <div class="modal-footer">
                                          @csrf
                                          <button type="submit" class="btn btn-success">Completed </button> 
                                          </form>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                          <!-- Delete Model  -->
                          <div class="modal" id="a{{$task->uuid}}" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Are you sure, you want to remove this task?</h5>
                              </div>
                              <div class="modal-footer">
                              <form method="post" action="{{route('TaskAdd.delete' , [$task])}}">
                          @csrf
                           <button type="submit" class="btn btn-danger">Remove </button> 
                          </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>
                                </tr>
                              </tbody>
                            </table>
                           </div> 
                        @endforeach                                          
                           <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#a{{$day['date']}}">
                            +Add Task
                          </button></td>               
                       </div>                                   
              </div> 
                        <!-- ADD TASK MODEL-->
                          <div class="modal fade" id="a{{$day['date']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">                   
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form action="{{route('tasks.addFromList')}}" method="post">
                            <div class="form-group">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Choose task from the list:</label>
                    <select  name="reward" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      @foreach ($tasks as $task)
                              <option value='{{$task}}'   >{{$task->name}}  </option>
                          @endforeach
                    </select>
                          </div>
                          <input type="hidden" name="due_date" value="{{$day['date']}}">
                  </div>
                  <div class="modal-footer">
                  <a href="{{route('tasks.index')}}">  <button type="button" class="btn btn-primary">Create New Task For The List</button>  </a>
                    <button type="submit" class="btn btn-success">Add From The List</button>
                    @csrf
                   </form>
                  </div>
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create new task for this day:</h5>
                  </div>
                  <div class="modal-body">
                  <form action="{{route('tasksAdd.add')}}" method="post">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Name:</label>
                <input name='name' type="text" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description:</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                    <label for="exampleFormControlInput2">Points for completing task:</label>
                <input type='number'step='0.1'name= 'points' class="form-control" min='0' id="exampleFormControlInput2">
              </div>
              <input type="hidden" name="due_date" value="{{$day['date']}}">
                @csrf    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Create New Task</button>
                  </div>
                </div>
              </div>
            </div>
       </form>
              @endforeach  
          </div>
          
          
          <!-- take reward-->
  <div class="modal fade" id="rewardmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class=" modal-header  ">
          <h5 class=" text-center" id="exampleModalLongTitle">Take reward</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('takeReward.list')}}" method="post">  
        @csrf
                <div class="form-group">
          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Choose reward from the list:</label>
          <select  name="reward" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            @foreach ($rewards as $reward)
                    <option value='{{$reward}}'   >name: {{$reward->name}} , cost: {{$reward->points}} </option>
                @endforeach
          </select>
  </div>
        </div>
        <div class="modal-footer">
          <a href="{{route('rewards.index')}}">   <button type="button" class="btn btn-primary">Create New Reward to The List</button>    </a>
          <button type="submit" class="btn btn-success">Take Reward From the List</button>
            </form>
        </div>
        <div class=" modal-header  ">
          <h5 class=" text-center" id="exampleModalLongTitle">Create new reward for now:</h5>
        </div>
        <div class="modal-body">
        <form action="{{route('takeReward.new')}}" method="post">    
        <div class="form-group">
        <label for="exampleFormControlInput1">Name:</label>
    <input name='name' type="text" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
        <label for="exampleFormControlInput2">Point Cost For Taking Reward:</label>
    <input type='number'step='0.1'name= 'points' class="form-control" min='0' id="exampleFormControlInput2">
  </div>
    @csrf
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Take Reward</button>
          </form>
        </div>

      </div>
    </div>
  </div>
                  <!--    content  SECTION  END-->

@endsection