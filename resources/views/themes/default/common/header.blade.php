<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Super Auto Rental</title>
    <link rel="shortcut icon" href="{{asset('images/logo/favourite_icon.png')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<div id="thetop"></div>
<div class="backtotop"><a href="#" class="scroll"><i class="far fa-arrow-up"></i></a></div>
<!--    <div class="preloader">
      <div class="animation_preloader">
         <div class="spinner"></div>
         <p class="text-center">Loading</p>
      </div>
      <div class="loader">
         <div class="row vh-100">
            <div class="col-3 loader_section section-left">
               <div class="bg"></div>
            </div>
            <div class="col-3 loader_section section-left">
               <div class="bg"></div>
            </div>
            <div class="col-3 loader_section section-right">
               <div class="bg"></div>
            </div>
            <div class="col-3 loader_section section-right">
               <div class="bg"></div>
            </div>
         </div>
      </div>
   </div> -->
<header class="header_section secondary_header  sticky  text-white clearfix">
    <div class="header_top clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <ul class="header_contact_info ul_li clearfix">
                        <li><i class="fal fa-envelope"></i> info@email.com</li>
                        <li><i class="fal fa-phone"></i> +1-202-555-0156</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <ul class="primary_social_links ul_li_right clearfix">
                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="brand_logo">
                        <a href="{{url('/')}}">

                            <img src="{{asset('images/logo/logo.png')}}" alt=" ">
                            <img src="{{asset('images/logo/logo-sm.png')}}" alt=" ">
                        </a></div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-6 col-6 order-last">
                    <ul class="header_action_btns ul_li_right clearfix">

                        <li>
                            <button type="button" class="mobile_sidebar_btn"><i class="fal fa-align-right"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-12">
                    <nav class="main_menu clearfix">
                        <ul class="ul_li_center clearfix">
                            <li>
                                <a href="{{ url('/') }}"> Home</a>
                            </li>
                            @if ($navigations->count())
                                @foreach ($navigations as $row)
                                        @if (getposts($row->id)->count() > 0)
                                        <li class="has_child">
                                            <a href="">{{$row->post_type}}</a>
                                            <ul class="submenu">
                                                @foreach (getposts($row->id) as $_row)
                                                    <li>
                                                        <a href="{{ url(geturl($_row['uri'], $_row['page_key'])) }}"> {{ $_row->post_title }}</a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </li>
                                    @else

                                        <li>
                                            <a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a>
                                        </li>
                                    @endif


                                @endforeach
                            @endif

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
<div class="sidebar-menu-wrapper">
    <div class="mobile_sidebar_menu">
        <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

        <div class="menu_list mb_60 clearfix">

            <ul class="ul_li_block clearfix">
                <li>
                    <a href="{{ url('/') }}"> Home</a>
                </li>
                @if ($navigations->count())
                    @foreach ($navigations as $row)
                        @if (getposts($row->id)->count() > 0)
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">{{$row->post_type}}</a>
                                <ul class="dropdown-menu">
                                    @foreach (getposts($row->id) as $_row)
                                        <li>
                                            <a href="{{ url(geturl($_row['uri'], $_row['page_key'])) }}"> {{ $_row->post_title }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                        @else

                            <li>
                                <a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a>
                            </li>
                        @endif


                    @endforeach
                @endif
            </ul>
        </div>
        <div class="booking_car_form">
            <h3 class="title_text text-white mb-2">Hire Us Now</h3>
            <form action="{{route('post-inquiry')}}" method="post">
                @csrf
                <div class="form_item">
                    <h4 class="input_title text-white">Pick Up Location</h4>
                    <div class="position-relative">
                        <input id="location_one" type="text" name="location"
                               placeholder="City, State or Airport "> <label
                            for="location_one" class="input_icon"><i class="fas fa-map-marker-alt"></i></label></div>
                </div>
                <div class="form_item">
                    <h4 class="input_title text-white">Pick A Date</h4>
                    <input type="date" name="date">
                </div>

                <div class="form_item">
                    <h4 class="input_title text-white">Contact number</h4>
                    <input type="number" name="contact">
                </div>


                <button type="submit" class="custom_btn bg_default_red btn_width text-uppercase">Inquiry Now <img
                        src="{{asset('images/icons/icon_01.png')}}" alt="icon_not_found"></button>
            </form>
        </div>
    </div>
    <div class="overlay"></div>
</div>
