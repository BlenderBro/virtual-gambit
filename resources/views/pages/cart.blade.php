@extends('layouts.app')
@section('content')
    <!--Breadcrumb start-->
    <div class="rs_pagetitle rs_toppadder40 rs_bottompadder40">
        <div class="rs_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page_title">
                        <h3 class="rs_bottompadder20">shop cart</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Acasa</a></li>
                        <li><a href="{{url('toate-produsele')}}">Toate Produsele</a></li>
                        <li class="active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <?php
      // echo $id;
    ?>
    {{-- <div id="comp">
    <example-component></example-component>
    </div> --}}
    <div class="rs_graybg rs_toppadder100 rs_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="rs_message_div">
                        {{-- <div class="rs_topmsg">
                            <p>Hey! Nice selection of items there. Please review your order below</p>
                            <p>and follow the next quick steps to complete your order.</p>
                        </div> --}}
                        @if(session()->has('success_message'))
                        <div class="alert alert-success">
                            <p><i class="fas fa-check-circle"></i>{{ session()->get('success_message') }}</p>
                        </div>
                        @endif
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $err)
                                <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="woo-cart-table rs_bottompadder30">
                        @if(Cart::count() > 0)
                        <table class="table">
                                <tr>
                                    <th></th>
                                    <th>Produs</th>
                                    <th>Cantitate</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                                @foreach(Cart::content() as $item)
                                <tr>
                                    <td></td>
                                    <td>
                                        <img src="{{asset($item->model->image_url)}}" alt="">
                                    <p>{{$item->model->name}}, {{$item->rowId}}</p>
                                    </td>
                                    <td class="text-center">
                                        <form action="">
                                            <div class="rs_incre_decre_btns">
                                                <button type="button" class="btn_small count_minus" id="breakDecrease">
                                                  <i class="fa fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn_big count_val" id="breakValue" disabled>asdf</button>
                                                <button type="button" class="btn_small count_plus" id="breakIncrease">
                                                  <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="text-center"><span>{{$item->model->price}} <small> RON</small></span>
                                    </td>
                                    <td class="text-center"><a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>    
                                @endforeach                        
                            </table>
                            <hr>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                    <div class="rs_offerdiv">
                        <div class="woo_product-code">
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="text" name="code" class="form-control" value="" placeholder="Cod de discount">
                                </div>
                                <button class="rs_apply_coupenbtn rs_button rs_button_orange">Aplica Discount</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                    <div class="cart_totals">
                        <div class="cart-heading rs_bottompadder20">Info Comanda</div>
                        <div class="cart-subtotal">
                            <p>
                                <label>Sub Total:</label> <span>58 ron</span>
                            </p>
                            <p>
                                <label>Discount Aplicat:</label> <span>-0 ron</span>
                            </p>
                        </div>
                        <div class="order-total rs_toppadder10 rs_bottompadder10">
                            <p>
                                <label>total:</label> <span>58 ron</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="rs_showmore rs_toppadder50">
                        <a href="#" class="rs_button rs_button_orange">Finalizare Comanda</a>
                    </div>
                    <div class="rs_continuecart rs_toppadder50">
                        <a href="#" class="rs_button rs_button_orange">Continua Cumparaturile</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @else
    <div class="rs_topmsg">
        <p>Cosul de cumparaturi este gol.</p>
        <p><i class="fas fa-shopping-basket"></i> <a class="a-white" href="{{url('toate-produsele')}}">Vezi Produsele</a> <i class="fas fa-shopping-basket"></i></p>
    </div>
    @endif
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


@section('cart-script')
    <script src="/js/app.js" type="text/javascript"></script>
@endsection