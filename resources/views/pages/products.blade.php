@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Our Products
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')
    <!--========== PROMO BLOCK ==========-->
    <div class="js__parallax-window" style="background: url(img/1920x1080/07.jpg) 5% 0 no-repeat fixed; height: 280px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <div class="g-margin-b-60--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs g-font-weight--700 animated bounceInDown">Our Products</h1>
            </div>
            <a href="#js__scroll-to-section">
                <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
            </a>
        </div>
    </div>

    <!-- Plan -->
    <section id="product-1"></section>
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-margin-b-60--xs">
                <p class="text-uppercase g-text-center--xs g-font-size-28--xs g-font-weight--700 g-color--primary g-margin-b-30--xs g-margin-l-20--xs">
                    <img src="{{asset('img/products/officemate.png')}}" width="auto" height="50">
                </p>
            </div>
            <div class="row g-row-col--5">
                <!-- Plan -->
                <div class="col-md-4">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-user"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> Starter Pack</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Staff management & Payroll
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Training & Recruitment
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Messaging & Bulletin board
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Billing & Accounting
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Project & Task management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Workflow & Request mgt
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Asset/Fleet management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Risk management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Event scheduling
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Document management
                                </li>
                            </ul>

                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cloud"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                Economy Pack
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Staff management & Payroll
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Training & Recruitment
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Messaging & Bulletin board
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Billing & Accounting
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Project & Task management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Workflow & Request mgt
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Asset/Fleet management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Risk management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Event scheduling
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Document management
                                </li>
                            </ul>

                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
                
                <!-- Plan -->
                <div class="col-md-4">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cloud-up"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                Premium
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Staff management & Payroll
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Training & Recruitment
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Messaging & Bulletin board
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Billing & Accounting
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Project & Task management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Workflow & Request mgt
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Asset/Fleet management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Risk management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Event scheduling
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Document management
                                </li>
                            </ul>

                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Order Now</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>
    <!-- End Plan -->


    <!-- Plan -->
    <section id="product-2"></section>
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-margin-b-60--xs">
                <p class="text-uppercase g-text-center--xs g-font-size-28--xs g-font-weight--700 g-color--primary g-margin-b-30--xs g-margin-l-20--xs">
                    <img src="{{asset('img/products/tims.png')}}" width="auto" height="80">
                </p>
            </div>
            <div class="row g-row-col--5">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-user"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> Starter Pack</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading and Simulation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Reporting
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio P/L tracking
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Settlement tracking
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio valuation
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Asset Allocation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Historical price list
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Securities management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    General ledger accounting
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Cash funding management
                                </li>
                            </ul>

                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cloud"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                Economy Pack
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading and Simulation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Reporting
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio P/L tracking
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Settlement tracking
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio valuation
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Asset Allocation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Historical price list
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Securities management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    General ledger accounting
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Cash funding management
                                </li>

                            </ul>

                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
                
                <!-- Plan -->
                <div class="col-md-4">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cloud-up"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                Premium
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading and Simulation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Reporting
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio P/L tracking
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Settlement tracking
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio valuation
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Asset Allocation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Historical price list
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Securities management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    General ledger accounting
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Cash funding management
                                </li>
                            </ul>

                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>
    <!-- End Plan -->

    <!-- Plan -->
    <section id="product-3"></section>
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-margin-b-60--xs">
                <p class="text-uppercase g-text-center--xs g-font-size-28--xs g-font-weight--700 g-color--primary g-margin-b-30--xs g-margin-l-20--xs">
                    <img src="{{asset('img/products/catss.png')}}" width="auto" height="80">
                </p>
            </div>
            <div class="row g-row-col--5">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-user"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> Starter Pack</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading and Simulation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Random price discovery
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    News feeds
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio valuation
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Group Trading
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Discussion forum
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Winners board
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Limit, Market & Stop Orders
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Price graph
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Market price ticker
                                </li>
                            </ul>

                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cloud"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                Economy Pack
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading and Simulation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Random price discovery
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    News feeds
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio valuation
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Group Trading
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Discussion forum
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Winners board
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Limit, Market & Stop Orders
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Price graph
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Market price ticker
                                </li>
                            </ul>

                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
                
                <!-- Plan -->
                <div class="col-md-4">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cloud-up"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                Premium
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading and Simulation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Random price discovery
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    News feeds
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio valuation
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Group Trading
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Discussion forum
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Winners board
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Limit, Market & Stop Orders
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Price graph
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Market price ticker
                                </li>
                            </ul>

                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>
    <!-- End Plan -->

    @include('__includes.parallax-process')

    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-40--xs g-padding-y-100--xsm">
            <div class="row">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-20--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-shopping-cart"></i>
                            <p class="g-font-size-12--xs g-color--primary g-margin-b-30--xs">
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-8 g-margin-b-10--xs g-margin-b-20--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-left--xs g-bg-color--white g-padding-y-5--xs g-padding-x-30--xs">
                            <p class="g-font-size-14--xs g-color--dark g-margin-b-30--xs g-padding-x-100--xs">
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">E-Commerce</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        Our e-commerce solution provides an add-on to enhance our client’s web presence with a platform that links buyers and sellers of multiple products and facilitates payments for products and services.
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>

    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-40--xs g-padding-y-100--xsm">
            <div class="row">
                <!-- Plan -->
                <div class="col-md-8 g-margin-b-10--xs g-margin-b-20--lg">
                    <div class="cavi-circle">
                        <img src="{{ asset('img/cavi-icon.png') }}" width="90" style="margin-left: 0.1rem;margin-top: 1.3rem;" height="auto">
                    </div>
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-left--xs g-bg-color--white g-padding-y-5--xs g-padding-x-30--xs">
                            <p class="g-font-size-16--xs g-color--primary g-margin-b-30--xs g-padding-x-100--xs">
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Web Design & Development</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        Adopting multiple web technologies, our team of website developers are able to provide website solutions, be it static or dynamic, that will enhance the visibility of your business with a very short period. 
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-20--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-server"></i>
                            <p class="g-font-size-12--xs g-color--primary g-margin-b-30--xs">
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>

    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-40--xs g-padding-y-100--xsm">
            <div class="row">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-20--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-notepad"></i>
                            <p class="g-font-size-12--xs g-color--primary g-margin-b-30--xs">
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-8 g-margin-b-10--xs g-margin-b-20--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-left--xs g-bg-color--white g-padding-y-5--xs g-padding-x-30--xs">
                            <p class="g-font-size-14--xs g-color--dark g-margin-b-30--xs g-padding-x-100--xs">
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                    Task Management
                                </h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        Our Task management system assist clients to manage a task through its life cycle. It provides tools for planning, testing, tracking and reporting on tasks. The solution can help either individuals achieve goals, or groups of individuals collaborate and share knowledge for the accomplishment of collective goals. Tasks are also differentiated by complexity, from low to high.
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	<script type="text/javascript">
		// send contact message

	</script>
@endsection