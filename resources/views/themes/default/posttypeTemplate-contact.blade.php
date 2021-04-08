@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <main>

        <section class="breadcrumb_section text-center clearfix">

            <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
                <div class="container">
                    <ul class="ul_li clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Contact</li>

                    </ul>
                </div>
            </div>
        </section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14136.443314541722!2d85.31971328163841!3d27.652042575035868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1763afe90a91%3A0x24e78f10fcea8163!2sSatdobato%2C%20Lalitpur%2044700!5e0!3m2!1sen!2snp!4v1615620447506!5m2!1sen!2snp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <section class="contact_form_section sec_ptb_100 clearfix">
            <div class="container">
                <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="title_text mb-0"><span>Send Us a Message</span></h2>
                </div>
                <form id="contact_form" action="{{route('contact-us')}}" method="POST">
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
                    <div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="600"><button type="submit" value="submit" class="custom_btn btn_width bg_default_red text-uppercase">Send a Message <img src="{{asset('images/icons/icon_01.png')}}" alt="icon_not_found"></button></div>
                </form>
            </div>
        </section>
    </main>

@endsection
