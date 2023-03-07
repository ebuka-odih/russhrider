@extends('pages.layout.app')
@section('content')

    <!--================================
    START SLIDER AREA
=================================-->
    <section class="slider_area">

        <!-- slider starts  -->
        <div class="sliders">

            <!-- hero slides -->
            <div class="hero_sliders">

                <div class="hero_sliders camera_wrap" style="display: block; height: 885px;"><div class="camera_fakehover"><div class="camera_src camerastarted">

                            <!-- single hero_slide -->
                            <div class="hero_slide" data-src="images/home2slide1.jpg">

                            </div><!-- single hero_slide -->

                            <!-- single hero_slide -->
                            <div class="hero_slide" data-src="images/slider_1.jpg">

                            </div><!-- single hero_slide -->

                        </div><div class="camera_target"><div class="cameraCont"><div class="cameraSlide cameraSlide_0" style="visibility: visible; display: none; z-index: 1; margin-left: 0px; margin-top: 0px;"><img src="images/home2slide1.jpg?1678190822197" class="imgLoaded grow" style="visibility: visible; height: 885px; margin-left: -26.7531px; margin-right: -26.7531px; margin-top: 0px; position: absolute; width: 1958.51px;" data-alignment="" data-portrait="" width="1600" height="723"><div class="camerarelative" style="width: 1905px; height: 885px;"></div></div><div class="cameraSlide cameraSlide_1 cameracurrent" style="display: block; z-index: 999; margin-left: 0px; margin-top: 0px;"><img src="images/slider_1.jpg?1678190835090" class="imgLoaded grow" style="visibility: visible; height: 885px; margin-left: -26.7531px; margin-right: -26.7531px; margin-top: 0px; position: absolute; width: 1958.51px;" data-alignment="" data-portrait="" width="1600" height="723"><div class="camerarelative" style="width: 1905px; height: 885px;"></div></div><div class="cameraSlide cameraSlide_2 cameranext" style="z-index: 1; display: none;"><div class="camerarelative" style="width: 1905px; height: 885px;"></div></div></div></div><div class="camera_overlayer"></div><div class="camera_target_content"><div class="cameraContents"><div class="cameraContent" style="display: none;"><div class="captions_wrapper right">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <div class="single_slider_wrapper">
                                                        <span class="small_title fadeInRightShort animated">Benchmark Delivery Services</span><br>
                                                        <h1 class="big_title fadeInRightShort animated">Benchmark Delivery Services is world wide transport service</h1>
                                                        <div class="hero_btn">
                                                            <a href="services.html" class="trust_btn" data-hover="see more">see more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class="cameraContent cameracurrent" style="display: block;"><div class="captions_wrapper left">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="single_slider_wrapper">
                                                        <span class="small_title fadeInLeftShort animated">Benchmark Delivery Services</span><br>
                                                        <h1 class="big_title fadeInLeftShort animated">Benchmark Delivery Services is world wide transport service</h1>
                                                        <div class="hero_btn">
                                                            <a href="services.html" class="trust_btn">see more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div></div></div><div class="camera_bar" style="display: none; top: auto; height: 7px;"><span class="camera_bar_cont" style="opacity: 0.8; position: absolute; inset: 0px; background-color: rgb(34, 34, 34);"><span id="pie_0" style="opacity: 0.8; position: absolute; background-color: rgb(238, 238, 238); inset: 2px 0px; display: block;"></span></span></div><div class="camera_prev" style="opacity: 0;"><span></span></div><div class="camera_next" style="opacity: 0;"><span></span></div></div><div class="camera_loader" style="display: none; visibility: visible;"></div></div>

                <!-- single hero_slide -->
                <div class="hero_slide" data-src="{{ asset('images/home2slide1.jpg') }}">
                    <div class="captions_wrapper right">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <div class="single_slider_wrapper">
                                        <span class="small_title fadeInRightShort animated">Benchmark Delivery Services</span><br>
                                        <h1 class="big_title fadeInRightShort animated">Benchmark Delivery Services is world wide transport service</h1>
                                        <div class="hero_btn">
                                            <a href="services.html" class="trust_btn" data-hover="see more">see more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- single hero_slide -->

                <!-- single hero_slide -->
                <div class="hero_slide" data-src="{{ asset('images/slider_1.jpg') }}">
                    <div class="captions_wrapper left">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="single_slider_wrapper">
                                        <span class="small_title fadeInLeftShort animated">Benchmark Delivery Services</span><br>
                                        <h1 class="big_title fadeInLeftShort animated">Benchmark Delivery Services is world wide transport service</h1>
                                        <div class="hero_btn">
                                            <a href="services.html" class="trust_btn">see more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- single hero_slide -->

            </div><!-- ./hero slides  -->
        </div><!-- /.sliders ends -->

        <!-- menu starts -->
        @include('pages.layout.menu')
        <!-- menu ends -->
    </section>
    <!--================================
        END SLIDER AREA
    =================================-->


    <!--================================
        START SERVICE AREA STYLE2
    =================================-->
    <section class="service2 clearfix reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
        <div class="service_wrapper clearfix">
            <div class="single_service">
                <div class="service_img">
                    <img class="svg" src="images/service_icon1.svg" alt="service icons">
                </div>
                <div class="service_content_wrapper">
                    <div class="service_title">
                        <h4>Fast sea delivery</h4>
                    </div>
                    <p>Benchmark Delivery Services is a flexible and scalable sea freight solutions cover your specific needs. Our affiliation with leading carriers is the key to our cost-effective services.</p>
                </div>
            </div>

            <div class="single_service">
                <div class="service_img">
                    <img class="svg" src="images/service_icon2.svg" alt="service icons">
                </div>
                <div class="service_content_wrapper">
                    <div class="service_title">
                        <h4>Fast road delivery</h4>
                    </div>
                    <p>Benchmark Delivery Services Transport offers an efficient integrated transport system with multiple types of trucks available to support your trucking and distribution needs. </p>
                </div>
            </div>

            <div class="single_service">
                <div class="service_img">
                    <img class="svg" src="images/service_icon3.svg" alt="service icons">
                </div>
                <div class="service_content_wrapper">
                    <div class="service_title">
                        <h4>Fast air shipping</h4>
                    </div>
                    <p>Benchmark Delivery Services is an airfreight forwarding specialists offering a comprehensive range of international air cargo solutions with unbeatable levels of customer service. </p>
                </div>
            </div>

            <div class="single_service">
                <div class="service_img">
                    <img class="svg" src="images/service_icon4.svg" alt="service icons">
                </div>
                <div class="service_content_wrapper">
                    <div class="service_title">
                        <h4>online support</h4>
                    </div>
                    <p>Benchmark Delivery Services offers a 24/7 online support services to handle all your trucking services to suit your needs. </p>
                </div>
            </div>

            <div class="single_service hidden-sm">
                <div class="service_img">
                    <img class="svg" src="images/service_icon5.svg" alt="service icons">
                </div>
                <div class="service_content_wrapper">
                    <div class="service_title">
                        <h4>best security system</h4>
                    </div>
                    <p>Benchmark Delivery Services Engages best security service model to ensure prompt, accurate delivery of your goods around the world </p>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        START SERVICE AREA STYLE2
    =================================-->


    <!--================================
        START ABOUT US AREA
    =================================-->
    <section class="mission_vision section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
        <!-- mission start -->
        <div class="mission">
            <!-- container starts -->
            <div class="container">

                <!-- row starts -->
                <div class="row">
                    <!-- /.col-md-6 ends -->
                    <div class="col-md-6 col-md-offset-6 col-xs-6 xxs_offset-0 xxs_fullwidth col-xs-offset-6">
                        <!-- section_title starts -->
                        <div class="kmas_area">
                            <div class="section_title">
                                <div class="sub_title">
                                    <p>Do You Know ?</p>
                                </div>
                                <div class="title"><h2>WHO WE ARE ?</h2></div>
                            </div><!-- section_title starts -->

                            <div class="about_us_content">
                                <div class="who_we_text">
                                    <p style="text-align:justify;">Benchmark Delivery Services offers a host of logistic management services and supply chain solutions.
                                        We provide innovative solutions with the best people, processes, and technology. With over
                                        60 years of providing world class service to their customers on the asset side, a need to
                                        provide a one stop shop for a” true customer service logistic solution” was introduced. By
                                        adding this dimension to an already dynamic and customer centric asset based provider, we
                                        feel we bring a total solution.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-6 ends -->
                </div><!-- /.row ends -->
            </div><!-- /.container ends -->

            <div class="mission_img"></div>
        </div><!-- /.mission end -->

        <!-- start vision -->
        <div class="vision">
            <!-- container -->
            <div class="container">
                <!-- row starts -->
                <div class="row">
                    <!-- /.col-md-6 ends -->
                    <div class="col-md-6 col-xs-6 xxs_offset-0 xxs_fullwidth">
                        <!-- section_title starts -->
                        <div class="section_title">
                            <div class="sub_title">
                                <p>Our Vission</p>
                            </div>
                            <div class="title"><h2>our vission</h2></div>
                        </div><!-- section_title starts -->

                        <div class="about_us_content">
                            <div class="who_we_text">
                                <p style="text-align:justify;">The following principles reflect our values, define our culture, and guide
                                    our actions: lead with humility and respect. Earn trust through authenticity
                                    and accountability. Cultivate mutually beneficial partnerships with customers,
                                    associates and suppliers. Practice servant leadership and demand the highest
                                    standards.</p>

                            </div>
                        </div>
                    </div><!-- /.col-md-6 ends -->
                </div><!-- /.row ends -->
            </div><!-- /.container -->

            <div class="vision_img"></div>
        </div><!-- /.vision end-->
    </section>
    <!--================================
        END ABOUT US AREA
    =================================-->


@endsection
