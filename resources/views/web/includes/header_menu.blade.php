<header id="masthead" class="header ttm-header-style-01">
    <!-- top_bar -->
    <div class="top_bar ttm-bgcolor-skincolor clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 d-flex flex-row align-items-center">
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="fa fa-phone"></i></div>
                        @isset($place->phone_number)
                            {{$place->phone_number}}
                        @endisset
                    </div>
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="fa fa-envelope-o"></i></div>
                        <a href="mailto:administración@pumagoldperu.com"> @isset($place->phone_number)
                                {{$place->email}}
                            @endisset
                        </a>
                    </div>
                    <div class="top_bar_contact_item ml-auto">
                        <div class="top_bar_icon"><i class="fa fa-clock-o"></i></div>
                        @isset($place->phone_number)
                            Horario de trabajo - {{$place->business_hours}}
                        @endisset

                    </div>
                    <div class="top_bar_contact_item">
                        <div class="top_bar_social">
                            <ul class="social-icons">
                                @isset($place->facebook)
                                    <li>
                                        <a class="tooltip-bottom" target="_blank" href="{{$place->facebook}}"
                                           data-tooltip="Facebook"
                                           tabindex="-1"><i class="fa fa-facebook"></i></a>
                                    </li>
                                @endisset
                                @isset($place->twitter)
                                    <li><a class="tooltip-bottom" target="_blank" href="{{$place->twitter}}"
                                           data-tooltip="Twitter"
                                           tabindex="-1"><i class="fa fa-twitter"></i></a>
                                    </li>
                                @endisset
                                @isset($place->instagram)
                                    <li><a class="tooltip-bottom" target="_blank" href="{{$place->instagram}}"
                                           data-tooltip="Instagram"
                                           tabindex="-1"><i class="fa fa-instagram"></i></a>
                                    </li>
                                @endisset

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- top_bar end-->
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row">
                            <!-- site-branding -->
                            <div class="site-branding mr-auto">
                                <a class="home-link" href="home.html" title="Puma Gold Perú" rel="home">
                                    <img id="logo-img" class="img-center" src="images/logo-img.png" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                        <span class="menubar-box">
                                            <span class="menubar-inner"></span>
                                        </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item active">
                                        <a href="home.html">Home</a>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="about-us.html">Quienes somos</a>
                                    </li>
                                    <li class="mega-menu-item megamenu-fw">
                                        <a href="#" class="mega-menu-link">Servicios</a>
                                        <ul class="mega-submenu megamenu-content" role="menu">
                                            <li>
                                                <div class="row">

                                                    @php
                                                        if(count($category_services) === 1){
                                                                $col_md = 'col-md-12';
                                                        }
                                                        if(count($category_services) === 2){
                                                                $col_md = 'col-md-6';
                                                        }
                                                        if(count($category_services) > 3){
                                                                $col_md = 'col-md-4';
                                                        }

                                                    @endphp
                                                    @foreach($category_services as $category)
                                                        <div class="col-menu {{$col_md}}">
                                                            <h6 class="title">{{$category->name}}</h6>
                                                            <div class="content">
                                                                <ul class="menu-col">
                                                                    @foreach($category->services as $service)
                                                                        <li>
                                                                            <a href="services_1.html">{{$service->name}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="contact-us.html">Contáctanos</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header><!--header end-->
