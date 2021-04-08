<div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay"
     data-alias="classic4export" data-source="gallery">
    <!-- START REVOLUTION SLIDER -->
    <div id="rev_slider_5_1" class="rev_slider fullwidthabanner" data-version="5.4.8">
        <ul>
            @if($banners_home->count() > 0)
                @foreach($banners_home as $banners_home)
                    <li data-index="rs-6" data-transition="slotzoom-horizontal" data-slotamount="1"
                        data-easein="default"
                        data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off"
                        data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                        data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('storage/banners/'. $banners_home->image_source)}}" alt=""
                             data-bgposition="center center"
                             data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme" id="slide-6-layer-1" data-x="['left','left','left','left']"
                             data-hoffset="['50','40','30','20']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-126','-126','-86','-60']"

                             data-fontsize="['60','60','60','38']"
                             data-lineheight="['70','70','70','50']"
                             data-fontweight="['700','700','700','700']"
                             data-color="#031b4e"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-transform_idle="o:1;"
                             data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                             data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                             data-start="700"

                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-type="text"
                             data-responsive_offset="on" style="z-index:13;font-family:Poppins,sans-serif;">
                            {!! $banners_home->description !!}
                        </div>
                        <!-- LAYER NR. 2 -->
                    </li>
                @endforeach
            @else
                <li data-index="rs-6" data-transition="slotzoom-horizontal" data-slotamount="1" data-easein="default"
                    data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/slides/slider-mainbg-003.jpg" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" id="slide-6-layer-1" data-x="['left','left','left','left']"
                         data-hoffset="['50','40','30','20']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-126','-126','-86','-60']"

                         data-fontsize="['60','60','60','38']"
                         data-lineheight="['70','70','70','50']"
                         data-fontweight="['700','700','700','700']"
                         data-color="#031b4e"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-transform_idle="o:1;"
                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                         data-start="700"

                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         data-type="text"
                         data-responsive_offset="on" style="z-index:13;font-family:Poppins,sans-serif;">Servicios de
                        <br>
                        Analisis Quimicos <br> y Metalúrgicos
                    </div>
                    <!-- LAYER NR. 2 -->
                </li>
            @endif
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>
