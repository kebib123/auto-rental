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
<section class="pb-5 pt-5 pattern">
   <div class="container">
     @include('themes.default.common.innerbanner')
      <div class=" text-left">
         <h1 class="mb-0 mt-0 h6 font-weight-bold text-secondary">{{$data->sub_title}}</h1>
         <h1 class="h3 mb-3 mt-0 font-weight-bold text-primary">{{$data->post_title}}</h1>
      </div>
      <div class="row d-flex align-items-center">
         <!--  -->
         <div class="col-lg-4 order-lg-2">
            <figure>
               @if($data->page_thumbnail)
               <img src="{{asset('uploads/original/'.$data->page_thumbnail)}}" alt="" class="img-fluid"> 
               @else
                 <img src="{{asset('themes-assets')}}/images/default.png" alt="" class="img-fluid"> 
                 @endif        
            </figure>
         </div>
         <!--  -->
         <!--  -->
         <div class="col-lg-8">
           {!!$data->post_content!!}
         </div>
         <!--  -->
      </div>
      @if($associated_posts->count()>0)
      <div class="row mt-5 grid-divider">
         <!--  -->
         @foreach($associated_posts->slice(0, 2) as $row)
         <div class="col-md-6">
            <h1 class="h5 mb-3 mt-0 font-weight-bold text-primary">{{$row->title}}</h1>
            {!!$row->brief!!}
         </div>
         @endforeach
         <!--  -->
        
         <!--  -->
          @foreach($associated_posts->slice(2, 1) as $row)
         <div class="col-md-12 mt-4">
            <h1 class="h5 mb-3 mt-0 font-weight-bold text-primary">{{$row->title}}</h1>
              {!!$row->brief!!}
         </div>
         @endforeach
         <!--  -->
          <!--  -->
         @foreach($associated_posts->slice(3, 6) as $row)
         <div class="col-md-6">
            <h1 class="h5 mb-3 mt-0 font-weight-bold text-primary">{{$row->title}}</h1>
            {!!$row->brief!!}
         </div>
         @endforeach
         <!--  -->
      </div>
      @endif
   </div>
</section>
<!-- section end -->
@endsection