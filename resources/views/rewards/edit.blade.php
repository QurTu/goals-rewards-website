@extends('layouts.front-end')


@section('content')

<div  style="background-color: white;" class="container collar"> 
<form action="{{route('rewards.update' , [$reward])}}" method="post">
<div class="form-group">
        <label for="exampleFormControlInput1">Name:</label>
    <input name='name' value='{{$reward->name}}' type="text" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description:</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"> {{$reward->description}}</textarea>
  </div>
  <div class="form-group">
        <label for="exampleFormControlInput2">Point Cost For Taking Reward:</label>
    <input  value='{{$reward->points}}' type='number'step='0.1'name= 'points' class="form-control" min='0' id="exampleFormControlInput2">
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
    <div class="modal-footer">
    <a href="{{route('rewards.index')}}">   
          <button type="button" class="btn btn-secondary" >   Cancel</button>   </a>
          <button type="submit" class="btn btn-success">Update REWARD</button>
          </form>
        </div>
  
</div>
@endsection

