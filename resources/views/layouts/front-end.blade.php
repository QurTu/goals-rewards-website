<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset('front-end/css2/main.css')}}">

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>
<body style="background-color: white;">
                           <!--  Header-->
                          
    <header>
        <div class="header-logo"> 
            <img src=" {{ asset('front-end/images2/goals.png')}}" alt="">
        </div>
                               <!-- NAVIGATION BAR -->
                                 <!--  Destop nav-bar -->
          <div class="desktopp"> 
                <a class="nav-link" href="{{route('home.index')}}">Home </a>
                <a class="nav-link" href="{{route('tasks.index')}}">Tasks</a>
                <a class="nav-link" href="{{route('goals.index')}}">Goals</a>
                  <a class="nav-link" href="{{route('rewards.index')}}">Rewards</a>
                  <a class="nav-link" href="{{route('history.index')}}">History</a>
          </div>
                                   <!--  mobile nav-bar -->
         <div class="mobilee"> <nav class="navbar navbar-light navbar-1 white">
            <a class="navbar-brand" href="#">MENU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
              aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent15">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('home.index')}}">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('tasks.index')}}">Tasks</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('goals.index')}}">Goals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rewards.index')}}">Rewards</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('history.index')}}">History</a>
                  </li>
              </ul>
            </div>
          </nav>
         </div>
            <!--  mobile nav-bar END -->
       
        </header>

        <div class="accinfo">
            <div>LVL: {{$user->lwl}}</div>
            <div> POINTS: {{$user->points}}</div>
            <div class="dropdown">
                <div >{{$user->name}}</div>
                <div class="dropdown-content">
                  <a href="{{route('profile.index')}}">Profile</a>
                  <a href="#">Link 2</a>
                  <form id="my_form" action="{{route('logout')}}" method="post">
                      @csrf
                      <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">Log Out</a> 
                      </form>
                </div>
              </div>
        </div>


         
      
  
                                     <!--    content  SECTION -->

        @yield('content')

                <!--    content  SECTION  END-->
    <!--     Footer   -->
    <footer> d </footer>
  
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http:////cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 
    @yield('scripts')  
    
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#dtBasicExample').DataTable();
            } );
                </script>
                <script type="text/javascript">
$(document).ready( function () {
    $('#dtBasicExample').DataTable();
} );

    </script>
    
          <script  >
        @if(Session::has('messege'))
        toastr.options.toastClass = 'toastr';
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
                   console.log ('works1');
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>       
</body>
</html>