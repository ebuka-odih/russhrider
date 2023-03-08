@extends('pages.layout.app')
@section('content')

<!--================================
        START BREADCRUMB AREA
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
                            <h1>track & trace</h1>
                        </div>
                        <ul class="bread_crumb">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li class="bread_active">Tracking</li>
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
    END BREADCRUMB AREA
=================================-->

<!--================================
    START TRACK & TRACE AREA
=================================-->
<section class="tc_section section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="tc_title"><h4>Please Enter Your Product Code And You Will See Your Product</h4></div>
                <div class="tc_form">
                    @if(session()->has('declined'))
                        <div class="alert alert-danger">
                            {{ session()->get('declined') }}
                        </div>
                    @endif
                    <form action="{{ route('trackShipment') }}" method="POST">
                        @csrf
                        <div class="tc_input_wrapper">
                            <input name="tid" type="text" placeholder="Enter Your Tracking Code">
                            <span class="fa fa-truck"></span>
                            <button class="tc_btn" name="submit" type="submit">enter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================
    END TRACK & TRACE AREA
=================================-->

@endsection
