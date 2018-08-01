@extends('layouts.app')
@section('content')
    <div class="rs_transprantbg">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="rs_error_section rs_toppadder90 rs_bottompadder90">
                    <img src="images/error_Icon.png" alt="" class="img-responsive">
                    <div class="re_error_info rs_toppadder20">
                        <h1>404</h1>
                        <span class="rs_toppadder20">Sorry, but this page</span>
                        <span>doesn’t exist</span>
                        <p class="rs_toppadder60">Maybe you would like to go back to our</p>
                        <p><a href="{{url('/')}}">HomePage</a> or  <a href="contact.html">Contact us</a>?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection