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
                        <tr>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td><button type="button" class="btn btn-warning">Not Complieted</button></td>
                          <td>  <button type="button" class="btn btn-danger">Remove Task</button> </td>
                        </tr>
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
  
                      <div class='serviss'>
                           <div class="line">
                           <div class="top"></div>
                           </div>
                            <div class='head'> Driving forces </div>
                            <div class='text'> Two things drive human actions: necessities — food, sleep, avoidance of pain; and rewards. Any object, event, or activity can be a reward if it motivates us, causes us to learn, or elicits pleasurable feelings.</div>
                            <table   class="table ">
                              <thead>
                                <tr>
                                  <th >STATUS</th>
                                  <th >ACTION</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><button type="button" class="btn btn-warning">Not Complieted</button></td>
                                  <td>  <button type="button" class="btn btn-danger">Remove Task</button> </td>
                                </tr>
                              </tbody>
                            </table>
                           </div> 
  
                        
                           
               
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                            <div class="form-group">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Choose task from the list:</label>
                    <select  name="reward" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      @foreach ($tasks as $task)
                              <option value='{{$task}}'   >{{$task->name}}  </option>
                          @endforeach
                    </select>
                          </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add From The List</button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
  
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="{{route('rewards.index')}}">   <button type="button" class="btn btn-success">Create New Reward</button>    </a>
          
          <button type="button" class="btn btn-primary">Take Reward</button>
        </div>
      </div>
    </div>
  </div>
                  <!--    content  SECTION  END-->

@endsection