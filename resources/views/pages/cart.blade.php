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
    <div class="rs_graybg rs_toppadder100 rs_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="rs_message_div">
                        <div class="rs_topmsg">
                            <p>Hey! Nice selection of items there. Please review your order below</p>
                            <p>and follow the next quick steps to complete your order.</p>
                        </div>
                        {{--<div class="alert alert-success">--}}
                            {{--<p><i class="fa fa-check-square-o"></i> Selected items was successfully added to your cart</p>--}}
                            {{--<div class="rs_updatecart">--}}
                                {{--<a href="#" class="rs_button rs_button_orange" data-text="Update Cart"><span>Update Cart</span></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="woo-cart-table rs_bottompadder30">
                        <table class="table">
                            <tr>
                                <th></th>
                                <th>Produs</th>
                                <th>Cantitate</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <img src="http://placehold.it/100X100" alt="">
                                    <p>{name} </p>
                                </td>
                                <td class="text-center">
                                    <div class="rs_incre_decre_btns">
                                        <button type="button" class="btn_small count_minus" id="breakDecrease">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn_big count_val" id="breakValue" disabled></button>
                                        <button type="button" class="btn_small count_plus" id="breakIncrease">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="text-center"><span><small>$</small>{cost}</span>
                                </td>
                                <td class="text-center"><a href="#"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </table>
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
    <div class="rs_recentlyview_slider_section rs_toppadder100 rs_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="rs_main_heading rs_pink_heading rs_bottompadder60">
                        <h3>YOU MAY BE INTERESTED</h3>
                        <div><span><i class="fa fa-heart"></i></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="rs_recentlyview_slider rs_bottompadder60">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="rs_product_div">
                                    <div class="rs_product_img">
                                        <img src="http://placehold.it/253X172" class="img-responsive" alt="">
                                        <div class="rs_overlay">
                                            <div class="rs_overlay_inner">
                                                <ul>
                                                    <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="Vertical WP Theme"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rs_product_price"><h2><small>$</small>29</h2></div>
                                    </div>

                                    <div class="rs_product_detail">
                                        <h5><a href="product_single.html">Vertical WP Theme</a></h5>
                                        <div class="rs_rating">
                                            <form>
                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rs_product_div_footer">
                                        <div class="rs_author_div">
                                            <img src="http://placehold.it/30X30" class="img-responsive" alt="">
                                            <div>
                                                <h4>Unimech Design</h4>
                                                <p>Wordpress</p>
                                            </div>
                                        </div>
                                        <div class="rs_share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-comment-o"></i> <span>16</span></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> <span>29</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="rs_product_div">
                                    <div class="rs_product_img">
                                        <img src="http://placehold.it/253X172" class="img-responsive" alt="">
                                        <div class="rs_overlay">
                                            <div class="rs_overlay_inner">
                                                <ul>
                                                    <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="20 Device Mock-up"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rs_product_price"><h2><small>$</small>10</h2></div>
                                    </div>

                                    <div class="rs_product_detail">
                                        <h5><a href="product_single.html">20 Device Mock-up</a></h5>
                                        <div class="rs_rating">
                                            <form>
                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rs_product_div_footer">
                                        <div class="rs_author_div">
                                            <img src="http://placehold.it/30X30" class="img-responsive" alt="">
                                            <div>
                                                <h4>Joshep Gordon</h4>
                                                <p>Mock up</p>
                                            </div>
                                        </div>
                                        <div class="rs_share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-comment-o"></i> <span>08</span></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> <span>13</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="rs_product_div">
                                    <div class="rs_featureddiv">Featured</div>
                                    <div class="rs_product_img">
                                        <img src="http://placehold.it/253X172" class="img-responsive" alt="">
                                        <div class="rs_overlay">
                                            <div class="rs_overlay_inner">
                                                <ul>
                                                    <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="2PX Line Icons Set"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rs_product_price"><h2><small>$</small>6</h2></div>
                                    </div>

                                    <div class="rs_product_detail">
                                        <h5><a href="product_single.html">2PX Line Icons Set</a></h5>
                                        <div class="rs_rating">
                                            <form>
                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rs_product_div_footer">
                                        <div class="rs_author_div">
                                            <img src="http://placehold.it/30X30" class="img-responsive" alt="">
                                            <div>
                                                <h4>Scralett John</h4>
                                                <p>Icons</p>
                                            </div>
                                        </div>
                                        <div class="rs_share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-comment-o"></i> <span>18</span></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> <span>43</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="rs_product_div">
                                    <div class="rs_product_img">
                                        <img src="http://placehold.it/253X172" class="img-responsive" alt="">
                                        <div class="rs_overlay">
                                            <div class="rs_overlay_inner">
                                                <ul>
                                                    <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="120 Premium Templates Bundle"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rs_product_price"><h2><small>$</small>55</h2></div>
                                    </div>

                                    <div class="rs_product_detail">
                                        <h5><a href="product_single.html">120 Premium Templates Bundle</a></h5>
                                        <div class="rs_rating">
                                            <form>
                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rs_product_div_footer">
                                        <div class="rs_author_div">
                                            <img src="http://placehold.it/30X30" class="img-responsive" alt="">
                                            <div>
                                                <h4>Julianne Moore</h4>
                                                <p>HTML Templates</p>
                                            </div>
                                        </div>
                                        <div class="rs_share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-comment-o"></i> <span>13</span></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> <span>38</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="rs_product_div">
                                    <div class="rs_product_img">
                                        <img src="http://placehold.it/253X172" class="img-responsive" alt="">
                                        <div class="rs_overlay">
                                            <div class="rs_overlay_inner">
                                                <ul>
                                                    <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="20 Fancy Hero Images"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rs_product_price"><h2><small>$</small>48</h2></div>
                                    </div>

                                    <div class="rs_product_detail">
                                        <h5><a href="product_single.html">20 Fancy Hero Images</a></h5>
                                        <div class="rs_rating">
                                            <form>
                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rs_product_div_footer">
                                        <div class="rs_author_div">
                                            <img src="http://placehold.it/30X30" class="img-responsive" alt="">
                                            <div>
                                                <h4>DigitalGravy</h4>
                                                <p>Stock Images</p>
                                            </div>
                                        </div>
                                        <div class="rs_share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-comment-o"></i> <span>29</span></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> <span>44</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="rs_product_div">
                                    <div class="rs_product_img">
                                        <img src="http://placehold.it/253X172" class="img-responsive" alt="">
                                        <div class="rs_overlay">
                                            <div class="rs_overlay_inner">
                                                <ul>
                                                    <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="Minimal HTML5 Template"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rs_product_price"><h2><small>$</small>16</h2></div>
                                    </div>

                                    <div class="rs_product_detail">
                                        <h5><a href="product_single.html">Minimal HTML5 Template</a></h5>
                                        <div class="rs_rating">
                                            <form>
                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rs_product_div_footer">
                                        <div class="rs_author_div">
                                            <img src="http://placehold.it/30X30" class="img-responsive" alt="">
                                            <div>
                                                <h4>Rob Brown</h4>
                                                <p>HTML Templates</p>
                                            </div>
                                        </div>
                                        <div class="rs_share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-comment-o"></i> <span>37</span></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> <span>86</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="rs_product_div">
                                    <div class="rs_product_img">
                                        <img src="http://placehold.it/253X172" class="img-responsive" alt="">
                                        <div class="rs_overlay">
                                            <div class="rs_overlay_inner">
                                                <ul>
                                                    <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="Multipurpose WP Theme"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rs_product_price"><h2><small>$</small>48</h2></div>
                                    </div>

                                    <div class="rs_product_detail">
                                        <h5><a href="product_single.html">Multipurpose WP Theme</a></h5>
                                        <div class="rs_rating">
                                            <form>
                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rs_product_div_footer">
                                        <div class="rs_author_div">
                                            <img src="http://placehold.it/30X30" class="img-responsive" alt="">
                                            <div>
                                                <h4>Glenne Headly</h4>
                                                <p>Wordpress</p>
                                            </div>
                                        </div>
                                        <div class="rs_share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-comment-o"></i> <span>124</span></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> <span>30</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="rs_product_div">
                                    <div class="rs_product_img">
                                        <img src="http://placehold.it/253X172" class="img-responsive" alt="">
                                        <div class="rs_overlay">
                                            <div class="rs_overlay_inner">
                                                <ul>
                                                    <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="Brand Identity Mock-up Set"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rs_product_price"><h2><small>$</small>22</h2></div>
                                    </div>

                                    <div class="rs_product_detail">
                                        <h5><a href="product_single.html">Brand Identity Mock-up Set</a></h5>
                                        <div class="rs_rating">
                                            <form>
                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rs_product_div_footer">
                                        <div class="rs_author_div">
                                            <img src="http://placehold.it/30X30" class="img-responsive" alt="">
                                            <div>
                                                <h4>Brie Larson</h4>
                                                <p>Mockup</p>
                                            </div>
                                        </div>
                                        <div class="rs_share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-comment-o"></i> <span>18</span></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> <span>41</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="rs_product_div">
                                    <div class="rs_product_img">
                                        <img src="http://placehold.it/253X172" class="img-responsive" alt="">
                                        <div class="rs_overlay">
                                            <div class="rs_overlay_inner">
                                                <ul>
                                                    <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="10 Photoshop Actions"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rs_product_price"><h2><small>$</small>212</h2></div>
                                    </div>

                                    <div class="rs_product_detail">
                                        <h5><a href="product_single.html">10 Photoshop Actions</a></h5>
                                        <div class="rs_rating">
                                            <form>
                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rs_product_div_footer">
                                        <div class="rs_author_div">
                                            <img src="http://placehold.it/30X30" class="img-responsive" alt="">
                                            <div>
                                                <h4>Jeremy Luke</h4>
                                                <p>PSD Actions</p>
                                            </div>
                                        </div>
                                        <div class="rs_share">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-comment-o"></i> <span>08</span></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> <span>29</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
                                <h4>Subscribe to our free update deals, announcements, freebies offer and More..!</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                            <div class="row">
                                <div class="rs_subscribe_section_form rs_toppadder30">
                                    <form class="form">
                                        <input class="form-control" type="text" placeholder="Enter your mail address to start receiving" />
                                        <a href="#" class="rs_button rs_button_orange pull-right rs_center_btn">Subscribe</a>
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