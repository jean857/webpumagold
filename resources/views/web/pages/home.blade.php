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
        @include('web.includes.partials.certifications')
    </div><!--site-main end-->

@stop
