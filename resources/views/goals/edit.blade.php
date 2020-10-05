<form action="{{route('goals.update' , [$goal])}}" method="post">
    <label  for=""> name</label>
    <input name='name' type="text" value= '{{$goal->name}}'>
    <label for=""> description</label>
    <textarea name="description" id="" cols="30" rows="10"> {{$goal->name}}</textarea>
    
    <label  for="">Why its important</label>
    <textarea name="why" id="" cols="30" rows="10"> {{$goal->name}}</textarea>
    <label  for="">due date</label>
    <input type="date" name="due"  value= '{{$goal->due_date}}'id="">
    @csrf
    <button type="submit"> submmit</button>
    
</form>