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

                        <div class="col-lg-12 col-xs-12">
                            <ul class="ul_li clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li>Our Tariff</li>
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

                        <h5>Airport Route/Disposal Charge/Over Night Charge</h5>
                    {!! $data->content !!}
                    {{--                        <table class="table table-striped table-bordered">--}}
                    {{--                            <tbody>--}}
                    {{--                            <tr>--}}
                    {{--                                <td>--}}
                    {{--                                    S.N--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    Description of Trips--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    Car--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    &nbsp;&nbsp;&nbsp;&nbsp; Van--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    Hiace/4wd--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    Coaster--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    Sutlej Bus--}}
                    {{--                                </td>--}}
                    {{--                            </tr>--}}
                    {{--                            <tr>--}}
                    {{--                                <td style="height:18px; width:42px">--}}
                    {{--                                    1.--}}
                    {{--                                </td>--}}
                    {{--                                <td style="height:18px; width:228px">--}}
                    {{--                                    Disposal Charge per hours--}}
                    {{--                                </td>--}}
                    {{--                                <td style="height:18px; width:46px">--}}
                    {{--                                    550--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    825--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    962.5--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    1238--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    1513--}}
                    {{--                                </td>--}}
                    {{--                            </tr>--}}
                    {{--                            <tr>--}}
                    {{--                                <td  >--}}
                    {{--                                    2.--}}
                    {{--                                </td>--}}
                    {{--                                <td  >--}}
                    {{--                                    Overnight Charge--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    2500--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    3750--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    4375--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    5625--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    6875--}}
                    {{--                                </td>--}}
                    {{--                            </tr>--}}
                    {{--                            <tr>--}}
                    {{--                                <td  >--}}
                    {{--                                    3.--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    Airport Arrival Departure (2hours)--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    1000--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    1500--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    1750--}}
                    {{--                                </td>--}}
                    {{--                                <td>--}}
                    {{--                                    2250--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    2750--}}
                    {{--                                </td>--}}
                    {{--                            </tr>--}}
                    {{--                            <tr>--}}
                    {{--                                <td >--}}
                    {{--                                    4.--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    Mountain Flight &nbsp;&nbsp;&nbsp;--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    2000--}}

                    {{--                                    &nbsp;--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    3000--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    3500--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    4500--}}
                    {{--                                </td>--}}
                    {{--                                <td >--}}
                    {{--                                    5500--}}
                    {{--                                </td>--}}
                    {{--                            </tr>--}}
                    {{--                            </tbody>--}}
                    {{--                        </table>--}}
                    <!--  -->


                    </div>
                </div>
            </div>
        </div>
    </main>


@stop
