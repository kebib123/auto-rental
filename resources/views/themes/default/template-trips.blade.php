@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <main>

        <section class="breadcrumb_section text-center clearfix">

            <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
                <div class="container">
                    <div class="row   justify-content-center  ">

                        <div class="col-lg-10 col-xs-12">
                            <ul class="ul_li clearfix">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>{{$data->post_title}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="details_section sec_ptb_60  clearfix">
            <div class="container">
                <div class="row   justify-content-center  ">

                    <div class="col-lg-10 col-xs-12">
                        <!--  -->
                    {{--                    <figure>--}}
                    {{--                        <img src="assets/images/gallery/img_01.jpg" class="img-fluid">--}}

                    {{--                    </figure>--}}
                    {{--                    <div class="car_choose_content">--}}

                    {{--                        <p>We offer large number of Vehicles for rent in Nepal. You may choose budget to deluxe vehicles for your comfortable drive. Our drivers are very professional, always take care your baggage, they are very conscious on time and safety during your journey. You may ask to stop with our driver anywhere to take photos of country side or to have a rest or others. Our price covers fuel, parking fee and driver's salary and his accommodation and meals.</p>--}}
                    {{--                        <ul class="info_list ul_li_block mb_15 clearfix" data-aos="fade-up" data-aos-delay="100">--}}
                    {{--                            <li><strong>Passengers:</strong> 4</li>--}}
                    {{--                            <li><strong>Suitcase:</strong> 1 Large, 2 Small</li>--}}
                    {{--                            <li><strong>Doors:</strong> 2</li>--}}
                    {{--                            <li><strong>Engine:</strong> 3.9L V8 32V GDI DOHC Twin Turbo</li>--}}
                    {{--                            <li><strong>Fuel Type:</strong> Gasoline, Premium unleaded</li>--}}
                    {{--                            <li><strong>Options:</strong> Cruise Control, MP3 player, Automatic air conditioning, Wifi, GPS Navigation</li>--}}
                    {{--                        </ul>--}}
                    {{--                        <hr data-aos="fade-up" data-aos-delay="100">--}}
                    {{--                    </div>--}}

                    <!--  -->


                        <!--  -->
                        @foreach($data->associated_posts as $value)
                            <h2>{{$value->title}}</h2>
                            <figure>
                                <img src="{{asset('uploads/medium/'.$value->thumbnail)}}" class="img-fluid">

                            </figure>
                            <div class="car_choose_content">
                                <p>{!! $value->brief !!}</p>

                                {{--                        <p>We offer large number of Vehicles for rent in Nepal. You may choose budget to deluxe vehicles for your comfortable drive. Our drivers are very professional, always take care your baggage, they are very conscious on time and safety during your journey. You may ask to stop with our driver anywhere to take photos of country side or to have a rest or others. Our price covers fuel, parking fee and driver's salary and his accommodation and meals.</p>--}}
                                {{--                        <ul class="info_list ul_li_block mb_15 clearfix" data-aos="fade-up" data-aos-delay="100">--}}
                                {{--                            <li><strong>Passengers:</strong> 4</li>--}}
                                {{--                            <li><strong>Suitcase:</strong> 1 Large, 2 Small</li>--}}
                                {{--                            <li><strong>Doors:</strong> 2</li>--}}
                                {{--                            <li><strong>Engine:</strong> 3.9L V8 32V GDI DOHC Twin Turbo</li>--}}
                                {{--                            <li><strong>Fuel Type:</strong> Gasoline, Premium unleaded</li>--}}
                                {{--                            <li><strong>Options:</strong> Cruise Control, MP3 player, Automatic air conditioning, Wifi, GPS Navigation</li>--}}
                                {{--                        </ul>--}}
                                <hr data-aos="fade-up" data-aos-delay="100">
                            </div>
                    @endforeach
                    <!--  -->



                        <div class="section_title mb_60 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="title_text mb-0"><span>Booking</span></h2>
                        </div>

                        <form id="contact_form" action="{{route('random-trip')}}" method="post">
                            <input type="hidden" name="uri" value="{{$data->post_title}}">
                           @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="100"><input type="text" name="firstname" placeholder="First Name"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="200"><input type="text" name="lastname" placeholder="Last Name"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="300"><input type="email" name="email" placeholder="E-mail"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="400"><input type="tel" name="phone" placeholder="Phone Number"></div>
                                </div>
                            </div>
                            <div class="form_item" data-aos="fade-up" data-aos-delay="500"><textarea name="message" placeholder="Leave Your Message"></textarea></div>
                            <div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="600"><button type="submit" value="submit" class="custom_btn btn_width bg_default_red text-uppercase">Book Now <img src="{{asset('images/icons/icon_01.png')}}" alt="icon_not_found"></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
@stop
