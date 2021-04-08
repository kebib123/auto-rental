@extends('themes.default.common.master')
@section('content')
<!-- section start -->
<section class="pb-5 pt-5 bg-light  position-relative">
   <div class="container">
      <div class="row">
         <!--  -->
         <div class="col-lg-12">
           <div class="bg-white shadow-sm rounded p-4">
           <div class=" text-left mb-4">
               <h1 class="h4 mb-0 mt-0 font-weight-bold text-primary">Here we found your Right Share result</h1>
            </div>
            <hr>
           

           @if($data) 
              <div class="table-responsive">
            <table class="table table-bordered">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Holder Identification</th>
        <th>Total Kitta</th>
        <th>Eligible for Right </th>
        <th> Type </th>
      </tr>
    </thead>
    <tbody>
       
    @foreach($data as $row)
      <tr>
          <td>{{$row->full_name}}</td>
        <td>BOID: {{$row->boid}} <br/></td> 
        <td>{{$row->total}}</td>
        <td>{{$row->actual_issue}}</td>
        <td>{{$row->type}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  @endif
    @if($data2) 
              <div class="table-responsive">
            <table class="table table-bordered">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Holder Identification</th>
        <th>Total Kitta</th>
        <th>Eligible for Right </th>
        <th> Type </th>
      </tr>
    </thead>
    <tbody>
       
    @foreach($data2 as $row)
      <tr>
          <td>{{$row->full_name}}</td>
        <td>Shareholder No: {{$row->shholderno}} <br/></td> 
        <td>{{$row->total}}</td>
        <td>{{$row->actual_issue}}</td>
        <td>{{$row->type}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  @endif
           </div>

            <p class="text-center"> <button class="btn btn-primary" onclick="window.history.back();"> << Go Back </button></p>
         </div>

         <!--  -->
      </div>
   </div> 
</section>
<!-- section end -->
@endsection