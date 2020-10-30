
@extends('layouts.front-end')

@section('content')

<div  style="background-color: white;" class="container collar"> 
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





@endsection