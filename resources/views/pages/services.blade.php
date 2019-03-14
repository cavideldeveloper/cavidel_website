@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Our Services
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')
    <!--========== PROMO BLOCK ==========-->
    <div class="js__parallax-window" style="background: url(img/1920x1080/07.jpg) 5% 0 no-repeat fixed; height: 280px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <div class="g-margin-b-60--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs g-font-weight--700 animated bounceInDown">Our Services</h1>
            </div>
            <a href="#js__scroll-to-section">
                <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
            </a>
        </div>
    </div>

    <!-- Plan -->
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="row">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-20--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-archive"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> Support Services</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-60--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Diagnostic Review</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Selection Assistance</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Research & Reviews</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Strategy Implementation</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Project Management</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                Data outsourcing
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-book"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> Consultancy & Training</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-60--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Data Research & Mining
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Learning Management System
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Design Pattern & Workflow 
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Practical Training Guide (PTG)
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Remote Training Programme
                                </li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    HR Training
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
                
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-key"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Business Analysis</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-60--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Performance Improvement plan</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Policies Documentation</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Implementation of IT Strategy</li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Key performance indicators (KPIs)</li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Data Analysis</li>

                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                Building Automation Tools
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>

            <div class="row">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-desktop"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Software Development</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-60--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Mobile-Optimized Website</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                Powerful Documentation</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> IT Service Management</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Information Systems Audit</li>
                                
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Systems Integration</li>
                                
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> 24/7 Customer Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-dashboard"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs ">Software Customization</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-60--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Mobile-Optimized Website</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                Powerful Documentation</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> IT Service Management</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Information Systems Audit</li>
                                
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Systems Integration</li>
                                
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> 24/7 Customer Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-settings"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Process Reengineering</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-60--xs">
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Mobile-Optimized Website</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                Powerful Documentation</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> IT Service Management</li>
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Information Systems Audit</li>
                                
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Systems Integration</li>
                                
                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> 24/7 Customer Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>
    <!-- End Plan -->

    <!-- Process -->
    <div class="g-bg-color--dark-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-50--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--white">Process Overview</p>
            </div>
            <ul class="list-inline row">
                <!-- Process -->
                <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="center-block g-text-center--xs">
                        <div class="g-margin-b-30--xs">
                            <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-5--xs ti-user"></i>
                            </span>
                        </div>
                        <div class="g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs g-color--white">Consult</h3>
                            <p class="g-color--white-opacity">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </li>
                <!-- End Process -->

                <!-- Process -->
                <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="center-block g-text-center--xs">
                        <div class="g-margin-b-30--xs">
                            <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-5--xs ti-pencil"></i>
                            </span>
                        </div>
                        <div class="g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs g-color--white">Create</h3>
                            <p class="g-color--white-opacity">The time has come to bring those ideas and plans to life.</p>
                        </div>
                    </div>
                </li>
                <!-- End Process -->

                <!-- Process -->
                <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--sm">
                    <div class="center-block g-text-center--xs">
                        <div class="g-margin-b-30--xs">
                            <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-5--xs ti-panel"></i>
                            </span>
                        </div>
                        <div class="g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs g-color--white">Develop</h3>
                            <p class="g-color--white-opacity">Whether through commerce or just an experience to tell your brand.</p>
                        </div>
                    </div>
                </li>
                <!-- End Process -->

                <!-- Process -->
                <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1">
                    <div class="center-block g-text-center--xs">
                        <div class="g-margin-b-30--xs">
                            <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-5--xs ti-rocket"></i>
                            </span>
                        </div>
                        <div class="g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs g-color--white">Release</h3>
                            <p class="g-color--white-opacity">Now that your brand is all dressed up and ready to party.</p>
                        </div>
                    </div>
                </li>
                <!-- End Process -->
            </ul>
        </div>
    </div>
    <!-- End Process -->

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	<script type="text/javascript">
		// send contact message

	</script>
@endsection