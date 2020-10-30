@extends('layouts.front-end')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href=" {{ asset('front-end/css2/mobtables2.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

@section('content')

                                 <!--    content  SECTION -->
                                 
            
                                 <div  style="background-color: white;" class="container collar"> 
            <div class="day">
                <form action="{{route('history.list')}}"   method="get">
                <div class="historypicker" >
                  <h2>HISTORY</h2> 
                <div class="historypickercommet">Choose range you want to search:</div>
  <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
 
      <i class="fa fa-calendar"></i>&nbsp;
      <span name='dates'></span> <i class="fa fa-caret-down"></i>
      <input type="hidden" name="start">
      <input type="hidden" name="end">
  </div>
              <button type="submit" class="btn btn-success">Get History</button>
                 </form>
                </div> 
              </div>
                




   <!--  DESTOP TASKS TABLE-->
   <table  id="dtBasicExample"  class="table table-striped table-bordered table-sm  " cellspacing="0" width="100%">
                      <thead>
                        <tr >
                          <th >DATE</th>
                          <th >Name</th>
                          <th >TYPE</th>
                          <th >STATUS</th>
                          <th >POINTS</th>
                          <th>BALANCE</th> 
                        </tr>
                  
                      
                      </thead>
                      <tbody>
                      @foreach($history as $day)
                        <tr >
                          <td class="histroytd">{{$day->due_date}}</td>
                          <td class="histroytd">{{$day->name}}</td>
                          <td class="histroytd">{{$day->type}}</td>
                          <td class="histroytd">
                          @if( $day->done == 0) Not Complieted @endif
                          @if($day->done == 1) Complieted @endif
                          @if($day->done == 2) Taken @endif
                          </td>
                          <td class="histroytd">{{$day->points}}</td>
                          <td class="histroytd"> {{$day->balance}} </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>



                  
                
                    </div>
                    </div>
  
     

  @endsection

  
  @section('scripts')
<script type="text/javascript">
        $(function() {
        
            var start = moment().subtract(29, 'days');
            var end = moment();
        
            function cb(start, end) {
                $('#reportrange span').html(start.format('D MMMM , YYYY ') + ' - ' + end.format('D MMMM , YYYY'));
                $("input[name='start']").val(start.format('YYYY-MM-DD')) ;
                $("input[name='end']").val(end.format('YYYY-MM-DD')) ;
               
      
            }
        
            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                  'Today': [moment(), moment()],
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
@endsection