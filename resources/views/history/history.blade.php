@extends('layouts.front-end')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href=" {{ asset('front-end/css2/mobtables2.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

@section('content')

                                 <!--    content  SECTION -->
                                 <div  style="background-color: white;" class="container collar"> 
            
            <div class="day">
                <form action=""   method="get">
                <div class="historypicker" >
                  <h2>HISTORY</h2> 
                <div class="historypickercommet">Choose range you want to search:</div>
                  
  <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
      <i class="fa fa-calendar"></i>&nbsp;
      <span></span> <i class="fa fa-caret-down"></i>
  </div>
              <button type="submit" class="btn btn-success">Get History</button>
                 </form>
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
                        <tr >
                          <td class="histroytd">Mark</td>
                          <td class="histroytd">MarkKoja</td>
                          <td class="histroytd">Otto</td>
                          <td class="histroytd">0.5</td>
                          <td class="histroytd">ddd</td>
                          <td class="histroytd"> ddd </td>
                        </tr>
                        <tr >
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>0.5</td>
                          <td><button type="button" class="btn btn-warning">Update</button></td>
                          <td>  <button type="button" class="btn btn-danger">Delete </button> </td>
                        </tr>
                        <tr >
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>0.5</td>
                          <td><button type="button" class="btn btn-warning">Update</button></td>
                          <td>  <button type="button" class="btn btn-danger">Delete </button> </td>
                        </tr>
                        <tr >
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>0.5</td>
                          <td><button type="button" class="btn btn-warning">Update</button></td>
                          <td>  <button type="button" class="btn btn-danger">Delete </button> </td>
                        </tr>
                        <tr >
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>0.5</td>
                          <td><button type="button" class="btn btn-warning">Update</button></td>
                          <td>  <button type="button" class="btn btn-danger">Delete </button> </td>
                        </tr>
                        <tr >
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>0.5</td>
                          <td><button type="button" class="btn btn-warning">Update</button></td>
                          <td>  <button type="button" class="btn btn-danger">Delete </button> </td>
                        </tr>
                        <tr >
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>0.5</td>
                          <td><button type="button" class="btn btn-warning">Update</button></td>
                          <td>  <button type="button" class="btn btn-danger">Delete </button> </td>
                        </tr>
                      </tbody>
                    </table>
  
                  
                
              </div>
  
     

@endsection




