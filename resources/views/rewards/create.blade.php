<form action="{{route('rewards.add')}}" method="post">
    <label  for=""> name</label>
    <input name='name' type="text">
    <label for=""> description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <label  for="">reward cost points</label>
    <input type='number'step='0.1'name= 'points'  >
   
    @csrf
    <button type="submit"> submmit</button>
    
</form>