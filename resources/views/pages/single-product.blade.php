@extends('layouts.app')
@section('content')

    <?php
    $cat = \App\Category::where('id', $product->category_id)->first();
    ?>
    <!--Breadcrumb start-->
    <div class="rs_pagetitle rs_toppadder40 rs_bottompadder40">
        <div class="rs_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page_title">
                        <h3 class="rs_bottompadder20">Detalii Produs</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">home</a></li>
                        <li><a href="{{url('/toate-produsele')}}">Toate Produsele</a></li>
                        <li class="active">{!!  $product->name !!}</li>
                        <p>{{$cat->name}}</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <div class="rs_graybg rs_toppadder60 rs_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="rs_single_product_slider">
                        <img class="single-phone" src="{{ asset($product->image_url)}}" alt="{{$product->name}}">
                    </div>
                    <div class="rs_single_product_btn_section rs_toppadder30 rs_bottompadder30">

                    </div>
                    <div class="rs_buy_license_section">
                        <h4>{{$product->name}}</h4>
                        <p>{{$product->description}}</p>
                        <h4>Suport si Intrebari Frecvente:</h4>
                        <h5>Garantia Calitatii</h5>
                        <p>Husele sunt dintr-un silicon premium, fiind atent selecționate de colegii
                            noștri de la producție, de asemenea,
                            marginile sunt transparente. Tot spatele husei este acoperit conform
                            imaginilor de produs, iar finisajul este unul mat.
                            Husele sunt durabile și rezistente, antișoc și anti-zgârieturi.</p>

                        <h5>Livrare si Retur</h5>
                        <p>Livrările sunt efectuate de partenerul nostru, Bookurier, iar costul
                            livrării este de 16 ron (TVA inclus), indiferent de
                            localitatea în care locuiești. </br> În cazul în care comanda ta ajunge
                            la tine : incompletă, cu probleme de producție sau
                            diferită față de ceea ce ai cerut, schimbul este gratuit. Pentru astfel
                            de situații ne poți contacta la adresa
                            de email : ceva@provider.ro</p>
                        <div class="rs_btn_div">
                            <a href="#" class="rs_button rs_button_orange">Cumpara ${{$product->price}}</a>
                        </div>
                    </div>
                    {{--<aside class="widget widget_categories">--}}
                    {{--<h4 style="text-transform: none" class="widget-title">Suport si Intrebari Frecvente</h4>--}}
                    {{--<div id="faq">--}}
                    {{--<div class="rs_support_faq_section padd-l-15">--}}
                    {{--<h4>Product Support</h4>--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                    {{--<div class="rs_include_products">--}}
                    {{--<h5>Garantia Calitatii</h5>--}}
                    {{--<p>Husele sunt dintr-un silicon premium, fiind atent selecționate de colegii--}}
                    {{--noștri de la producție, de asemenea,--}}
                    {{--marginile sunt transparente. Tot spatele husei este acoperit conform--}}
                    {{--imaginilor de produs, iar finisajul este unul mat.--}}
                    {{--Husele sunt durabile și rezistente, antișoc și anti-zgârieturi.</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                    {{--<div class="rs_notinclude_products">--}}
                    {{--<h5>Livrare si Retur</h5>--}}
                    {{--<p>Livrările sunt efectuate de partenerul nostru, Bookurier, iar costul--}}
                    {{--livrării este de 16 ron (TVA inclus), indiferent de--}}
                    {{--localitatea în care locuiești. </br> În cazul în care comanda ta ajunge--}}
                    {{--la tine : incompletă, cu probleme de producție sau--}}
                    {{--diferită față de ceea ce ai cerut, schimbul este gratuit. Pentru astfel--}}
                    {{--de situații ne poți contacta la adresa--}}
                    {{--de email : ceva@provider.ro</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="rs_singleproduct_faq_questions">--}}
                    {{--<div id="accordion">--}}
                    {{--<h3>License of use products</h3>--}}
                    {{--<div>--}}
                    {{--<h5>How do I contact support?</h5>--}}
                    {{--<p>We work with clients big and small across a range of sectors and we--}}
                    {{--utilise all forms of media to get your name out there in a way that’s--}}
                    {{--right for you. We work with clients big and small across a range of--}}
                    {{--sectors and we utilise all forms of media to get your name out there in--}}
                    {{--a way that’s right for you.</p>--}}
                    {{--<p>We work with clients big and small across a range of sectors and we--}}
                    {{--utilise all forms of media to get your name.</p>--}}
                    {{--</div>--}}
                    {{--<h3>I got an error with PayPal. How can I resolve the issue?</h3>--}}
                    {{--<div>--}}
                    {{--<p>We are a fairly small, flexible design studio that designs for print and--}}
                    {{--web. We work flexibly with clients to fulfil their design needs. Whether--}}
                    {{--you need to create a brand from scratch, including marketing materials--}}
                    {{--and a beautiful and functional website or whether you are looking for a--}}
                    {{--design refresh we are confident you will be pleased with the--}}
                    {{--results.</p>--}}
                    {{--</div>--}}
                    {{--<h3>I cannot find the license key for activating the theme I have bought some--}}
                    {{--time ago. Where can I find it?</h3>--}}
                    {{--<div>--}}
                    {{--<p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque--}}
                    {{--lobortis. Phasellus pellentesque purus in massa. Aenean in pede.--}}
                    {{--Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed--}}
                    {{--commodo, magna quislacinia ornare, quam ante aliquam nisi, eu iaculis--}}
                    {{--leo purus venenatis dui.</p>--}}
                    {{--</div>--}}
                    {{--<h3>Will the themes work with my plugins?</h3>--}}
                    {{--<div>--}}
                    {{--<p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et--}}
                    {{--malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in--}}
                    {{--faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia--}}
                    {{--mauris vel est.</p>--}}
                    {{--<p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat--}}
                    {{--lectus. Class aptent taciti sociosqu ad litora torquent per conubia--}}
                    {{--nostra, per inceptos himenaeos.</p>--}}
                    {{--</div>--}}
                    {{--<h3>Can I buy a “lifetime” license?</h3>--}}
                    {{--<div>--}}
                    {{--<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer--}}
                    {{--ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit--}}
                    {{--amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo--}}
                    {{--ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque--}}
                    {{--vulputate.</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</aside>--}}
                </div>
                {{--RIGHT SIDEBAR START--}}
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="rs_sidebar_wrapper_fourth">
                        <aside class="widget widget_license">
                            <h4 class="widget-title">Detalii model</h4>
                            <p>Acest design poate fi imprimat pentru orice model de telefon si orice tip de husa</p>
                        </aside>
                        <aside class="widget widget_button">
                            <a href="cart.html" class="rs_button rs_button_blue">Adauga in Cos</a>
                            <a href="#" class="rs_button rs_button_orange">Cumpara ${{$product->price}}</a>
                        </aside>
                        <aside class="widget widget_Share">
                            <h4 class="widget-title">Distribuie</h4>
                            <ul class="widget_Share_first">
                                <li><a href="#" class="clr_1"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#" class="clr_2"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#" class="clr_3"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#" class="clr_4"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#" class="clr_5"><i class="fab fa-google-plus-square"></i></a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_technical_info">
                            <h4 class="widget-title">Informatii Tehnice</h4>
                            <ul>
                                <li><b>Material:</b> Silicon</li>
                                <li><b>Finish:</b> Mat</li>
                            </ul>
                        </aside>

                    </div>
                </div>
                {{--RIGHT SIDEBAR END--}}
            </div>
        </div>
    </div>
    {{--LATEST PRODUCTS START--}}
    <div class="rs_recentlyview_slider_section rs_toppadder100 rs_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="rs_main_heading rs_pink_heading rs_bottompadder60">
                        <h3>Recent Adaugate</h3>
                        <div><span><i class="fa fa-heart"></i></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="rs_recentlyview_slider rs_bottompadder60">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        @foreach($latest as $l)
                            <div class="item">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="rs_product_div">
                                        <div class="rs_featureddiv">Nou</div>
                                        <div class="rs_product_img">
                                            <img src="{{ asset($l->image_url) }}"
                                                 class="img-responsive latest-phones" alt="">
                                            <div class="rs_overlay">
                                                <div class="rs_overlay_inner">
                                                    <ul>
                                                        <li>
                                                            <a class="fancybox animated slideInDown"
                                                               data-fancybox-group="product"
                                                               href="{{ asset($l->image_url) }}"
                                                               title="{{$l->name}}">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="animated slideInDown">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="rs_product_price">
                                                <h2>
                                                    <small>$</small>{{$l->price}}</h2>
                                            </div>
                                        </div>
                                        <div class="rs_product_detail">
                                            <h5 class="center-text"><a
                                                        href="{{url('produs/'.$l->slug)}}">{{$l->name}}</a>
                                            </h5>
                                        </div>
                                        <div class="rs_product_div_footer">
                                            <div class="rs_author_div">
                                                <img src="{{ asset('images/smartphone.svg') }}"
                                                     class="img-responsive smartphone-icon" alt="">
                                                <div>
                                                    <h4>
                                                        Samsung
                                                    </h4>
                                                    <p>Galaxy S5</p>
                                                </div>
                                            </div>
                                            <div class="rs_share">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-facebook-square"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--LATEST PRODUCTS END--}}
    @include('partials.newsletter')
@endsection