@extends('layouts.front-end')


@section('content')

   <!--    content  SECTION -->
   <div  style="background-color: white;" class="container collar"> 
                    <div class="profile">
                        <div class="profile-info">
                            <ul>
                                <li>Name: {{$user->name}}</li>
                                <li>Email: {{$user->email}}</li>
                                <li>Level: {{$user->lvl}}</li>
                                <li>Points: </li>
                              </ul>
                              <a href=""> Change password</a>
                              <a href=""> Change password</a>
                              <a href=""> Change password</a>
                        </div>

                        @foreach($goals as $goal)
                        <div class="profilegoals">
                            <div class="profilegoal">  
                              <h3>{{$goal->name}}</h3>   
                            <div class="progres-bar">
                            <p> PROGRESS: </p>
                            <div class="progres"  style="width:  {{$goal->progress}};" >
                                 <div class="progress-bar-proc"> {{$goal->progress}}% </div>
                                 </div>
                            </div>
                         </div>
                         </div>
                        @endforeach

                    </div>

                    <div class="scenario">
                        
                        
                      <div class="vision">
                          <h1>Life Vision in 3-5 Years</h1>
                          <p>  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, est quasi deleniti recusandae veritatis voluptas hic libero labore aut ipsam vel. Fuga cumque, ab iure ea perspiciatis laboriosam ipsum libero voluptatum. Expedita culpa sint ducimus reprehenderit nostrum ullam sed quidem eveniet, assumenda ratione excepturi et at incidunt adipisci numquam consequatur. </p>
                      </div>
                      <div class="vision">
                        <h1>Worst Scenario in 3-5 Years</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque assumenda reprehenderit sunt mollitia magnam quae odio minima corporis, corrupti quisquam quod! Adipisci laboriosam minima voluptatibus aperiam exercitationem doloribus, corrupti laudantium repudiandae quis non quibusdam debitis voluptatum natus, voluptas sed quidem minus? Impedit sequi odit minima! Perspiciatis harum consectetur ipsum dolorum?</p>
                      </div>
                   
                    </div>

                        
                         
                 </div>
  
                <!--    content  SECTION  END-->
@endsection

@section('scripts')
<script>
        $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
    </script>

@endsection