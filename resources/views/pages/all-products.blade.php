@extends('layouts.app')
@section('content')

    <!--Breadcrumb start-->
    <div class="rs_pagetitle rs_toppadder40 rs_bottompadder40">
        <div class="rs_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page_title">
                        <h3 class="rs_bottompadder20">Toate Produsele</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Acasa</a></li>
                        <li class="active">Toate Produsele</li>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="rs_found_count">
                        <p>{{$count}} de produse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <div class="rs_graybg rs_product_found rs_bottompadder30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 col-lg-push-3 col-md-push-4 col-sm-push-4 col-xs-push-0">
                    <div id="rs_grid">
                        <div class="row">
                            <div class="woocommerce_wrapper rs_listview_div">
                                <ul class="dgm_listdata rs_grid">
                                    @foreach($products as $product)
                                        <li class="mix mix-all price" data-value="1">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rs_toppadder30">
                                                <div class="rs_product_div">
                                                    <div class="rs_product_img">
                                                        <img src="{{ Voyager::image($product->image_url) }}"
                                                             class="img-responsive latest-phones" alt="">
                                                        <div class="rs_overlay">
                                                            <div class="rs_overlay_inner">
                                                                <ul>
                                                                    <li>
                                                                        <a class="fancybox animated slideInDown"
                                                                           data-fancybox-group="product"
                                                                           href="{{ Voyager::image($product->image_url) }}"
                                                                           title="{{$product->name}}">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form action="{{ action('CartController@store') }}" method="POST">
                                                                                {{ csrf_field() }}
                                                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                                                            <button type="submit" class="addToCart"><i class="fa fa-shopping-cart"></i></button>
                                                                                {{-- <a href="#" class="rs_button rs_button_blue m-b-15">Adauga in Cos</a> --}}
                                                                        </form>                                                                    
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="rs_product_price">
                                                            <h2>
                                                                <small>$</small>{{$product->price}}</h2>
                                                        </div>
                                                    </div>
                                                    <div class="rs_product_detail">
                                                        <h5 class="center-text"><a
                                                            href="{{url('produs/'.$product->slug)}}">{{$product->name}}</a>
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
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="rs_pagination rs_toppadder40 rs_bottompadder40 text-right">
                                {!! $products->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
                {{--SIDEBAR START--}}
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-pull-9 col-md-pull-8 col-sm-pull-8 col-xs-pull-0">
                    <div class="rs_sidebar_wrapper">
                        <aside class="widget widget_categories">
                            <h4 class="widget-title">Categorii</h4>
                            <ul>
                                <li><a href="#">Huse iPhone <span>(26)</span></a></li>
                                <li><a href="#">Huse Samsung <span>(32)</span></a></li>
                                <li><a href="#">Huse Huawei <span>(48)</span></a></li>
                                <li><a href="#">Huse LG <span>(23)</span></a></li>
                                <li><a href="#">Huse Asus <span>(36)</span></a></li>
                                <li><a href="#">Huse HTC <span>(47)</span></a></li>
                                <li><a href="#">Huse Lenovo <span>(68)</span></a></li>
                                <li><a href="#">Huse Nokia <span>(68)</span></a></li>
                                <li><a href="#">Huse Sony <span>(68)</span></a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_categories">
                            <h4 class="widget-title">Tipuri de Huse</h4>
                            <ul>
                                <li><a href="#">Silicon</a></li>
                                <li><a href="#">Flip-up</a></li>
                                <li><a href="#">Hard-case plastic</a></li>
                            </ul>
                        </aside>

                        <aside class="widget widget_tag_cloud">
                            <h4 class="widget-title">Tag-uri</h4>
                            <div class="tag_cloud_box">
                                <a href="#" class="ed_btn ed_orange">Multicolor</a>
                                <a href="#" class="ed_btn ed_orange">Basic</a>
                                <a href="#" class="ed_btn ed_orange">Material Design</a>
                                <a href="#" class="ed_btn ed_orange">Geometric</a>
                                <a href="#" class="ed_btn ed_orange">Football</a>
                                <a href="#" class="ed_btn ed_orange">Sport</a>
                                <a href="#" class="ed_btn ed_orange">Auto</a>
                            </div>
                        </aside>

                        <aside class="widget widget_advertisement">
                            <h4 class="widget-title">Advertisement</h4>
                            <img src="http://placehold.it/263X254" alt="" class="img-responsive">
                            <img src="http://placehold.it/263X254" alt="" class="img-responsive">
                        </aside>
                    </div>
                </div>
                {{--SIDEBAR END--}}
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