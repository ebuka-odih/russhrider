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
                            <h1>about us</h1>
                        </div>
                        <ul class="bread_crumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li class="bread_active">About us</li>
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
<section class="mission_vision section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
    <!-- container starts -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-6 xs_fullwidth v_middle">
                <div class="about_us_img">
                    <img src="images/about_us2_m.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 col-xs-6 xs_fullwidth v_middle">
                <div class="about_us_content_wrapper">
                    <!-- section_title starts -->
                    <div class="section_title">
                        <div class="title"><h2>About Us</h2></div>
                    </div><!-- section_title starts -->

                    <div class="mission_content">
                        <p style="text-align: justify;">We offer a host of logistic management services and supply chain solutions.
                            We provide innovative solutions with the best people, processes, and technology. With over
                            60 years of providing world class service to their customers on the asset side, a need to
                            provide a one stop shop for a” true customer service logistic solution” was introduced.
                            By adding this dimension to an already dynamic and customer centric asset based provider,
                            we feel we bring a total solution.</p>

                        <p style="text-align:justify;">We offer a wide range of parcel collection and drop off services, including expedited
                            and premium options to ensure maximum flexibility for our customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container starts -->
</section>
<!--================================
    END ABOUT US AREA
=================================-->

<!--================================
    START COUNTER UP
=================================-->
<section class="team_area dark_bg section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
    <!-- container start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- section_title starts -->
                <div class="section_title title_center">
                    <div class="sub_title">
                        <p>Expert Team</p>
                    </div>
                    <div class="title"><h2>Meet our team</h2></div>
                </div><!-- section_title starts -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="team_slider_wrapper">
                    <div class="team_slider">
                        <div class="single_team_wrapper">
                            <div class="single_team_member">
                                <div class="team_img">
                                    <img src="images/team1.jpg" alt="images">
                                </div>
                                <div class="hover_overlay">
                                    <div class="social_links">
                                        <ul>
                                            <li><a href="#" class="fb"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#" class="pin"><span class="fa fa-pinterest-p"></span></a></li>
                                            <li><a href="#" class="twit"><span class="fa fa-twitter"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="name_designation">
                                <h4 class="name">Marie J. Smith</h4>
                                <span class="designation">Co-Founder</span>
                            </div>
                        </div>

                        <div class="single_team_wrapper">
                            <div class="single_team_member">
                                <div class="team_img">
                                    <img src="images/team2.jpg" alt="images">
                                </div>
                                <div class="hover_overlay">
                                    <div class="social_links">
                                        <ul>
                                            <li><a href="#" class="fb"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#" class="pin"><span class="fa fa-pinterest-p"></span></a></li>
                                            <li><a href="#" class="twit"><span class="fa fa-twitter"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="name_designation">
                                <h4 class="name">Billy S. Tietjen</h4>
                                <span class="designation">Co-Founder</span>
                            </div>
                        </div>

                        <div class="single_team_wrapper">
                            <div class="single_team_member">
                                <div class="team_img">
                                    <img src="images/team3.jpg" alt="images">
                                </div>
                                <div class="hover_overlay">
                                    <div class="social_links">
                                        <ul>
                                            <li><a href="#" class="fb"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#" class="pin"><span class="fa fa-pinterest-p"></span></a></li>
                                            <li><a href="#" class="twit"><span class="fa fa-twitter"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="name_designation">
                                <h4 class="name">Edward S. Agosto</h4>
                                <span class="designation">Digital Marketer</span>
                            </div>
                        </div>

                        <div class="single_team_wrapper">
                            <div class="single_team_member">
                                <div class="team_img">
                                    <img src="images/team4.jpg" alt="images">
                                </div>
                                <div class="hover_overlay">
                                    <div class="social_links">
                                        <ul>
                                            <li><a href="#" class="fb"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#" class="pin"><span class="fa fa-pinterest-p"></span></a></li>
                                            <li><a href="#" class="twit"><span class="fa fa-twitter"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="name_designation">
                                <h4 class="name">Clara C. Vinson</h4>
                                <span class="designation">Logistics Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider_navigatiors">
                        <span class="prev icofont icofont-thin-left"></span>
                        <span class="next icofont icofont-thin-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section>
<!--================================
    END COUNTER UP
=================================-->
@endsection
