@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <!-- section start -->
    <main>

        <section class="breadcrumb_section text-center clearfix">

            <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
                <div class="container">
                    <div class="row   justify-content-center  ">

                        <div class="col-lg-12 col-xs-12">
                            <ul class="ul_li clearfix">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="details_section sec_ptb_60  clearfix">
            <div class="container">
                <div class="row   justify-content-center  ">

                    <div class="col-lg-12 col-xs-12">


                        <!--  -->


                        <div class="car_choose_content">

                      <p>{{$data->content}}</p>

                        </div>
                        <!--  -->


                    </div>
                </div>
            </div>
        </div>

        <section class="service_section sec_ptb_80   clearfix"  data-bg-color="#ddd">
            <div class="container">
                <div class="section_title mb_30 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="title_text  mb-0"><span>Why choose us?</span></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="service_primary text-center " data-aos="fade-up" data-aos-delay="100">
                            <div class="item_icon"><i class="far fa-tag"></i></div>
                            <h3 class="item_title ">Fixed rates</h3>
                            <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="service_primary text-center " data-aos="fade-up" data-aos-delay="200">
                            <div class="item_icon"><i class="fas fa-car"></i></div>
                            <h3 class="item_title ">Quality vehicles</h3>
                            <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="service_primary text-center " data-aos="fade-up" data-aos-delay="300">
                            <div class="item_icon"><i class="fal fa-headset"></i></div>
                            <h3 class="item_title ">Help Center & Support 24/7</h3>
                            <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                        </div>
                    </div>


                </div>

            </div>
        </section>

    </main>

@endsection
