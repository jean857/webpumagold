<div class="third-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 widget-area">
                <div class="widget widget_text clearfix">
                    <div class="footer-logo">
                        <img id="footer-logo-img" class="img-center" src="{{asset('images/footer-logo.png')}}" alt="">
                    </div>
                    <div class="textwidget widget-text">
                        <p class="pb-10 pr-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                <div class="widget widget_nav_menu clearfix">
                    <h3 class="widget-title">Menú</h3>
                    <ul id="menu-footer-quick-links">
                        <li><a href="about-us.html">Quienes somos</a></li>
                        <li><a href="services.html">Servicios</a></li>
                        <li><a href="contact-us.html">Contáctanos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                <div class="widget style2 widget-out-link clearfix">
                    <h3 class="widget-title">Contáctanos</h3>
                    <ul class="widget-post ttm-recent-post-list pr-5">
                        <p><i class="flaticon-placeholder"></i>
                            @isset($place->address)
                                {{$place->address}}
                            @endisset
                        </p>
                        <p><i class="fa fa-phone"></i>
                            @isset($place->phone_number)
                                {{$place->phone_number}}
                            @endisset
                        </p>
                        <p><i class="flaticon-email"></i>
                            @isset($place->email)
                                {{$place->email}}
                            @endisset
                        </p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bottom-footer-text">
    <div class="container">
        <div class="row copyright">
            <div class="col-sm-9">
                <span>Copyright © 2021 Puma Gold Perú</span>
            </div>
            <div class="col-sm-3">
                <div class="d-flex flex-row align-items-center justify-content-end social-icons">
                    <ul class="social-icons list-inline">
                        @isset($place->facebook)
                            <li class="social-facebook">
                                <a class="tooltip-top" target="_blank" href="{{$place->facebook}}"
                                   data-tooltip="Facebook"><i
                                        class="ti ti-facebook"></i></a>
                            </li>
                        @endisset
                        @isset($place->twitter)
                            <li class="social-twitter"><a class="tooltip-top" target="_blank" href="{{$place->twitter}}"
                                                          data-tooltip="Linkedin"><i class="ti ti-linkedin"></i></a>
                            </li>
                        @endisset
                        @isset($place->instagram)
                            <li class="social-instagram"><a class="tooltip-top" target="_blank"
                                                            href="{{$place->instagram}}"
                                                            data-tooltip="Instagram"><i class="ti ti-instagram"></i></a>
                            </li>
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
