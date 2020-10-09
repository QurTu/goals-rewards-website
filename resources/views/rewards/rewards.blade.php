

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
      
  @foreach ($rewards as $reward)
  <tr>
  
      <th scope="row">1</th>
      <td>{{$reward->name}}</td>
      <form action="{{route('rewards.edit', [$reward])}}" method="get"> 
        <button type="submit"> Edit</button>
    </form>
    <form action="{{route('rewards.delete', [$reward])}}" method="post"> 
      @csrf
        <button type="submit"> delete</button>
    </form>
    </tr>

  @endforeach
           
    
  
  </tbody>
</table>

