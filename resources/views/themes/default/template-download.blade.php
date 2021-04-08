@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
<!-- section start -->
<section class="pb-5 pt-5 ">
   <div class="container">
      <div class=" text-left mb-4">
        <h1 class="mb-0 mt-0 h6 font-weight-bold text-secondary">{{posttypeById($data->post_type)->post_type}}</h1>
         <h1 class="h3 mb-0 mt-0 font-weight-bold text-primary">{{$data->post_title}}</h1>
      </div>
      <div class="row">   
      
         <!--  -->
         <div class="col-lg-12">
            <div class="service-single">
                
    <div class="table-responsive">
      @if($documents->count()>0)
    <table  >
    <thead>
    <tr>
    <th>Title</th>
    <th>Action</th></tr>
    </thead>
          <tbody>
            @foreach($documents as $row)
          <tr>
          <td>{{$row->title}}</td>

          <td ><a href="{{asset('uploads/doc/'.$row->document)}}" target="_blank"class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Download</a></td>
          </tr>
          @endforeach

          </tbody>
          </table>
          @endif   

          </div>
            </div>
         </div>
         <!--  -->
      </div>        
      
   </div>
</section>
<!-- section end -->
@endsection