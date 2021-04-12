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
