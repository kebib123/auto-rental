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
      
        @if( photo_category()->count() > 0 )
                       
      <div class="row">
          @foreach(photo_category() as $row )
    <a href="{{url('page/photogallery/'.$row->id.'')}}"  data-gallery="gallery" class="col-md-4">
      <img src="{{asset(env('PUBLIC_PATH').'uploads/galleries/'.$row->picture)}}" class="img-fluid rounded">
      <div class="m-2">
     {{ $row->category }}
      </div>
    </a>
    @if($loop->iteration %= 3)
    <div class="clearfix"></div>
    @endif
    @endforeach
      @else
    <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                            Gallery not available.
                        </div>
    </div>

  @endif
         
      
   </div>
</section>
<!-- section end -->
@endsection