@extends('layouts.front-end')

@section('content')

<div style="background-color: white;" class="container collar"> 

<form action="{{route('visions.add' )}}" method="post">

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Life Vision in 3-5 Years:</label>
    <textarea class="form-control" name="vision" id="exampleFormControlTextarea1" rows="3"> </textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea2">Worst Scenario in 3-5 Years:</label>
    <textarea class="form-control" name="worst" id="exampleFormControlTextarea2" rows="3"> </textarea>
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
          <button type="button" class="btn btn-secondary" >   Skip</button>   </a>

          <button type="submit" class="btn btn-success">Add life vision</button>
          </form>
        </div>
  
</div>

</div>


@endsection