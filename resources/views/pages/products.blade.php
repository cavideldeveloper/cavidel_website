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
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-margin-b-60--xs">
                <p class="text-uppercase g-text-center--xs g-font-size-28--xs g-font-weight--700 g-color--primary g-margin-b-30--xs g-margin-l-20--xs">Office Automation</p>
            </div>
            <div class="row g-row-col--5">
                <!-- Plan -->
                <div class="col-md-4">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-user"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> Demo</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    0/50 Users
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Limited Support 
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Android/iOS
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Project Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Asset Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Accounting
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Payroll
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Staff Management
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
                                Starter Pack
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    50/100 Users
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Unlimited Support 
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Android/iOS
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Project Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Asset Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Accounting
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Payroll
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Staff Management
                                </li>
                            </ul>

                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Order Now</button>
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
                                Enterprise
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    100/500 Users
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Unlimited Support 
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Android/iOS
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Project Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Asset Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Accounting
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Payroll
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Staff Management
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

    <!-- Counter -->
    <div class="js__parallax-window" style="background: url(img/1920x1080/21.jpg) 50% 0 no-repeat fixed;">
        <div class="container g-padding-y-125--xs">
            <div class="row">
                <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                    <div class="g-text-center--xs">
                        <div class="g-margin-b-10--xs">
                            <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">6</figure>
                            <span class="g-font-size-40--xs g-color--white">k</span>
                        </div>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">Site Visits</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                    <div class="g-text-center--xs">
                        <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">3</figure>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">Award Winners</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">16</figure>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">Our Clients</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 g-full-width--xs">
                    <div class="g-text-center--xs">
                        <div class="g-margin-b-10--xs">
                            <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">2</figure>
                            <span class="g-font-size-40--xs g-color--white">x</span>
                        </div>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">Client's Rating</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Plan -->
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-margin-b-60--xs">
                <p class="text-uppercase g-text-center--xs g-font-size-28--xs g-font-weight--700 g-color--primary g-margin-b-30--xs g-margin-l-20--xs">Trading, Investment & Managment System</p>
            </div>
            <div class="row g-row-col--5">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-user"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> Demo</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    0/50 Users
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Limited Support 
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Android/iOS
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Loan Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Investment Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading & Account Simulation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio Management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Payment & Deposit System
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Monthly Account Statement
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
                                Starter Pack
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    0/50 Users
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Limited Support 
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Android/iOS
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Loan Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Investment Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading & Account Simulation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio Management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Payment & Deposit System
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Monthly Account Statement
                                </li>
                            </ul>


                            <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Order Now</button>
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
                                Enterprise
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-90--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    0/50 Users
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Limited Support 
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Android/iOS
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Loan Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Investment Management
                                </li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading & Account Simulation
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio Management
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Payment & Deposit System
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Monthly Account Statement
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

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	<script type="text/javascript">
		// send contact message

	</script>
@endsection