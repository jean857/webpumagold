@extends('web.layouts.layout')
@section('content')
    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Quienes somos</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Home" href="{{route('web.home.index')}}">Home</a>
                                </span>
                            <span>Quiénes Somos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- page-title end-->
    <!--site-main start-->
    <div class="site-main">

        <!--introduction-section-->
        <section class="ttm-row introduction-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="col-bg-img-ten ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ml_100">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="pl-100 pt-35 pr-20 res-991-pt-0 res-991-pr-0 res-991-pb-50">
                                    <!-- section title -->
                                    @if(isset($aboutUs->description) and !empty($aboutUs->description))
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h2 class="title">Nosotros</h2>
                                            </div>
                                            <div class="title-desc">
                                                {!! $aboutUs->description !!}
                                            </div>
                                        </div>
                                    @endif
                                    @if(isset($aboutUs->mission) and !empty($aboutUs->mission))
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h2 class="title">Misión</h2>
                                            </div>
                                            <div class="title-desc">
                                                {!! $aboutUs->mission !!}
                                            </div>
                                        </div>
                                    @endif
                                    @if(isset($aboutUs->vision) and !empty($aboutUs->vision))
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h2 class="title">Visión</h2>
                                            </div>
                                            <div class="title-desc">
                                                {!! $aboutUs->vision !!}
                                            </div>
                                        </div>
                                    @endif
                                    @if(isset($aboutUs->environment) and !empty($aboutUs->environment))
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h2 class="title">Medio Ambiente</h2>
                                            </div>
                                            <div class="title-desc">
                                                {!! $aboutUs->environment !!}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset($aboutUs->image_source) and !empty($aboutUs->image_source))
                        <div class="col-lg-6 col-md-10">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper text-right ">
                                <img class="img-fluid" src="{{asset('storage/company/'.$aboutUs->image_source)}}" alt="">
                            </div>
                        </div>
                    @endif
                </div><!-- row end -->
            </div>
        </section>

        @include('web.includes.partials.certifications')

    </div><!--site-main end-->


@stop
