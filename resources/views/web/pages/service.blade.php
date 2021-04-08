@extends('web.layouts.layout')
@section('content')
    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Nuestros servicios</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Home" href="{{route('web.home.index')}}">Home</a>
                                </span>
                            <span>Servicios</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- page-title end-->
    <!--site-main start-->
    <div class="site-main">

        <div class="ttm-row sidebar ttm-sidebar-right clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4 widget-area sidebar-right">
                        @include('web.includes.services.nav-menu-services')
                    </div>
                    <div class="col-lg-8 content-area">
                        <div class="ttm-service-single-content-area">
                            @if(!empty($service->image_source))
                                <div class="ttm-featured-wrapper mb-40 res-991-mb-20">
                                    <img class="img-fluid"
                                         src="{{url('storage/services/'. $service->image_source)}}" alt="">
                                </div>
                            @endif
                            <div class="ttm-service-description">
                                <h4>{{$service->name}}</h4>
                                <div class="mb-35">
                                    <div>
                                        {!!$service->description!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <div class="ttm-row sidebar ttm-sidebar-right clearfix">
            <div class="container">
                <div class="row slick_slider slick-dots-style1">
                    <aside class="widget widget-contact p-0">
                        <div class="ttm-bgcolor-grey ttm-bg pt-25 pr-30 pb-30 pl-30 res-991-mt-30">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h2 class="title">Contáctenos</h2>
                                    </div>
                                </div><!-- section title end -->
                                <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post"
                                      action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="your-name" type="text" value=""
                                                                                placeholder="Tu Nombre"
                                                                                required="required"></span>
                                            </label>
                                            <label>
                                                <span class="text-input"><input name="email" type="email" value=""
                                                                                placeholder="Email" required="required"></span>
                                            </label>
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value=""
                                                                                placeholder="Telefono"
                                                                                required="required"></span>
                                            </label>
                                            <label>
                                                <span class="text-input"><textarea name="message" rows="4" cols="40"
                                                                                   placeholder="Mensaje"
                                                                                   required="required"></textarea></span>
                                            </label>
                                            <label>
                                                <button
                                                    class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor"
                                                    type="submit">Enviar
                                                </button>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>

        </div>


    </div><!--site-main end-->


@stop
