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
                        
                          <td class="tasktd"> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$task->name}}">
                                     Delete
                                       </button>  </td>
                        </tr>

                          <!-- Delete Model  -->
                          <div class="modal" id="{{$task->name}}" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Are you sure, you want to delete this task?</h5>
                                
                              </div>
                              <div class="modal-footer">
                              <form method="post" action="{{route('tasks.delete', [$task])}}">
                          @csrf
                           <button type="submit" class="btn btn-danger">Delete </button> 
                          </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>
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

  <div class="form-group">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Goal:</label>
  <select  name="goal_id" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option value=''  selected>NONE</option>
    @foreach ($goals as $goal)
            <option value='{{$goal->id}}'   >{{$goal->name}} </option>
        @endforeach
  </select>
  </div>

  <div class="form-group">
  <label class="my-1 mr-2" for="inlineForm">Type:</label>
  <select  name="type" class="custom-select my-1 mr-sm-2" id="inlineForm">
  <option value="non-periodic" > Many times (non-periodic) </option>
  <option value="periodic" > Periodic </option>
  </select>
  </div>

    
  <div class="form-group" id ='weekdays'> 
  

</div>
        
   
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


@section('scripts')
<script type="text/javascript">  
     $('select[name="type"]').on('change',function(){
          let type = $(this).val();
         if (type == 'periodic') {
          let weekdays =  `
          <label for=>Choose week days for this task:</label>
  <br>
  <div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox1' value='1'>
  <label class='form-check-label' for='inlineCheckbox1'>1</label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox2' value='2'>
  <label class='form-check-label' for='inlineCheckbox2'>2</label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox3' value='3' >
  <label class='form-check-label' for='inlineCheckbox3'>3 </label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox4' value='4' >
  <label class='form-check-label' for='inlineCheckbox4'>4 </label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox5' value='5' >
  <label class='form-check-label' for='inlineCheckbox5'>5 </label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox6' value='6' >
  <label class='form-check-label' for='inlineCheckbox6'>6 </label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox7' value='7' >
  <label class='form-check-label' for='inlineCheckbox7'>7 </label>
</div>

</div> `;
            $('#weekdays').append(weekdays);
         }
         else {
          $('#weekdays').empty();
         }
            });
 </script>
  
@endsection