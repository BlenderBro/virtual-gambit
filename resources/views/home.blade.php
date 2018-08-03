@extends('layouts.app')

@section('content')
<!--Breadcrumb start-->
<div class="rs_pagetitle rs_toppadder40 rs_bottompadder40">
    <div class="rs_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page_title">
                    <h3 class="rs_bottompadder20">Admin</h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">Acasa</a></li>
                    <li class="active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<div class="rs_graybg rs_toppadder100 rs_bottompadder40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="rs_tab_wrapper">
                            <div class="rs_user_profile_img">
                                <img src="{{asset('images/back.png')}}" alt="" class="img-responsive">
                                <div class="rs_menu_pic_overlay"><h6 class="text-center">Dashboard</h6></div>
                            </div>
                            <div class="rs_left_tabwrapper">
                                <ul class="nav nav-tabs">
                                    {{--<li class="active"><span><i class="fa fa-user"></i></span><a href="#profile" data-toggle="tab"> Profile</a></li>--}}
                                    <li><span><i class="fa fa-briefcase"></i></span><a href="#products" data-toggle="tab">Produse</a></li>
                                    {{--<li><span><i class="fa fa-envelope"></i></span><a href="#messages" data-toggle="tab">Messages</a></li>--}}
                                    <li><span><i class="fa fa-upload"></i></span><a href="#upload" data-toggle="tab">Creaza Product</a></li>
                                    <li><span><i class="fa fa-usd"></i></span><a href="#earnings" data-toggle="tab">Venituri</a></li>
                                    <li><span><i class="fa fa-list"></i></span><a href="#statement" data-toggle="tab">Comenzi</a></li>
                                    <li><span><i class="fa fa-power-off"></i></span><a href="{{url('/logout')}}">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="rs_user_dashboard_tab">
                            <div class="tab-content">
                                <div class="tab-pane" id="products">
                                    <div class="rs_user_dashboard_tab_heading">
                                        <h4>products list</h4>
                                    </div>
                                    <div class="rs_user_dashboard_tab_info">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="woocommerce_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rs_bottompadder30 mix mix-all psd" data-value="1">
                                                        <div class="rs_product_div rs_author_prod_div">
                                                            <div class="rs_product_img">
                                                                <img src="http://placehold.it/288X196" class="img-responsive" alt="">
                                                                <div class="rs_overlay">
                                                                    <div class="rs_overlay_inner">
                                                                        <ul>
                                                                            <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="Workspace Elements Kit"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="rs_product_price"><h2><small>$</small>24</h2></div>
                                                            </div>
                                                            <div class="rs_product_detail">
                                                                <span>13 Purchases</span>
                                                                <h5><a href="product_single.html">Workspace Elements Kit</a></h5>
                                                            </div>
                                                            <div class="rs_product_div_footer">
                                                                <div class="rs_author_div">
                                                                    <p><i class="fa fa-calendar"></i> 18 Oct 2015</p>
                                                                </div>
                                                                <div class="rs_share">
                                                                    <select name="timepass" class="rs-custom-select">
                                                                        <option>Options</option>
                                                                        <option>View</option>
                                                                        <option>Edit</option>
                                                                        <option>Delete</option>
                                                                        <option>Hidden</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rs_bottompadder30 mix mix-all psd" data-value="1">
                                                        <div class="rs_product_div rs_author_prod_div">
                                                            <div class="rs_product_img">
                                                                <img src="http://placehold.it/288X196" class="img-responsive" alt="">
                                                                <div class="rs_overlay">
                                                                    <div class="rs_overlay_inner">
                                                                        <ul>
                                                                            <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="Ecommerce App UI Kit"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="rs_product_price"><h2><small>$</small>8</h2></div>
                                                            </div>
                                                            <div class="rs_product_detail">
                                                                <span>34 Purchases</span>
                                                                <h5><a href="product_single.html">Ecommerce App UI Kit</a></h5>
                                                            </div>
                                                            <div class="rs_product_div_footer">
                                                                <div class="rs_author_div">
                                                                    <p><i class="fa fa-calendar"></i> 18 Oct 2015</p>
                                                                </div>
                                                                <div class="rs_share">
                                                                    <select name="timepass" class="rs-custom-select">
                                                                        <option>Options</option>
                                                                        <option>View</option>
                                                                        <option>Edit</option>
                                                                        <option>Delete</option>
                                                                        <option>Hidden</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rs_bottompadder30 mix mix-all psd" data-value="1">
                                                        <div class="rs_product_div rs_author_prod_div">
                                                            <div class="rs_product_img">
                                                                <img src="http://placehold.it/288X196" class="img-responsive" alt="">
                                                                <div class="rs_overlay">
                                                                    <div class="rs_overlay_inner">
                                                                        <ul>
                                                                            <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="20 Exceptional Quality Fonts"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="rs_product_price"><h2><small>$</small>29</h2></div>
                                                            </div>
                                                            <div class="rs_product_detail">
                                                                <span>22 Purchases</span>
                                                                <h5><a href="product_single.html">20 Exceptional Quality Fonts</a></h5>
                                                            </div>
                                                            <div class="rs_product_div_footer">
                                                                <div class="rs_author_div">
                                                                    <p><i class="fa fa-calendar"></i> 18 Oct 2015</p>
                                                                </div>
                                                                <div class="rs_share">
                                                                    <select name="timepass" class="rs-custom-select">
                                                                        <option>Options</option>
                                                                        <option>View</option>
                                                                        <option>Edit</option>
                                                                        <option>Delete</option>
                                                                        <option>Hidden</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rs_bottompadder30 mix mix-all psd" data-value="1">
                                                        <div class="rs_product_div rs_author_prod_div">
                                                            <div class="rs_product_img">
                                                                <img src="http://placehold.it/288X196" class="img-responsive" alt="">
                                                                <div class="rs_overlay">
                                                                    <div class="rs_overlay_inner">
                                                                        <ul>
                                                                            <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="Vertical WP Theme"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="rs_product_price"><h2><small>$</small>48</h2></div>
                                                            </div>
                                                            <div class="rs_product_detail">
                                                                <span>59 Purchases</span>
                                                                <h5><a href="product_single.html">Vertical WP Theme</a></h5>
                                                            </div>
                                                            <div class="rs_product_div_footer">
                                                                <div class="rs_author_div">
                                                                    <p><i class="fa fa-calendar"></i> 18 Oct 2015</p>
                                                                </div>
                                                                <div class="rs_share">
                                                                    <select name="timepass" class="rs-custom-select">
                                                                        <option>Options</option>
                                                                        <option>View</option>
                                                                        <option>Edit</option>
                                                                        <option>Delete</option>
                                                                        <option>Hidden</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rs_bottompadder30 mix mix-all psd" data-value="1">
                                                        <div class="rs_product_div rs_author_prod_div">
                                                            <div class="rs_product_img">
                                                                <img src="http://placehold.it/288X196" class="img-responsive" alt="">
                                                                <div class="rs_overlay">
                                                                    <div class="rs_overlay_inner">
                                                                        <ul>
                                                                            <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/500X343.png" title="20 Device Mockups"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="rs_product_price"><h2><small>$</small>10</h2></div>
                                                            </div>
                                                            <div class="rs_product_detail">
                                                                <span>39 Purchases</span>
                                                                <h5><a href="product_single.html">20 Device Mockups</a></h5>
                                                            </div>
                                                            <div class="rs_product_div_footer">
                                                                <div class="rs_author_div">
                                                                    <p><i class="fa fa-calendar"></i> 18 Oct 2015</p>
                                                                </div>
                                                                <div class="rs_share">
                                                                    <select name="timepass" class="rs-custom-select">
                                                                        <option>Options</option>
                                                                        <option>View</option>
                                                                        <option>Edit</option>
                                                                        <option>Delete</option>
                                                                        <option>Hidden</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rs_bottompadder30 mix mix-all psd" data-value="1">
                                                        <div class="rs_product_div rs_author_prod_div">
                                                            <div class="rs_product_img">
                                                                <img src="http://placehold.it/288X196" class="img-responsive" alt="">
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
                                                                <span>25 Purchases</span>
                                                                <h5><a href="product_single.html">120 Premium Templates Bundle</a></h5>
                                                            </div>
                                                            <div class="rs_product_div_footer">
                                                                <div class="rs_author_div">
                                                                    <p><i class="fa fa-calendar"></i> 18 Oct 2015</p>
                                                                </div>
                                                                <div class="rs_share">
                                                                    <select name="timepass" class="rs-custom-select">
                                                                        <option>Options</option>
                                                                        <option>View</option>
                                                                        <option>Edit</option>
                                                                        <option>Delete</option>
                                                                        <option>Hidden</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rs_pagination_second rs_bottompadder20 text-center">
                                                        <ul class="pagination">
                                                            <li>
                                                                <a href="#" aria-label="Previous">
																<span aria-hidden="true">
																  <i class="fa fa-angle-left">
																  </i>
																</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">1</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="active">2</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">3</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">4</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">5</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">...</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">12</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" aria-label="Next">
																<span aria-hidden="true">
																  <i class="fa fa-angle-right">
																  </i>
																</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="upload">
                                    <div class="rs_user_dashboard_tab_heading">
                                        <h4>Creaza un Produs</h4>
                                    </div>
                                    <div class="rs_user_dashboard_tab_info">
                                        <div class="rs_user_dashboard_tab_info_form rs_author_tab_form">
                                            <form>
                                                <div class="form-group">
                                                    <label>Tip Carcasa<sup>*</sup></label>
                                                    <div class="rs_sort rs_active">Alege <i class="glyphicon glyphicon-option-vertical" aria-hidden="true"></i></div>
                                                    <div class="rs_product_sorting" style="display: block;">
                                                        <ul>
                                                            <li><a href="#">Silicon</a></li>
                                                            <li><a href="#">Hardcase</a></li>
                                                            <li><a href="#">Flipup</a></li>
                                                            <li><a href="#">Toate</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-group rs_toppadder40 rs_bottompadder10">
                                                    <label>Nume/Titlu<sup>*</sup></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group rs_bottompadder40">
                                                    <label>Descriere<sup>*</sup></label>
                                                    <textarea class="form-control" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group rs_bottompadder20">
                                                            <label>Pret (ron)<sup>*</sup></label>
                                                            <input type="number" class="form-control" placeholder="0.00">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label>Upload Imagini<sup>*</sup></label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="dgm_uploaddiv rs_bigbtn">
																  <span>
																	Upload Images
																  </span>
                                                                    <input type="file" id="myfile" class="dgm_myfile" name="myfile">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rs_btn_div rs_toppadder30">
                                                    <a href="#" class="rs_button rs_button_orange">Salveaza</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="earnings">
                                    <div class="rs_user_dashboard_tab_heading">
                                        <h4>earnings</h4>
                                    </div>
                                    <div class="rs_user_dashboard_tab_info">
                                        <div class="rs_statement_section">
                                            <div class="rs_sort rs_active">Year (2015) <i class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></i></div>
                                            <div class="rs_product_sorting" style="display: block;">
                                                <ul>
                                                    <li><a href="#">Year (2014)</a></li>
                                                    <li><a href="#">Year (2013)</a></li>
                                                    <li><a href="#">Year (2012)</a></li>
                                                </ul>
                                            </div>
                                            <div class="rs_statement_section_price">
                                                <p>Total Earnings</p>
                                                <span>$7634</span>
                                            </div>
                                            <div class="rs_statement_section_seles">
                                                <p>Total Sales</p>
                                                <span>670</span>
                                            </div>
                                        </div>
                                        <div class="rs_chart_section">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div id="chart" class="rs_chartable"></div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div id="chart1" class="rs_chartable"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane active" id="statement">
                                    <div class="rs_user_dashboard_tab_heading">
                                        <h4>statement</h4>
                                    </div>
                                    <div class="rs_user_dashboard_tab_info">
                                        <div class="rs_statement_section">
                                            <div class="rs_sort rs_active">Sep (2015) <i class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></i></div>
                                            <div class="rs_product_sorting" style="display: block;">
                                                <ul>
                                                    <li><a href="#">Oct (2015)</a></li>
                                                    <li><a href="#">Nov (2015)</a></li>
                                                    <li><a href="#">Dec (2015)</a></li>
                                                </ul>
                                            </div>
                                            <div class="rs_statement_section_price">
                                                <p>Total Earnings</p>
                                                <span>$1634</span>
                                            </div>
                                            <div class="rs_statement_section_seles">
                                                <p>Total Sales</p>
                                                <span>126</span>
                                            </div>
                                        </div>
                                        <div class="rs_statement_section_table">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <table class="table">
                                                        <tr>
                                                            <th class="text-left">Item</th>
                                                            <th class="text-center">Amount</th>
                                                            <th class="text-center">Order ID</th>
                                                            <th class="text-center">Date</th>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="text-left">20 Responsive Mock-up</p></td>
                                                            <td class="text-center"><span>$12</span></td>
                                                            <td><p class="text-center">040920151146</p></td>
                                                            <td>
                                                                <p>04 Sep 2015</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="text-left">Minimal HTML Template</p></td>
                                                            <td class="text-center"><span>$16</span></td>
                                                            <td><p class="text-center">050920150817</p></td>
                                                            <td>
                                                                <p>05 Sep 2015</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="text-left">120 Premium Template Bundle</p></td>
                                                            <td class="text-center"><span>$55</span></td>
                                                            <td><p class="text-center">060920151146</p></td>
                                                            <td>
                                                                <p>06 Sep 2015</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="text-left">20 Fancy Hero Images</p></td>
                                                            <td class="text-center"><span>$48</span></td>
                                                            <td><p class="text-center">070920150817</p></td>
                                                            <td>
                                                                <p>07 Sep 2015</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="text-left">10 Photoshop Actions</p></td>
                                                            <td class="text-center"><span>$12</span></td>
                                                            <td><p class="text-center">080920151146</p></td>
                                                            <td>
                                                                <p>08 Sep 2015</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="text-left">Vertical WP Theme</p></td>
                                                            <td class="text-center"><span>$48</span></td>
                                                            <td><p class="text-center">090920150817</p></td>
                                                            <td>
                                                                <p>09 Sep 2015</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="text-left">ECommerce App UI Kit</p></td>
                                                            <td class="text-center"><span>$8</span></td>
                                                            <td><p class="text-center">100920151146</p></td>
                                                            <td>
                                                                <p>10 Sep 2015</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="text-left">WorkSpace Element Kit</p></td>
                                                            <td class="text-center"><span>$24</span></td>
                                                            <td><p class="text-center">110920150817</p></td>
                                                            <td>
                                                                <p>11 Sep 2015</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <div class="rs_btn_div rs_toppadder30 rs_bottompadder30">
                                                        <a style="color:#fff" href="#" class="rs_button rs_button_orange">Moar</a>
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
            </div>
        </div>
    </div>
</div>
@endsection
