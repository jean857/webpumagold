@extends('web.layouts.layout')
@section('content')
    <div class="site-main">
        <!--google_map-->
        @if(isset($place->map_url) and !empty($place->map_url))
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <iframe
                        src="{{$place->map_url}}"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        @else
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1320.513097231079!2d-76.97884036773645!3d-12.157487115716691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b844f824faf9%3A0x40fd9d48e8df2914!2sAv.%20las%20Vegas%2C%20San%20Juan%20de%20Miraflores%2015801!5e0!3m2!1ses-419!2spe!4v1618108733036!5m2!1ses-419!2spe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        @endif
        <section class="ttm-row cta-info-section ttm-bgcolor-grey bg-layer bg-layer-equal-height clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-sm-8">
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor z-index-2 spacing-5">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <div class="pb-15">
                                    <h4>Conéctate con nosotros</h4>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-sm">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-desc">
                                            <p>CA. Las Vegas MZ A LT 19 A Urb. Zona Industrial
                                                San Juan de Miraflores Peru 051 Lima 511</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="sep_holder_box width-100 mt-20 mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-sm">
                                            <i class="flaticon-call"></i>
                                        </div>
                                    </div>
                                    @isset($place->phone_number)
                                        <div class="featured-content">
                                            <div class="featured-desc">
                                                <p> {{$place->phone_number}}</p>
                                            </div>
                                        </div>
                                    @endisset
                                </div><!-- featured-icon-box end-->
                                <div class="sep_holder_box width-100 mt-20 mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-sm">
                                            <i class="flaticon-email"></i>
                                        </div>
                                    </div>
                                    @isset($place->phone_number)

                                        <div class="featured-content">
                                            <div class="featured-desc">
                                                <a href="mailto:{{$place->email}}">{{$place->email}}</a><br>
                                            </div>
                                        </div>
                                    @endisset
                                </div><!-- featured-icon-box end-->
                                <ul class="social-icons circle social-hover mt-30">
                                    @isset($place->facebook)
                                        <li class="social-facebook">
                                            <a class="tooltip-top" target="_blank" href="{{$place->facebook}}"
                                               data-tooltip="Facebook"><i class="fa fa-facebook"
                                                                          aria-hidden="true"></i></a>
                                        </li>
                                    @endif
                                    @isset($place->twitter)
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank"
                                                                      href="{{$place->twitter}}"
                                                                      data-tooltip="Twitter"><i class="fa fa-twitter"
                                                                                                aria-hidden="true"></i></a>
                                        </li>
                                    @endif
                                    @isset($place->instagram)
                                        <li class="social-gplus"><a class=" tooltip-top" target="_blank"
                                                                    href="{{$place->instagram}}"
                                                                    data-tooltip="Instagram"><i class="fa fa-instagram"
                                                                                                aria-hidden="true"></i></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey z-index-1">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- testimonial-box -->
                                <div class="pt-45 pl-50 pb-50 pr-50 res-991-pl-15 res-991-pr-15 res-991-pt-30">
                                    <!-- section-title -->
                                    <div class="section-title">
                                        <div class="title-header">
                                            <h5>CONTÁCTENOS</h5>
                                            <h2 class="title">No dude en preguntar Envíe su mensaje.</h2>
                                        </div>
                                    </div><!-- section-title end -->
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    <form id="ttm-contactform-2" class="ttm-contactform-2 wrap-form clearfix"
                                          method="post" action="{{route('web.contact-us.send')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>
                                                    <span class="text-input"><input name="name" type="text" value=""
                                                                                    placeholder="Nombre"
                                                                                    required="required"></span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>
                                                    <span class="text-input"><input name="email" type="email" value=""
                                                                                    placeholder="Email"
                                                                                    required="required"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>
                                                    <span class="text-input"><input name="phone" type="text" value=""
                                                                                    placeholder="Celular ó telefono"
                                                                                    required="required"></span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>
                                                    <span class="text-input"><input name="business" type="text" value=""
                                                                                    placeholder="Empresa"
                                                                                    required="required"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label>
                                            <span class="text-input"><textarea name="message" rows="3"
                                                                               placeholder="Consulta"
                                                                               required="required"></textarea></span>
                                        </label>
                                        <button
                                            class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor"
                                            type="submit">Enviar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-info-section end -->

    </div>
@stop
