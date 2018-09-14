@extends('layouts.app')
@section('content')
    <!--Breadcrumb start-->
	<div class="rs_pagetitle rs_toppadder40 rs_bottompadder40">
            <div class="rs_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="page_title">
                                <h3 class="rs_bottompadder20">Blog</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="breadcrumb">
                                <li><a href="{{url('/')}}">home</a></li>
                                <li><a href="{{url('/blog')}}">blog</a></li>
                                <li class="active">{{$post->title}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Breadcrumb end-->
            <div class="rs_graybg rs_toppadder100 rs_bottompadder100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <div class="rs_single_blog_section">
                                <div class="rs_single_blog_wrapper rs_bottompadder40">
                                    <h4>{{$post->title}}</h4>
                                    <ul>
                                        <li>{{$post->created_at->diffForHumans()}}</li>
                                        <li>TODO: Categ</li>
                                        <li>fuck comms</li>
                                        <li>Scris de: Otherskins</li>
                                    </ul>
                                    <img src="{{ Voyager::image($post->image)}}" alt="" class="img-responsive">
                                </div>
                                <div class="rs_single_blog_content rs_bottompadder50">
                                   {!!$post->body!!}
                                </div>
                                <div class="rs_single_blog_share rs_bottompadder60">
                                    <ul>
                                        <li>share :</li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <div class="rs_sidebar_wrapper_second">
                                
                                    <aside class="widget widget_search">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Cauta">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                            </span> 
                                        </div>
                                    </aside>
                                
                                    <aside class="widget rs_widget_categories">
                                        <h4 class="widget-title">Categorii</h4>
                                        <ul>
                                            @foreach ($categories as $cat)
                                                
                                            <li><a href="#">{{$cat->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </aside>
                                    
                                    <aside class="widget rs_widget_tag_cloud">
                                        <h4 class="widget-title">Tags</h4>
                                        <div class="rs_tag_cloud_box">
                                            <a href="#" class="ed_btn ed_orange">Design</a>
                                            <a href="#" class="ed_btn ed_orange">Jquery</a>
                                            <a href="#" class="ed_btn ed_orange">Material</a>
                                            <a href="#" class="ed_btn ed_orange">WordPress</a>
                                            <a href="#" class="ed_btn ed_orange">Joomla</a>
                                            <a href="#" class="ed_btn ed_orange">Wireframe</a>
                                            <a href="#" class="ed_btn ed_orange">Plus</a>
                                            <a href="#" class="ed_btn ed_orange">App</a>
                                            <a href="#" class="ed_btn ed_orange">Development</a>
                                        </div>
                                    </aside>
                                    
                                    <aside class="widget rs_widget_post">
                                        <h4 class="widget-title">Articole Recente</h4>
                                        <ul>
                                            @foreach ($latest as $late)                                
                                            <li>
                                                <div class="rs_widget_post_img"><img id="thumb" src="{{Voyager::image($late->image)}}" alt="" class="img-responsive"></div>
                                                <div class="rs_widget_post_data">
                                                    <p><a href="{{$late->slug}}">{{$late->title}}</a></p>
                                                    <span>Oct 27, 2015</span>
                                                </div>
                                            </li>     
                                            @endforeach                                       
                                        </ul>
                                    </aside>                                  
                                    
                                    
                                    <aside class="widget rs_widget_advertisement">
                                        <h4 class="widget-title">Ne Gasiti pe:</h4>
                                        <img src="http://placehold.it/263X253" alt="" class="img-responsive">
                                        <img src="http://placehold.it/263X253" alt="" class="img-responsive">
                                    </aside>
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