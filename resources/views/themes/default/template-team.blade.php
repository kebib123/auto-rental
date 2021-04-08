@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
 <!-- /header -->
      <div class="back-on-mobile p-1  bg-primary shadow-sm d-lg-none d-md-block  d-sm-block">
      <div class="container ">
      <a href="javascript:history.back()" class="text-white"><i class="fa fa-chevron-left" aria-hidden="true"></i> Go Back </a>
      </div>
      </div>
<!-- section start -->
<section class="pb-5 pt-5 ">
   <div class="container">
       @include('themes.default.common.innerbanner')
      <div class=" text-center mb-5">
         <h1 class="mb-0 mt-0 h6 font-weight-bold text-secondary">{{$data->sub_title}}</h1>
         <h1 class="h3 mb-3 mt-0 font-weight-bold text-primary">{{$data->post_title}}</h1>
      </div>
       @if($associated_posts->count()>0)
      <!-- member -->
      <div class="row text-center member-list">
         <!--  -->
          @foreach($associated_posts->slice(0, 1) as $row)
         <div class="col-lg-4 col-md-6  offset-lg-2 mb-5">
            <a href="#" data-toggle="modal" data-target=".team-details-{{$row->id}}">
               <div class="member pt-4 pb-4 shadow-lg  rounded">
                  <div class="member-image">
                    @if($row->thumbnail)
                     <img src="{{ asset(env('PUBLIC_PATH').'uploads/medium/' . $row->thumbnail) }}" alt="">
                     @else
                   <img src="{{asset('themes-assets')}}/images/default.png" alt="" >
                     @endif
                  </div>
                  <div class="member-content">
                    <h1 class="h6 font-weight-bold mt-0 mb-0">{{$row->title}}</h1>
                     <span class="mt-0 mb-0 text-secondary">{{$row->sub_title}}</span>
                  </div>
               </div>
            </a>
         </div>
          @endforeach
         <!--  -->
         <!--  -->
          @foreach($associated_posts->slice(1, 1) as $row)
         <div class="col-lg-4 col-md-6  mb-5">
            <a href="#" data-toggle="modal" data-target=".team-details-{{$row->id}}">
               <div class="member pt-4 pb-4 shadow-lg  rounded">
                  <div class="member-image">
                     @if($row->thumbnail)
                     <img src="{{ asset(env('PUBLIC_PATH').'uploads/medium/' . $row->thumbnail) }}" alt="">
                     @else
                   <img src="{{asset('themes-assets')}}/images/default.png" alt="" >
                     @endif
                  </div>
                  <div class="member-content">
                      <h1 class="h6 font-weight-bold mt-0 mb-0">{{$row->title}}</h1>
                     <span class="mt-0 mb-0 text-secondary">{{$row->sub_title}}</span>
                  </div>
               </div>
            </a>
         </div>
          @endforeach
         <!--  -->
         <!--  -->
          @foreach($associated_posts->slice(2, 3) as $row)
         <div class="col-lg-4 col-md-6  mb-5">
            <a href="#" data-toggle="modal" data-target=".team-details-{{$row->id}}">
               <div class="member pt-4 pb-4 shadow-lg  rounded">
                  <div class="member-image">
                     @if($row->thumbnail)
                     <img src="{{ asset(env('PUBLIC_PATH').'uploads/medium/' . $row->thumbnail) }}" alt="">
                     @else
                   <img src="{{asset('themes-assets')}}/images/default.png" alt="" >
                     @endif
                  </div>
                  <div class="member-content">
                     <h1 class="h6 font-weight-bold mt-0 mb-0">{{$row->title}}</h1>
                     <span class="mt-0 mb-0 text-secondary">{{$row->sub_title}}</span>
                  </div>
               </div>
            </a>
         </div>
          @endforeach
         <!--  -->
          <!--  -->
          @foreach($associated_posts->slice(5, 6) as $row)
         <div class="col-lg-4 col-md-6  mb-5">
            <a href="#" data-toggle="modal" data-target=".team-details-{{$row->id}}">
               <div class="member pt-4 pb-4 shadow-lg  rounded">
                  <div class="member-image">
                    @if($row->thumbnail)
                     <img src="{{ asset(env('PUBLIC_PATH').'uploads/medium/' . $row->thumbnail) }}" alt="">
                     @else
                   <img src="{{asset('themes-assets')}}/images/default.png" alt="" >
                     @endif
                  </div>
                  <div class="member-content">
                      <h1 class="h6 font-weight-bold mt-0 mb-0">{{$row->title}}</h1>
                     <span class="mt-0 mb-0 text-secondary">{{$row->sub_title}}</span>
                  </div>
               </div>
            </a>
         </div>
          @endforeach
         <!--  -->
        
      </div>
      @endif
      <!-- member -->
   </div>
</section>
<!-- section end -->
<!-- modal team details  -->
@foreach($associated_posts as $row)
<div class="modal fade team-details-{{$row->id}}"  tabindex="-1" role="dialog"   aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

         <div class="modal-body p-0 modal-team-body">
           
            <div class="member-image-details mt-3 mb-3  ">
               @if($row->thumbnail)
                     <img src="{{ asset(env('PUBLIC_PATH').'uploads/medium/' . $row->thumbnail) }}" alt="">
                     @else
                   <img src="{{asset('themes-assets')}}/images/default.png" alt="" >
                     @endif
            </div>
            <div class="modal-team-details">
               <div class="member-content-details pt-4 text-center mb-2">
                  <h1 class="h5 mt-0 mb-1 font-weight-bold">{{$row->title}}</h1>
                  <span class="mt-0 mb-0  font-weight-bold">{{$row->sub_title}}</span>
               </div>
               <div class="text-center">
                {!!$row->brief!!}
                  <hr>
                  <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-close"></i></button>
               </div>

               
            </div>

           
         </div>
          
      </div>
   </div>
</div>
@endforeach
<!-- end modal team details  -->
@endsection