<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset('front-end/css2/main.css')}}">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
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
                <a class="nav-link" href="#">Home </a>
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
                  <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tasks</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Goals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rewards</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">History</a>
                  </li>
              </ul>
            </div>
          </nav>
         </div>
            <!--  mobile nav-bar END -->
       
        </header>

        <div class="accinfo">
            <div>LVL 1</div>
            <div> POINTS: 0</div>
            <div class="dropdown">
                <div >Petras</div>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
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
 
    
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript">
        $(function() {
        
            var start = moment().subtract(29, 'days');
            var end = moment();
        
            function cb(start, end) {
                $('#reportrange span').html(start.format('D MMMM , YYYY') + ' - ' + end.format('D MMMM , YYYY'));
            }
        
            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                   'This Month': [moment().startOf('month'), moment().endOf('month')],
                   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);
        
            cb(start, end);
        
        });
        </script>
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
                
</body>
</html>