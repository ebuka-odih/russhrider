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
                            <h1>services details</h1>
                        </div>
                        <ul class="bread_crumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li class="bread_active">services details</li>
                        </ul>
                    </div>
                </div><!-- col-md-12 ends -->
            </div>
            <!-- /.row ends -->
        </div><!-- /.container ends -->
    </div>

    <!-- menu starts -->
    <div class="menu_area">

        <!-- container starts -->
        <div class="container">
            <!-- row start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="mainmenu nav_shadow">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav magic_menu">
                                    <li class="active"><a href="index-2.html">Home</a></li>
                                    <li><a href="about_us2.html">About us</a></li>
                                    <li><a href="services-2.html">services</a></li>
                                    <li><a href="track_trace.html">Track & Trace</a></li>
                                    <li><a href="admin/pages/login.html">login</a></li>
                                    <!--<li><a href="contact.php">contact</a></li>-->
                                </ul>
                                <div class="search_form">
                                    <div class="search_btn" data-toggle="modal" data-target="#search_modal">
                                        <span class="fa fa-search"></span>
                                    </div>

                                    <!-- search Modal -->
                                    <div class="modal fade" id="search_modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog s_modal" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="search_form_wrapper">
                                                        <form method="post">
                                                            <div class="search_input">
                                                                <input type="text" name="search_field" placeholder="Search Query...">
                                                                <button class="submit_btn" type="submit">
                                                                    <span class="fa fa-search"></span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div><!-- main menu ends -->
                </div>
            </div><!-- /.row end -->

        </div><!-- /.container ends -->
    </div><!-- menu ends -->
</section>
<!--================================
    END SLIDER AREA
=================================-->


<!--================================
    START ABOUT US AREA
=================================-->
<section class="service_detail section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
    <!-- container starts -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 xxs_fullwidth xs_fullwidth col-xs-12">
                <div class="search_bar visible-xs reveal animated" data-reveal-anim="fadeInRight">
                    <form action="#" class="search_widget">
                        <input placeholder="Search..." type="text">
                        <button type="submit" class="blog_search_btn"><span class="fa fa-search"></span></button>
                    </form>
                </div>

                <div class="single_service_detail">
                    <div class="post_image">
                        <img src="images/single_detail.jpg" alt="single detail">
                    </div>

                    <div class="post">
                        <div class="section_title">
                            <div class="title"><h2>Ground shipping</h2></div>
                        </div>

                        <div class="post_content">
                            <p style="text-align: justify;">
                                RusshRider Delivery Services offers an efficient integrated transport system with multiple
                                types of trucks available to support your trucking and distribution needs.
                                Our trucking service extends to various locations such as offices, warehouses,
                                exhibition venue to neighboring countries, Florida and in the United Kingdom.
                                All cargos are handled carefully, tracked and distributed in precise accordance
                                with our customer’s schedule, assuring on-time deliveries.
                            </p>

                            <p style="text-align: justify;">RusshRider Delivery Services offers an efficient integrated transport system with multiple types
                                of trucks available to support your trucking and distribution needs. All cargos are
                                handled carefully, tracked and distributed in precise accordance with our customer’s
                                schedule, assuring on-time deliveries. Outsourced logistics services are a perfect
                                solution for businessmen and companies who strive to focus on their core business and
                                leave the peripheral solutions to the professionals.</p>

                            <p style="text-align: justify;">As part of the variety of our services, we offer to
                                our clients extensive, advanced and varied services whilst handling the various goods
                                strictly and accurately. </p>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.row end -->
    </div>
    <!-- /.container ends -->
</section>
<!--================================
    END ABOUT US AREA
=================================-->

@endsection
