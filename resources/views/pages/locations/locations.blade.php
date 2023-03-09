@extends('pages.layout.app')
@section('content')

    <!-- end top-wrapper -->
    <div class="clear"></div>

    <a id="sticky-menu-logo" href="{{ route('index') }}" title="Rush Delivery">
        <img height="40" src="https://www.rush-delivery.com/wp-content/uploads/2017/01/RushLogoNew_Registered-e1484146024431.png" alt="logo" /></a>

    <section id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1 class="pagetitle entry-title" itemprop="headline">Locations</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </section>
    <!-- end page-content-title -->
    <div class="clear"></div>

    <section id="page-content">

        <div class="no-breadcrumbs-padding"></div>
        <div id="content-container" class="container_24">
            <main id="main-content" role="main" class="grid_16">
                <div class="main-content-padding">
                    <div itemprop="mainContentOfPage"  itemscope="itemscope">
                        <article class="post-46 page type-page status-publish hentry" id="post-46">


                            <div class="entry">
                                <p><span class="green" style="color: #019b3c;">RUSH</span> is regions&#8217;s leading same-day transportation and logistics services company, offering a wide range of door-to-door fulfillment and distribution for clients of all sizes and needs. <span class="green" style="color: #019b3c;">RUSH</span> delivers within cities and between cities 24 hours a day, 7 days a week, and 365 days a year.</p>
                                <p>Choose your nearest location</p>
                                <i class="fa fa-truck" style="color:#019b3c;"></i> <a href="{{ route('dayton') }}">Dayton</a><br />
                                <i class="fa fa-truck" style="color:#019b3c;"></i> <a href="{{ route('cincinnati') }}">Cincinnati</a><br />
                                <i class="fa fa-truck" style="color:#019b3c;"></i> <a href="{{ route('columbus') }}">Columbus</a></p>
                            </div>


                        </article>
                        <div class="clear"></div>
                    </div>		</div><!-- end main-content-padding -->
            </main><!-- end main-content -->


            <aside id="sidebar" class="grid_8">
                <div id="sidebarSubnav">
                    <div itemtype="https://schema.org/WPSideBar" itemscope="itemscope">

                        <div id="text-2" class="widget widget_text substitute_widget_class"><h3 class="widgettitle">Need it today?</h3>			<div class="textwidget"><div class="box">
                                    <h2>Same Day Delivery Service</h2>
                                    <p>To request account information call our Customer Service Center</p>
                                    <p style="text-align: center;">(937) 297-6182 (Dayton)<br />
                                        (513) 771-7874 (Cincinnati)<br />
                                        (614) 337-3300 (Columbus)</p>
                                    <p style="text-align: center;"><strong>Top of the Line, Safe Delivery</strong></p>
                                </div>
                            </div>
                        </div></div>	</div>
                <!-- end sidebarSubnav -->
            </aside>
            <!-- end sidebar -->



        </div><!-- end content-container -->

        <div class="clear"></div>



    </section><!-- end page-content -->

    <div class="clear"></div>


    <section id="bottom-bg">
        <div id="bottom" class="container_24">
            <div class="bottom-content-padding">
                <div id='bottom_1' class='one_fourth'><div class='column-content-wrapper'><div class="bottom-col-content widget_text substitute_widget_class">			<div class="textwidget"><p><img decoding="async" src="https://www.rush-delivery.com/wp-content/uploads/2020/01/anniversary2020.png" /></p>
                            </div>
                        </div></div></div><!-- end bottom_1 --><div id='bottom_2' class='one_fourth'><div class='column-content-wrapper'><div class="bottom-col-content widget_text substitute_widget_class">			<div class="textwidget"><p><img decoding="async" src="https://www.rush-delivery.com/wp-content/uploads/2015/11/wbec.png" /></p>
                            </div>
                        </div></div></div><!-- end bottom_2 --><div id='bottom_3' class='one_fourth'><div class='column-content-wrapper'><div class="bottom-col-content widget_text substitute_widget_class">			<div class="textwidget"><p><img decoding="async" src="https://www.rush-delivery.com/wp-content/uploads/2015/11/teena-Elite-Logo.png" /></p>
                            </div>
                        </div></div></div><!-- end bottom_3 --><div id='bottom_4' class='one_fourth last_column'><div class='column-content-wrapper'><div class="bottom-col-content widget_text substitute_widget_class">			<div class="textwidget"><p><img decoding="async" src="https://www.rush-delivery.com/wp-content/uploads/2015/11/smartway.png" /></p>
                            </div>
                        </div></div></div><!-- end bottom_4 -->				</div><!-- end bottom-content-padding -->

        </div><!-- end bottom -->

    </section><!-- end bottom-bg -->

    <div class="clear"></div>

@endsection
