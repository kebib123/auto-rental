@extends('themes.default.common.master')
 @section('content')
<!-- section start -->
<section class="pb-5 pt-5 pattern">
   <div class="container">
      <div class=" text-left mb-4">
         <h1 class="h3 mb-0 mt-0 font-weight-bold text-primary"> {{galleryname(Request::segment(3))}}</h1>
      </div>
      
       @if( $data->count() > 0 ) 
                      
                       
      <div class="row">
          @foreach($data as $row )
    <a href="{{asset(env('PUBLIC_PATH').'uploads/galleries/'.$row->picture)}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
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
                            Gallery image not available.
                        </div>
    </div>

  @endif
         
      
   </div>
</section>
<!-- section end -->
 @endsection