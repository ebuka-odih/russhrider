@extends('pages.layout.app')
@section('content')


<!--================================
        START SLIDER AREA
    =================================-->
<section class="breadcrumb">

    <div class="breadcrumb_content">
        <!-- container starts -->
        <div class="container">
            <!-- row starts -->
            <div class="row">
                <!-- col-md-12 starts -->
                <div class="col-md-12">
                    <div class="breadcrumb_title_wrapper">
                        <div class="page_title">
                            <h1>our services</h1>
                        </div>
                        <ul class="bread_crumb">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li class="bread_active">Our Services</li>
                        </ul>
                    </div>
                </div><!-- col-md-12 ends -->
            </div>
            <!-- /.row ends -->
        </div><!-- /.container ends -->
    </div>

    <!-- menu starts -->
    @include('pages.layout.menu')
    <!-- menu ends -->
</section>
<!--================================
    END SLIDER AREA
=================================-->


<!--================================
    START ABOUT US AREA
=================================-->
<section class="services_section section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
    <!-- container starts -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-6 xxs_fullwidth">
                <div class="single_service_wrapper">
                    <div class="service_img">
                        <img src="{{ asset('images/service1.jpg') }}" alt="service-img">
                    </div>
                    <div class="service_content">
                        <div class="service_title">
                            <a href="single_service.html"><h3>ground shipping</h3></a>
                        </div>
                        <div class="service_text">
                            <p style="text-align: justify;">RusshRider Delivery Services Transport offers an efficient integrated transport system with
                                multiple types of trucks available to support your trucking and distribution needs. </p>
                        </div>
                        <div class="read_more">
                            <a href="single_service.html">read more <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 xxs_fullwidth">
                <div class="single_service_wrapper">
                    <div class="service_img">
                        <img src="{{ asset('images/service2.jpg') }}" alt="service-img">
                    </div>
                    <div class="service_content">
                        <div class="service_title">
                            <a href="single_service1.html"><h3>RusshRider Delivery Services</h3></a>
                        </div>
                        <div class="service_text">
                            <p style="text-align:justify;">Through our our services, we provide expedited Air Freight delivery,
                                Air Cargo and Excess Baggage delivery.</p>
                        </div>
                        <div class="read_more">
                            <a href="single_service1.html">read more <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 xxs_fullwidth">
                <div class="single_service_wrapper">
                    <div class="service_img">
                        <img src="{{ asset('images/service3.jpg') }}" alt="service-img">
                    </div>
                    <div class="service_content">
                        <div class="service_title">
                            <a href="single_service2.html"><h3>Cargo Handling</h3></a>
                        </div>
                        <div class="service_text">
                            <p style="text-align: justify;">Unique shipments demand specific solutions especially for large projects that require the
                                coordinated movement of oversized, overweight and high-value cargo.</p>
                        </div>
                        <div class="read_more">
                            <a href="single_service2.html">read more <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 xxs_fullwidth">
                <div class="single_service_wrapper">
                    <div class="service_img">
                        <img src="{{ asset('images/service4.jpg') }}" alt="service-img">
                    </div>
                    <div class="service_content">
                        <div class="service_title">
                            <a href="single_service3.html"><h3>Giant ship delivery</h3></a>
                        </div>
                        <div class="service_text">
                            <p style="text-align:justify;">RusshRider Delivery Services flexible and scalable sea freight solutions cover
                                your specific needs. Our affiliation with leading carriers is the key to our cost-effective services.</p>
                        </div>
                        <div class="read_more">
                            <a href="single_service3.html">read more <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 xxs_fullwidth">
                <div class="single_service_wrapper">
                    <div class="service_img">
                        <img src="{{ asset('images/service5.jpg') }}" alt="service-img">
                    </div>
                    <div class="service_content">
                        <div class="service_title">
                            <a href="single_service4.html"><h3>Air shipping</h3></a>
                        </div>
                        <div class="service_text">
                            <p style="text-align: justify;">RusshRider Delivery Services is an airfreight forwarding specialists offering a
                                comprehensive range of international air cargo solutions with unbeatable levels of customer service.</p>
                        </div>
                        <div class="read_more">
                            <a href="single_service4.html">read more <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 xxs_fullwidth">
                <div class="single_service_wrapper">
                    <div class="service_img">
                        <img src="images/service1.jpg" alt="service-img">
                    </div>
                    <div class="service_content">
                        <div class="service_title">
                            <a href="single_service5.html"><h3>RusshRider Delivery Services TRUCKING SERVICES</h3></a>
                        </div>
                        <div class="service_text">
                            <p style="text-align:justify;">RusshRider Delivery Services can handle a variety of domestic & international trucking services to suit your needs. </p>
                        </div>
                        <div class="read_more">
                            <a href="single_service5.html">read more <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row end -->
    </div>
    <!-- /.container starts -->
</section>
<!--================================
    END ABOUT US AREA
=================================-->


<!--================================
    START ABOUT US AREA
=================================-->
<section class="about_us_area dark_bg section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
    <!-- container starts -->
    <div class="container">

        <!-- row starts -->
        <div class="row">
            <!-- /.col-md-6 starts -->
            <div class="col-md-6 xs_fullwidth col-xs-6">
                <!-- section_title starts -->
                <div class="section_title">
                    <div class="sub_title">
                        <p>Other Services</p>
                    </div>
                    <div class="title"><h2>RusshRider Delivery Services</h2></div>
                </div><!-- section_title starts -->

                <!-- accrodion area starts  -->
                <div class="accordion_wrapper">
                    <!-- panel-group start -->
                    <div class="panel-group" id="accordion">

                        <!-- single accprdion pnae start -->
                        <div class="panel panel-default">
                            <div class="single_acco_title">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" class="collapsed">
                                        REMOTE WAREHOUSING AND STORAGE CAPACITY<span class="fa fa-plus"></span></a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse " aria-expanded="false" style="height: 0px;" role="tablist">
                                <div class="panel-body"><p style="text-align:justify;">We help you easily store unused items, yet have them readily accessible for quick on-time retrieval.
                                        Our computerized system can locate your inventory at a moment's notice while Premier’s own courier service and truck divisions hand-deliver it to your door saving you valuable time and money.
                                        Our modern warehouse facility is designed and equipped to handle all your storage needs, and offers excellent inventory control for storage/file boxes, theatre props, machine parts, production line repair equipment and more. The facility also provides space for furniture, document, and x-ray storage.
                                    </p>
                                    <span class="acoo_icon fa fa-truck"></span>
                                </div>
                            </div>
                        </div><!-- single accprdion pnae end -->

                        <!-- single accprdion pnae start -->
                        <div class="panel panel-default">
                            <div class="single_acco_title">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false">
                                        EXPRESS WAREHOUSING SERVICES<span class="fa fa-plus"></span></a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tablist">
                                <div class="panel-body"><p style="text-align: justify;">We have top class warehousing facilities. Our warehouses are spacious, well guarded, and spread everywhere in the country to provide assistants to our clients. We give utmost care to your goods when they are in transit. We take proper attention of your essential goods till they reach their desired destination. We understand and therefore ensure all measures to fulfill the client's requirement for safe storage of goods in transit.</p>
                                    <span class="acoo_icon fa fa-truck"></span>
                                </div>
                            </div>
                        </div><!-- single accprdion pnae end -->

                        <!-- single accprdion pnae start --><!--
                            <div class="panel panel-default">
                                <div class="single_acco_title">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false">
                                    Processus dynamicus, qui sequitur mutationem cons ? <span class="fa fa-plus"></span></a>
                                  </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tablist">
                                  <div class="panel-body"><p>Mirum est notare quam littera gothica, quam nunc putamus parum anteposuerit litterarum
                                      formas humanitatis per seacula quarta decima et quinta deceo Eodem modo typi, qui nunc nobis videntur parum
                                      clari, fiant sollemn</p>
                                      <span class="acoo_icon fa fa-truck"></span>
                                  </div>
                                </div>
                            </div>--><!-- single accprdion pnae end -->

                    </div><!-- /.panel-group ends -->
                </div><!-- accrodion area ends  -->
            </div><!-- /.col-md-6 ends -->

            <!-- /.col-md-6 starts -->
            <div class="col-md-6 xs_fullwidth col-xs-6">
                <div class="right_message">
                    <!-- section_title starts -->
                    <div class="section_title">
                        <div class="sub_title">
                            <p>Contact Us</p>
                        </div>
                        <div class="title"><h2>send us message</h2></div>
                    </div><!-- section_title starts -->

                    <!-- send us message form -->
                    <div class="send_message">
                        <form action="#">
                            <div class="form_half">
                                <input class="name" type="text" placeholder="Name">
                            </div>
                            <div class="form_half">
                                <input class="phone" type="text" placeholder="Phon No">
                            </div>
                            <input type="email" placeholder="Your Email">

                            <textarea name="message" placeholder="Write Your Text" id="message" cols="30" rows="10"></textarea>

                            <div class="submit_btn">
                                <button class="trust_btn" type="submit" name="button">send message</button>
                            </div>
                        </form>
                    </div>
                    <!-- end send us message form -->
                </div>
            </div><!-- /.col-md-6 ends -->
        </div><!-- /.row ends -->

    </div><!-- /.container ends -->
</section>
<!--================================
    END ABOUT US AREA
=================================-->
@endsection
