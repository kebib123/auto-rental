@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
<!-- section start -->
<section class="pb-5 pt-5 bg-white">
   <div class="container">
   <div class=" text-left mb-4">
         <h1 class="mb-0 mt-0 h6 font-weight-bold text-secondary">{{posttypeById($data->post_type)->post_type}}</h1>
         <h1 class="h3 mb-0 mt-0 font-weight-bold text-primary"> {{$data->post_title}}</h1>
      </div>

      
      <div class="row">
         <div class="col-lg-9">
            <ul class="news-event-notice-list text-left">
               @if($data_child->count()>0)
               @foreach($data_child as $row)
               <li class="d-flex align-items-center">
                  <!--  -->
                  <div >
                     <div class="date">
                       {{$row->updated_at->format('d')}}
                        <span>   {{$row->updated_at->format('M')}}</span>
                     </div>
                  </div>
                  <!--  -->
                  <!--  -->
                  <div>
                     <div class="text">
                        <h6 class="m-0 p-0 font-weight-bold">
                            @if($row->external_link)
                            <a href="{{$row->external_link}}">
                                @else
                                <a href="{{url(geturl($row['uri'],$row['page_key']))}}">
                                    @endif
                                    {{$row->post_title}}</a></h6>
                     </div>
                  </div>
                  <!--  -->
               </li>
              @endforeach
              @endif
            </ul>
            <!-- pagination -->
             <nav class="mt-4">
            {{$data_child->links()}}
         </nav>
            <!-- end pagination -->
         </div>
     @include('themes.default.common.sidebar')
      </div>
   </div>
</section>
<!-- section end -->
@endsection