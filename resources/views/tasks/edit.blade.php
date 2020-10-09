<form action="{{route('tasks.update', [$task])}}" method="post">
    <label  for=""> name</label>
    <input name='name' value='{{$task->name}}' type="text">
    <label for=""> description</label>
    <textarea name="description" value='{{$task->description}}' id="" cols="30" rows="10"></textarea>
    <label  for="">points for completed task</label>
    <input type='number'step='0.1'name= 'points' value='{{$task->points}}' >
    

    <label >  tikslas  </label>
        <select name="goal_id" >
        <option value=""   >NONE </option>
        @foreach ($goals as $goal)
            <option value="{{$goal->id}}"   >{{$goal->name}} </option>
        @endforeach
        </select> 
        <label >  times doing  </label>
        <select name="type" >
        <option value="periodic" > Periodic </option>
        <option value="non-periodic" > Many times (non-periodic) </option>
        </select> 

        
        <br>
        <label >  1  </label>
 <input type="checkbox" value='1' name="weekdays[]" /> 
 <label >  2 </label>
 <input type="checkbox" value='2' name="weekdays[]" />
 <label >  3 </label>
 <input type="checkbox"value='3' name="weekdays[]" />
 <label >4  </label>
 <input type="checkbox" value='4' name="weekdays[]" />
 <label >  5  </label>
 <input type="checkbox" value='5' name="weekdays[]" />
 <label > 6  </label>
 <input type="checkbox" value='6' name="weekdays[]" />
 <label >  7  </label>
 <input type="checkbox" value='7' name="weekdays[]" />
      
    @csrf
    <div id="example">aaaa</div>
    <button type="submit"> submmit</button>
    
</form>