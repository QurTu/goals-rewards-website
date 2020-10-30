
@extends('layouts.front-end')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href=" {{ asset('front-end/css2/mobtables2.css')}}">

@section('content')
 
                              <!--    content  SECTION -->
     <div  style="background-color: white;" class="container collar"> 

<div class="day">
    <div class="tableflex">
      <h2> YOUR GOALS</h2> 
      <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#rewardmodal">Create New Goal</button>
    </div> 
<div class="goals"> 
@foreach ($goals as $goal)
    <div class='serviss'>
          <div class='head'> {{$goal->name}}</div>
          <div class='textgoal'> {{$goal->description}} </div>
          <div class="progres-bar"> 
            <p> PROGRESS: </p>
            <div class="progres"  style="width: {{$goal->progress}}%;" >
                 <div class="progress-bar-proc"> {{$goal->progress}}% </div>
                 </div>
                 <p class="goalwhy"> Why you need to reach this goal? </p>
          <div class='textgoal'> {{$goal->why}}</div>
          <form method="get" action="{{route('goals.edit', [$goal])}}">
         <button type="submit" class="btn btn-warning editbutton">Edit Your Goal</button>
         </form>
                <div class='due-date'>Due Date: {{$goal->due_date}}</div>
         </div> 
        </div> 
        @endforeach

    </div>
    </div> 
    
</div>
<!-- CREATE NEW GOAL-->
<div class="modal fade" id="rewardmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class=" modal-header  ">
<h5 class=" text-center" id="exampleModalLongTitle">CREATE NEW GOAL</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="{{route('goals.add')}}" method="post">
<div class="form-group">
        <label for="exampleFormControlInput1">Name:</label>
    <input name='name' type="text" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description:</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea2">Why It Is Important?</label>
    <textarea class="form-control" name="why" id="exampleFormControlTextarea2" rows="3"></textarea>
  </div>
  
  <div class="form-group">
        <label for="exampleFormControlInput"> Due Date:</label>
    <input type="date" name="due" class="form-control"   id="exampleFormControlInput2">
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @csrf
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Create New Goal</button>
</form>
</div>
</div>
</div>
</div>
        <!--    content  SECTION  END-->
     
  </tbody>
</table>

@endsection
@section('scripts')
@if (count($errors) > 0)
    <script type="text/javascript">
        $( document ).ready(function() {
             $('#rewardmodal').modal('show');
        });
    </script>
  @endif
@endsection