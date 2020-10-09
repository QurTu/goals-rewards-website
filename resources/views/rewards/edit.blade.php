<form action="{{route('rewards.update' , [$reward])}}" method="post">
    <label  for=""> name</label>
    <input name='name' value='{{$reward->name}}' type="text">
    <label for=""> description</label>
    <textarea name="description"   id="" cols="30" rows="10"> {{$reward->description}}</textarea>
    <label  for="">reward cost points</label>
    <input type='number'step='0.1'name= 'points' value='{{$reward->points}}' >
    @csrf
    <button type="submit" > submmit</button>
    
</form>


