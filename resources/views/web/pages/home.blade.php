@extends('web.layouts.layout')
@section('content')
    @include('web.includes.partials.slider')
    <div class="site-main">
        <!--features-section-->
        <section class="ttm-row features-section clearfix">
            <div class="container-fluid">
                <!-- row -->
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style4">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ti ti-timer"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Atención 24/7</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Nuestra mesa de ayuda está siempre abierta en línea, para toda
                                        la información y consultas sometidas.</p>
                                </div>
                                <!--                                <a class="ttm-btn ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor btn-inline"-->
                                <!--                                   href="#">Get A Free Quote<i class="ti ti-angle-double-right"></i></a>-->
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 border-left border-right">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style4">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ti ti-plug"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Nuestras Instalaciones</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Somos uno de los mejores laboratorios con soluciones de herramientas de alta
                                        tecnología y mecanismo de experiencia.</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style4">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ti ti-split-h"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Nuestros servicios</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Nuestra área de servicio es amplia. Somos ansiosamente los mejores proveedores de
                                        servicios para los análisis químicos y metalurgicos</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--features-section end-->


        <!--about-section-->
        <section class="ttm-row about-section bg-img11 ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-xs-12 ml-auto">
                        <div class="ml_100 res-991-ml-0">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h5>Sobre nosotros</h5>
                                    <h2 class="title">Empleamos la última tecnología en los analisis quimicos</h2>
                                </div>
                                <div class="title-desc">Contamos con las certificaciones y Estándares de calidad
                                    necesarios para la industria minera
                                </div>
                            </div><!-- section title end -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 icon-align-before-heading">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon-lab-1"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Los mejores<br>Laboratorios</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Equipado y capacitados para trabajar</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 icon-align-before-heading">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon-dna"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5> Resultados <br>confiables</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Contamos con las certificaciones y estándares de calidad</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                            <!--                            <div class="row">-->
                            <!--                                <div class="col-lg-12">-->
                            <!--                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-skincolor mt-15"-->
                            <!--                                       href="#">What We Do!</a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
        </section>
        <!--about-section end-->
        @if($certifications->count() > 0)
            <section class="ttm-row blog-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-8 m-auto">
                            <!-- section-title -->
                            <div class="section-title with-sep title-style-center_text">
                                <div class="title-header">
                                    <h2 class="title">Nuestras Certificaciones</h2>
                                </div>
                            </div><!-- section-title end -->
                        </div>
                    </div><!-- row end -->
                    <!-- slick_slider -->
                    <div class="row slick_slider"
                         data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows":false, "autoplay":true, "centerMode":false, "centerPadding":0, "infinite":true, "initialSlide":0, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}} , {"breakpoint":525,"settings":{"slidesToShow": 1}}]}'>

                        @foreach($certifications as $certification)
                            <div class="ttm-box-col-wrapper col-lg-12">
                                <!-- featured-imagebox-post -->
                                <div class="featured-imagebox featured-imagebox-post">
                                    <div class="ttm-post-thumbnail featured-thumbnail">
                                        <img class="img-fluid" width="220px"
                                             style="margin-left: auto;margin-right: auto;"
                                             src="{{asset('storage/certifications/'. $certification['image_source'])}}"
                                             alt="image">
                                    </div>
                                    <div class="featured-content featured-content-post text-center">
                                        <div class="post-title featured-title">
                                            <h5>
                                                {{$certification['name']}}
                                            </h5>
                                        </div>
                                        <div class="post-desc featured-desc">
                                            <p>{{$certification['description']}}</p>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-post end-->
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

    </div><!--site-main end-->

@stop
