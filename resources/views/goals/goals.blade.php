

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
      
  @foreach ($goals as $goal)
  <tr>
  
      <th scope="row">1</th>
      <td>{{$goal->name}}</td>
      <form action="{{route('goals.edit', [$goal])}}" method="get"> 
        <button type="submit"> Edit</button>
    </form>
    <form action="{{route('goals.delete', [$goal])}}" method="post"> 
      @csrf
        <button type="submit"> delete</button>
    </form>
    </tr>

  @endforeach
           
    
  
  </tbody>
</table>

