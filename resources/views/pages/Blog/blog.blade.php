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
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Breadcrumb end-->
            <div class="rs_graybg rs_toppadder100 rs_bottompadder50">
                <div class="container">
                    <div class="row">
                        @foreach ($posts as $post)                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rs_bottompadder60">
                            <div class="rs_blog_wrapper">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-push-6 col-md-push-6 col-sm-push-0 col-xs-push-0">
                                    <div class="row">
                                        <div class="rs_blog_content_img">
                                            <img src="{{ Voyager::image($post->image) }}" alt="" class="img-responsive"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-pull-6 col-md-pull-6 col-sm-pull-0 col-xs-pull-0">
                                    <div class="row">
                                        <div class="rs_blog_content">
                                            <span>{{ $post->created_at->diffForHumans()}}</span>
                                            <h4><a href="{{url('/blog/'.$post->slug)}}">{{ $post->title }}</a></h4>
                                            <p>{{ $post->excerpt }}</p>
                                            <div class="rs_btn_div">
                                                <a href="{{url('/blog/'.$post->slug)}}" class="rs_button rs_button_orange pull-right">Citeste</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        @endforeach
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rs_bottompadder50 nopade">
                            <div class="rs_more_circle">
                                <div class="rs_more_bg">
                                    <a href="#">
                                        <span><i class="fa fa-ellipsis-h"></i></span>
                                        <p>more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.newsletter')
    
@endsection