<form action="{{route('tasks.add')}}" method="post">
    <label  for=""> name</label>
    <input name='name' type="text">
    <label for=""> description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <label  for="">points for completed task</label>
    <input type='number'step='0.1'name= 'points'  >
    

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

        <label >  how ofent?  </label>
        <select name="when" >
        <option value="daily" > daily </option>
        <option value="weekly" > weekly </option>
        <option value="monthly" > weekly </option>
        </select> 

        <select name = 'subject[]' multiple size = 6>   
                <option value = 'english'>ENGLISH</option> 
                <option value = 'maths'>MATHS</option> 
                <option value = 'computer'>COMPUTER</option> 
                <option value = 'physics'>PHYSICS</option> 
                <option value = 'chemistry'>CHEMISTRY</option> 
                <option value = 'hindi'>HINDI</option> 
            </select> 
    @csrf
    <div id="example">aaaa</div>
    <button type="submit"> submmit</button>
    
</form>