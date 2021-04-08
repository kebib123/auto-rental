@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
<!-- section start -->
<section class="pb-5 pt-5 pattern">
   <div class="container">
      <div class=" text-left mb-4">
         <h1 class="mb-0 mt-0 h6 font-weight-bold text-secondary">{{posttypeById($data->post_type)->post_type}}</h1>
         <h1 class="h3 mb-0 mt-0 font-weight-bold text-primary"> {{$data->post_title}}</h1>
      </div>
      <div class="row">     
      
         <!--  -->
         <div class="col-lg-12">
            <div class="service-single">
                <div class="row">
         <!--  -->
         <div class="col-lg-5 order-lg-2">
            <figure>
              @if($data->page_thumbnail)
               <img src="{{asset('uploads/original/'.$data->page_thumbnail)}}" alt="" class="img-fluid"> 
                 @endif           
            </figure>
         </div>
         <!--  -->


         <div class="col-lg-7">
            
         {!!$data->post_excerpt!!}
            
         </div>
         </div>
                
          {!!$data->post_content!!}
   
            </div>
         </div>
         <!--  -->
      </div>

         
      
   </div>
</section>
<!-- section end -->
@endsection