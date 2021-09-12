@extends('themes.default.common.master')
@section('content')

    <main class="mt-0">

        <section class="slider_section text-white text-center position-relative clearfix">
            <div class="main_slider clearfix" data-slick='{"dots": false}'>
                <div class="item has_overlay d-flex align-items-center"
                     data-bg-image="{{asset('uploads/banners/'.$banner->picture)}}">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider_content text-center">
                                    <h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">
                                        {!! $banner->content !!}
                                    </h3>
                                    <!--   <p data-animation="fadeInUp" data-delay=".5s">6.6L V8 32V DDI OHV Turbo Diesel, 5-Speed Automatic, Fuel Type: Diesel, Color: Black</p> -->
                                    <!-- <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s"><a class="custom_btn bg_default_red btn_width text-uppercase" href="booking.php">Book Now <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_nav clearfix">
                <button type="button" class="main_left_arrow"><i class="fal fa-chevron-left"></i></button>
                <button type="button" class="main_right_arrow"><i class="fal fa-chevron-right"></i></button>
            </div>
        </section>
        <section class="search_section clearfix">
            <div class="container ">
                <div class="advance_search_form2" data-bg-color="rgb(4 0 138)" data-aos="fade-up" data-aos-delay="100">
                    <form action="{{route('post-inquiry')}}" method="post">
                        @csrf
                        <div class="row align-items-end">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="form_item">
                                    <h4 class="input_title text-white">Pick Up Location</h4>
                                    <div class="position-relative"><input id="location_two" type="text" name="location"
                                                                          placeholder="City, State or Airport "> <label
                                            for="location_two" class="input_icon"><i class="fas fa-map-marker-alt"></i></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="form_item">
                                    <h4 class="input_title text-white">Pick A Date</h4>
                                    <input type="date" name="date">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="form_item">
                                    <h4 class="input_title text-white">Contact Number</h4>
                                    <input type="text" name="contact">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <button type="submit" class="custom_btn bg_default_red text-uppercase">Inquiry Now<img
                                        src="{{asset('images/icons/icon_01.png')}}" alt="icon_not_found"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="feature_section sec_ptb_100 clearfix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                        <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="title_text mb_15"><span>Best Vehicles Package</span></h2>
                        </div>
                    </div>
                </div>

                <div class="offers_car_carousel slideshow3_slider">
                @if ($vehicles->count())
                    @foreach ($vehicles as $row)
                        <!--  -->
                            @foreach (getposts($row->id) as $_row)

                                <div>
                                    <div class="element-item">
                                        <div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
                                            <h3 class="item_title mb-0"><a
                                                    href="{{ url(geturl($_row['uri'], $_row['page_key'])) }}"> {{$_row->post_title}}</a>
                                            </h3>
                                            <div class="item_image position-relative"><a class="image_wrap"
                                                                                         href="#!"><img
                                                        src="{{asset('uploads/medium/'.$_row->page_thumbnail)}}"
                                                        alt="image_not_found"> </a></div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        <!--  -->
                        @endforeach
                    @endif


                </div>

            </div>
        </section>
        <section class="service_section sec_ptb_100 pb-0 mb_100 text-white clearfix"
                 data-bg-gradient="linear-gradient(0deg, #0C0C0F, #292D45)">
            <div class="container">
                <div class="section_title mb_30 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="title_text text-white mb-0"><span>Why choose us?</span></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="100">
                            <div class="item_icon"><i class="far fa-tag"></i></div>
                            <h3 class="item_title text-white">Fixed rates</h3>
                            <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="200">
                            <div class="item_icon"><i class="fas fa-car"></i></div>
                            <h3 class="item_title text-white">Quality vehicles</h3>
                            <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="300">
                            <div class="item_icon"><i class="fal fa-headset"></i></div>
                            <h3 class="item_title text-white">Help Center & Support 24/7</h3>
                            <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                        </div>
                    </div>


                </div>
                <div class="feature_carousel_wrap position-relative clearfix">
                    <div class="slideshow1_slider" data-aos="fade-up" data-aos-delay="100">
                    @if ($package->count())
                        @foreach ($package as $row)
                            <!--  -->
                                @foreach (getposts($row->id) as $_row)
                                    <div class="item">
                                        <div class="feature_fullimage">
                                            <img src="{{asset('uploads/medium/'.$_row->page_thumbnail)}}"
                                                 alt="image_not_found">
                                            <div class="item_content text-white">
                                                <h3 class="item_title text-white">{{$_row->post_title}}</h3>
                                                <p>{!! $_row->post_excerpt !!} </p>
                                                <a class="text_btn text-uppercase"
                                                   href="{{ url(geturl($_row['uri'], $_row['page_key'])) }}"><span>Read more</span>
                                                    <img src="{{asset('images/icons/icon_02.png')}}"
                                                         alt="icon_not_found"></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                    <div class="carousel_nav">
                        <button type="button" class="s1_left_arrow"><i class="fal fa-angle-left"></i></button>
                        <button type="button" class="s1_right_arrow"><i class="fal fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial_section sec_ptb_150 clearfix">
            <div class="container">
                <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="title_text mb-0"><span>  Clients Review</span></h2>
                </div>
                <div class="testimonial_carousel_wrap position-relative">
                    <div class="testimonial_carousel" data-slick='{"dots": false}' data-aos="fade-up"
                         data-aos-delay="300">
                        @if ($reviews->count())
                            @foreach ($reviews as $row)
                                @foreach (getposts($row->id) as $_row)
                                    <div class="item">
                                        <div class="testimonial_item2 text-center">
                                            <p class="mb_30">{!! $_row->post_content !!}</p>
                                            <div class="admin_info">
                                                <div class="admin_image"><img
                                                        src="{{asset('uploads/medium/'.$_row->banner)}}"
                                                        alt="image_not_found"></div>
                                                <h4 class="admin_name">{{$_row->post_title}}</h4>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                    <div class="carousel_nav position_ycenter">
                        <button type="button" class="ts_left_arrow"><i class="fal fa-angle-left"></i></button>
                        <button type="button" class="ts_right_arrow"><i class="fal fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
@section('libraries')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.alert').hide(8000);
        });
    </script>
@endsection
