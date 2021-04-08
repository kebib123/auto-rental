@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
<!-- section start -->
<section class="pb-5 pt-5 bg-light  position-relative">
   <div class="container">
      <div class="row">
         <!--  -->
         <div class="col-lg-12">
           <div class="bg-white shadow-sm rounded p-4">
           <div class=" text-left mb-4">
               <h1 class="h4 mb-0 mt-0 font-weight-bold text-primary">{{$data->post_title}}</h1>
            </div>
            <hr>
              @if(Session::has('message'))
                      <div class="alert alert-block alert-danger alert-dismissible">
                        <i class=" fa fa-check cool-red "></i>
                        {{ nl2br(Session::get('message')) }}
                    </div> <br/>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-block alert-danger alert-dismissible">
                        <i class=" fa fa-check cool-red "></i>
                        {{ nl2br(Session::get('error')) }}
                    </div> <br/>
                @endif
               
            @if($rightsharecompany->count()>0)
            <p>{{$data->sub_title}}</p>
            <form class="contact-form   pb-4" name="contact_form" id="contact_form"  action="{{route('rightshare')}}" method="post">
               {{ csrf_field() }}
               <div class="form-group">
                  <label>Company <span class="text-secondary"> *</span></label>
                  
                  <select name="company" class="form-control">
                    @foreach($rightsharecompany as $row)
                    <option value="{{$row->id}}">{{$row->company}}</option>
                    @endforeach
                  </select> 
               </div>
               <div class="form-group">
                  <label>BOID(16 Digit Only)	</label>
                  <input type="text" class="form-control" placeholder="Enter BOID Number" maxlength="16" name="boid" id="boid">
               </div>
                <h5 class="text-center" style="margin:0;"><b> OR</b></h5>
                 <div class="form-group">
                  <label>Share Holder No.  </label>
                  <input type="text" class="form-control" placeholder="Enter Shareholder Number" maxlength="16" name="holder_number" id="holder_number">
               </div>
               <button class="btn btn-primary"  name="submit" type="submit" data-text="Check">Check</button>
            </form>
            @else
              <p>No Rightshare Bonus Available Right Now</p>
              @endif
           </div>
         </div>
         <!--  -->
      </div>
   </div> 
</section>
<!-- section end -->

@endsection