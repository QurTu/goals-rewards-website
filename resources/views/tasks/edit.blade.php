@extends('layouts.front-end')

@section('content')
<div  style="background-color: white;" class="container collar"> 
<form action="{{route('tasks.update', [$task])}}" method="post">
<div class="form-group">
              <label for="exampleFormControlInput1">Name:</label>
          <input name='name' value='{{$task->name}}' type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description:</label>
          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">  {{$task->description}}</textarea>
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput2">Points for completing task:</label>
    <input value='{{$task->points}}' type='number'step='0.1'name= 'points' class="form-control" min='0' id="exampleFormControlInput2">
  </div>
  <div class="form-group">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Goal:</label>
  <select  name="goal_id" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option value='' @if( $task->goal_id  == NULL) selected @endif >NONE</option>
    @foreach ($goals as $goal)
            <option value='{{$goal->id}}' @if($goal->id == $task->goal_id ) selected @endif > {{$goal->name}}  </option>
        @endforeach
  </select>
  </div>

  <div class="form-group">
  <label class="my-1 mr-2" for="inlineForm">Type:</label>
  <select  name="type" class="custom-select my-1 mr-sm-2" id="inlineForm">
  <option value="non-periodic" @if($task->type == "non-periodic" ) selected @endif > Many times (non-periodic) </option>
  <option value="periodic" @if($task->type == "periodic" ) selected @endif > Periodic </option>
  </select>
  </div>

    
  <div class="form-group" id ='weekdays'> 
  
</div>

@csrf
   
<div class="modal-footer">
    <a href="{{route('tasks.index')}}">   
          <button type="button" class="btn btn-secondary" >   Cancel</button>   </a>
          <button type="submit" class="btn btn-success">Update TASK</button>
          </form>
        </div>
    



        @endsection


        @section('scripts')

</div>
<script type="text/javascript">  
         let weekdays =  `
          <label for=>Choose week days for this task:</label>
  <br>
  <div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox1' value='1' 
@if(isset($task->weekdays))
@if( strpos($task->weekdays, '1') !== FALSE) checked @endif
@endif
    >
  <label class='form-check-label' for='inlineCheckbox1'>1</label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox2' value='2'
  @if(isset($task->weekdays))
  @if(strpos($task->weekdays, '2') !== FALSE) checked @endif @endif
  <label class='form-check-label' for='inlineCheckbox2'>2</label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox3' value='3' 
  @if(isset($task->weekdays))
  @if(strpos($task->weekdays, '3') !== FALSE) checked @endif
  @endif
  <label class='form-check-label' for='inlineCheckbox3'>3 </label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox4' value='4' 
  @if(isset($task->weekdays))
  @if( strpos($task->weekdays, '4') !== FALSE) checked @endif
  @endif
  <label class='form-check-label' for='inlineCheckbox4'>4 </label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox5' value='5' 
  @if(isset($task->weekdays))
  @if( strpos($task->weekdays, '5') !== FALSE) checked @endif
  @endif
  <label class='form-check-label' for='inlineCheckbox5'>5 </label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox6' value='6' 
  @if(isset($task->weekdays))
  @if( strpos($task->weekdays, '6') !== FALSE) checked @endif
  @endif
  <label class='form-check-label' for='inlineCheckbox6'>6 </label>
</div>
<div class='form-check form-check-inline'>
  <input name='weekdays[]' class='form-check-input' type='checkbox' id='inlineCheckbox7' value='7'
  @if(isset($task->weekdays))
  @if( strpos($task->weekdays, '7') !== FALSE) checked @endif
  @endif
  <label class='form-check-label' for='inlineCheckbox7'>7 </label>
</div>

</div> `;

     $(document).ready(function(){
          let type = $('select[name="type"]').val();
         if (type == 'periodic') {
            $('#weekdays').append(weekdays);
         }
         else {
          $('#weekdays').empty();
         }
            });


     $('select[name="type"]').on('change',function(){
          let type = $(this).val();
         if (type == 'periodic') {
 
            $('#weekdays').append(weekdays);
         }
         else {
          $('#weekdays').empty();
         }
            });
 </script>
  
@endsection