@extends('web.layouts.layout')
@section('content')
    @include('web.includes.partials.slider')
    <div class="site-main">
        <!--features-section-->
        @if($highlights->count() > 0)
            <section class="ttm-row features-section clearfix">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        @php
                            if($highlights->count() == 1){
                                    $col_md = 'col-md-12';
                            }
                            if($highlights->count() == 2){
                                    $col_md = 'col-md-6';
                            }
                            if($highlights->count() >= 3){
                                    $col_md = 'col-md-4';
                            }
                        @endphp
                        @foreach($highlights as $key => $highlight)
                            @php
                                $class = '';
                                    if($key == 1){
                                        $class = 'border-left border-right';
                                    }
                            @endphp
                            <div class="{{$col_md}} {{ $class }}">
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style4">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="{{$highlight->icon}}" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>{{$highlight->title}}</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>{{$highlight->description}}</p>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox end-->
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    <!--features-section end-->

        <!--services-section-->
        <section class="ttm-row services-section bg-img3 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-md-8 m-auto">
                        <!-- section-title -->
                        <div class="section-title with-sep title-style-center_text">
                            <div class="title-header">
                                <h5>NUESTRAS ESPECIALIDADES</h5>
                                <h2 class="title">Explore nuestros principales servicios</h2>
                            </div>
                            <div class="title-desc">Nuestro excelente equipo está listo para ser parte de su equipo para
                                trabajar en las diferentes áreas
                            </div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row slick_slider"
                     data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows":false, "autoplay":true, "centerMode":false, "centerPadding":0, "infinite":true, "initialSlide":0, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}} , {"breakpoint":525,"settings":{"slidesToShow": 1}}]}'>
                    @foreach($services as $service)
                        <div class="ttm-box-col-wrapper col-lg-4">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-services">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{route('web.service.index',$service->slug)}}">
                                        @if(!empty($service->image_source))
                                            <img class="img-fluid"
                                                 src="{{url('storage/services/'. $service->image_source)}}" alt="image">
                                        @else
                                            <img class="img-fluid" src="{{url('images/services-01.jpg')}}" alt="image">
                                        @endif
                                    </a>
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-content">
                                    <div class="fea_con_right">
                                        <div class="featured-title">
                                            <h5><a href="{{route('web.service.index',$service->slug)}}">{{$service->name}}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox -->
                        </div>
                    @endforeach
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-50 res-991-mt-30 text-center">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-left ttm-btn-color-dark"
                               href="{{route('web.contact-us.index')}}"><i class="flaticon-email"></i>Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services-section end-->

        @include('web.includes.partials.certifications')
    </div><!--site-main end-->

@stop
