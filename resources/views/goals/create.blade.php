<form action="{{route('goals.add')}}" method="post">
    <label  for=""> name</label>
    <input name='name' type="text"> <br>
    <label for=""> description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea> <br>
    
    <label  for="">Why its important</label>
    <textarea name="why" id="" cols="30" rows="10"></textarea> <br>
    <label  for="">due date</label>
    <input type="date" name="due" id=""> <br>
    @csrf
    <button type="submit"> submmit</button>
    
</form>