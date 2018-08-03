@extends('layouts.app')
@section('content')

    <!--Breadcrumb start-->
    <div class="rs_pagetitle rs_toppadder40 rs_bottompadder40">
        <div class="rs_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page_title">
                        <h3 class="rs_bottompadder20">contact</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Acasa</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <div class="rs_contact_map">
        <div class="rs_contact_map_overlay"><a href="#"><img src="{{asset('images/map_marker.png')}}" alt=""></a></div>
        <div id="map"></div>
    </div>
    <div class="rs_graybg rs_toppadder100 rs_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="rs_contact_form">
                        <div class="rs_submitform">

                            <div class="form-group">
                                <input type="text" class="form-control" id="ur_name" placeholder="Numele tau">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="ur_mail" placeholder="Adresa de Email">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="sub" placeholder="Subiect">
                            </div>

                            <textarea class="form-control" rows="10" id="msg" placeholder="Mesaj"></textarea>

                            <div class="rs_btn_div rs_toppadder30">
                                <a href="javascript:;" id="send_btn" class="rs_button rs_button_orange">Trimite</a>
                                <p id="err"></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 pull-right">
                    <div class="rs_contact_section">
                        <div class="rs_contact_heading rs_green_heading rs_bottompadder50">
                            <h3>Unde ne gasiti</h3>
                            <div><span><i class="fa fa-heart"></i></span></div>
                        </div>
                        <div class="rs_contact_info">
                            <div class="rs_contact_info_img">
                                <img src="images/cnt_1.png" alt="" class="img-responsive">
                            </div>
                            <div class="rs_contact_data">
                                <span>Romaina, Bucuresti, sector 3</span>
                            </div>
                        </div>
                        <div class="rs_contact_info">
                            <div class="rs_contact_info_img">
                                <img src="images/cnt_2.png" alt="" class="img-responsive">
                            </div>
                            <div class="rs_contact_data">
                                <p>123 123 123</p>
                                <p>123 123 123</p>
                            </div>
                        </div>
                        <div class="rs_contact_info">
                            <div class="rs_contact_info_img">
                                <img src="images/cnt_3.png" alt="" class="img-responsive">
                            </div>
                            <div class="rs_contact_data">
                                <p><a href="#">info@ceva.com</a></p>
                                <p><a href="#">contact@ceva.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rs_testimonial_section rs_toppadder50 rs_bottompadder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="rs_subscribe_section_heading">
                                <h4>Abonati-va pentru a beneficia de ofertele si discount-urile lunare!</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                            <div class="row">
                                <div class="rs_subscribe_section_form rs_toppadder30">
                                    <form class="form">
                                        <input class="form-control" type="text"
                                               placeholder="Email-ul tau"/>
                                        <a href="#" class="rs_button rs_button_orange pull-right rs_center_btn">Aboneaza-ma</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection