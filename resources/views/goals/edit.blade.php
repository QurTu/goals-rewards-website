
@extends('layouts.front-end')

@section('content')

<div  style="background-color: white;" class="container collar"> 
<button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#abd">
                        Delete Goal
                                       </button> 

<form action="{{route('goals.update' , [$goal])}}" method="post">
<div class="form-group">
        <label for="exampleFormControlInput1">Name:</label>
    <input name='name' value= '{{$goal->name}}' type="text" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description:</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"> {{$goal->description}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea2">Why It Is Important?</label>
    <textarea class="form-control" name="why" id="exampleFormControlTextarea2" rows="3"> {{$goal->why}}</textarea>
  </div>
  
  <div class="form-group">
        <label for="exampleFormControlInput"> Due Date:</label>
    <input type="date" value= '{{$goal->due_date}}' name="due" class="form-control"   id="exampleFormControlInput2">
  </div>
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="modal-footer">
    <a href="{{route('goals.index')}}">   
          <button type="button" class="btn btn-secondary" >   Cancel</button>   </a>
          <button type="submit" class="btn btn-success">Update GOAL</button>
          </form>
        </div>
  
</div>



  <!-- Delete Model  -->
  <div class="modal" id="abd" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Are you sure, you want to delete goal and all task associated with it ?</h5>
                              </div>
                              <div class="modal-footer">
                                <form action="{{route('goals.delete', [$goal])}}" method="post">
                              
                          @csrf
                           <button type="submit" class="btn btn-danger">Remove </button> 
                          </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection