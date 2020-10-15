
@extends('layouts.front-end')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href=" {{ asset('front-end/css2/mobtables2.css')}}">

@section('content')
 
           
                               <!--    content  SECTION -->
                               <div  style="background-color: white;" class="container collar"> 
            
            <div class="day">
                <div class="tableflex">
                  <h2>LIST OF REWARDS:</h2> 
                  <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#rewardmodal">Create New Reward</button>
                </div> 
                
                        <!--  DESTOP TASKS TABLE-->
                  <table  id="dtBasicExample"  class="table table-striped table-bordered table-sm  " cellspacing="0" width="100%">
                      <thead>
                        <tr >
                          <th style="width: 15%">REWARD</th>
                          <th style="width: 45%">DESCRIPTION</th>
                          <th style="width: 10%">POINTS</th>
                          <th style="width: 10%">EDIT</th>
                          <th style="width:  10%">DELETE</th>
                       
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($rewards as $reward)
                        <tr >
                          <td>{{$reward->name}}</td>
                          <td>{{$reward->description}}</td>
                          <td>{{$reward->points}}</td>
                          <form method="get" action="{{route('rewards.edit', [$reward])}}">
                          <td class="tasktd"><button type="submit" class="btn btn-warning">Update</button></td>
                          </form>
                          <form method="post" action="{{route('rewards.delete', [$reward])}}">
                          @csrf
                          <td class="tasktd">  <button type="submit" class="btn btn-danger">Delete </button> </td>
                          </form>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
  
                  
                
              </div>
  
     
  
              
          </div>
          <!-- CREATE NEW REWARD-->
  <div class="modal fade" id="rewardmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class=" modal-header  ">
          <h5 class=" text-center" id="exampleModalLongTitle">CREATE NEW REWARD</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('rewards.add')}}" method="post">
    <label  for=""> name</label>
    <input name='name' type="text">
    <label for=""> description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <label  for="">reward cost points</label>
    <input type='number'step='0.1'name= 'points'  >
   
    @csrf
    
    

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Create New REWARD</button>
          </form>
        </div>
      </div>
    </div>
  </div>
                  <!--    content  SECTION  END-->


@endsection