<!--Loader Start -->
<div class="rs_preloaded">
    <div class="rs_preloader">
        <div class="lines">
        </div>
        <div class="loading-text">LOADING...</div>
    </div>
</div>
<!--Loader End -->
<div class="menu-wrap">
    <div class="rs_menu">
        <div class="rs_menu_inner_section">
            <div class="rs_menu_pic">
                <img src="http://placehold.it/289X193" class="img-responsive" alt="">
                <div class="rs_menu_pic_overlay">
                    <div class="rs_menu_inner_pic">
                        <img src="{{asset('images/menulogo.png')}}" alt="">
                    </div>
                </div>

            </div>
            <div class="rs_main_menu">
                <ul>
                    <li>
                        <a href="{{url('/toate-produsele')}}">
                            <i class="fas fa-shopping-basket"></i> Produse</a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="#">--}}
                            {{--<i class="fas fa-user-astronaut"></i> Artisti</a>--}}
                    {{--</li>--}}
                    <li>
                        <a href="#">
                            <i class="fas fa-user-ninja"></i> Despre Noi</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-question-circle"></i> FAQ</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-pencil-alt"></i> Blog</a>
                    </li>
                    <li>
                        <a href="{{url('/contact')}}">
                            <i class="fas fa-envelope-open"></i> Contact</a>
                    </li>
                    <?php
                        if(\Illuminate\Support\Facades\Auth::check()){
                            echo('<li><a href="home"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>');
                        }
                    ?>
                    {{--<li><a href="{{url('/home')}}"><i class="fas fa-envelope-open"></i> Dashboard</a></li>--}}
                </ul>
            </div>
            <div class="rs_social">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-google-plus-square"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <button class="close-button" id="close-button">Close Menu</button>
    <div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
            <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z" />
        </svg>
    </div>
</div>
<div class="rs_topheader">
    <div class="container-fluid">
        <div class="row">
            <div class="rs_topheader_left">
                <div class="rs_menubtn">
                        <span class="rs_bars" id="open-button">
                            <i class="fa fa-bars"></i>
                        </span>
                </div>

            </div>
            <div class="rs_topheader_center">
                <a href="{{url('/')}}">
                    <img src="{{asset('images/small_logo.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>