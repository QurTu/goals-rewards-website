

 <br>
 <br>
 <br>
 <br>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
      
  @foreach ($tasks as $task)
  <tr>
  
      <th scope="row">1</th>
      <td>{{$task->name}}</td>
      <form action="{{route('tasks.edit', [$task])}}" method="get"> 
        <button type="submit"> Edit</button>
    </form>
    <form action="{{route('tasks.delete', [$task])}}" method="post"> 
      @csrf
        <button type="submit"> delete</button>
    </form>
    </tr>
 
  @endforeach
           
    
  
  </tbody>
</table>

