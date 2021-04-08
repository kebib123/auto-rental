<footer class="footer_section clearfix">
    <div class="footer_widget_area sec_ptb_60 clearfix" data-bg-color="#F2F2F2">
        <div class="container">
            <div class="row justify-content-lg-between text-center">

                <div class="col-lg-3 col-md-4 col-sm-12 col-sm-12">
                    <div class="footer_contact_info" >
                        <!--<h3 class="footer_widget_title">Contact Us</h3>-->
                        <ul class="ul_li_block clearfix">
                            <li>
                                <strong><i class="fas fa-map-marker-alt"></i>Address:</strong>
                                <p class="mb-0">
                                 {{$settings->location1}}
                          </p>
                            </li>

                        </ul>
                    </div>
                </div>



                <div class="col-lg-3 col-md-4 col-sm-12 col-sm-12">
                    <div class="footer_contact_info">

                        <ul class="ul_li_block clearfix">

                            <li>
                                <strong><i class="fas fa-envelope"></i>Email:</strong>
                                <p class="mb-0">info@email.com</p>
                            </li>

                        </ul>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-12 col-sm-12">
                    <div class="footer_contact_info">

                        <ul class="ul_li_block clearfix">
                            <li>
                                <strong><i class="fas fa-phone"></i>Contact:</strong>
                                <p class="mb-0"> {{$settings->address}} </p>
                                <small>Available on viber and whatsapp</small>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="footer_bottom text-white clearfix" data-bg-color="#000C21">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <p class="copyright_text mb-0">{{$settings->copyright_text}} </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
</footer>
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/parallaxie.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/nice-select.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/gmaps.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/waypoint.js')}}"></script>
<script src="{{asset('js/counterup.min.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script src="{{asset('js/mCustomScrollbar.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
