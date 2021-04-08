@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
<!-- section start -->
<section class="pb-5 pt-5 bg-white">
   <div class="container">
      <div class="row">
         <div class="col-lg-9">
            <div class=" text-left mb-4">
               <h1 class="h4   mt-0 font-weight-bold text-primary">{{$data->post_title}}</h1>
               <figure>
              @if($data->page_thumbnail)
               <img src="{{asset('uploads/original/'.$data->page_thumbnail)}}" alt="" class="img-fluid"> 
                
                 @endif  
               </figure>
                {!!$data->post_content!!}
            </div>
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

     @include('themes.default.common.sidebar')
      </div>

   </div>
</section>
<!-- section end -->
@endsection