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
        <div class="container g-padding-y-60--xs g-padding-y-80--xsm">
            <div class="row">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
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
        </div>
    </div>

    <!-- Plan -->
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-40--xs g-padding-y-60--xsm">
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
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--white">Process Re-engineering</p>
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
            
            <div class="g-text-center--xs g-margin-t-50--xs">
                <a href="{{url('/process')}}" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Learn More</a>
            </div>
        </div>
    </div>
    <!-- End Process -->

    <!-- Plan -->
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-20--xs g-padding-y-20--xsm">
            <div class="row">
                <div class="col-md-12 g-margin-b-10--xs g-margin-b-20--lg g-padding-y-40--xs">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <h3 class="g-font-size-28--xs g-font-weight--700 g-text-center--xs g-color--primary g-margin-b-30--xs">Business Support Services</h3>
                        <div class="s-plan-v1 g-bg-color--primary g-padding-y-80--xs g-padding-x-100--xs">
                            <p class="g-font-size-16--md g-color--white g-font-weight--500 text-justify g-margin-b-30--xs g-padding-x-100--xs">
                                At Cavidel Limited we provide 'End to End' IT Support services. 
                                Whether you are new or an existing business, we allow you to focus 
                                on your core business doing what you are good at while we deal 
                                with the support services that we are good at providing.
                                Business Support Services combines people, 
                                process and technology to improve organizational performance 
                                and customer value. It is a disciplined approach that focuses 
                                on effectively and efficiently aligning all aspects of an organization 
                                with the vision of constant process improvement, technological integration,
                                and increasing customer value. Having the right technology in place can help 
                                bring success, but optimizing business processes and practices is a key mechanism by 
                                which you can deliver true value.
                                Business Support Service fosters communication and 
                                establishes optimal businesses processes.
                            </p>
                        </div>
                    </div>
                </div>
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-eye"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Diagnostic Review</h3>
                            <p class="g-font-size-12--xs g-color--primary g-margin-b-30--xs">
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-8 g-margin-b-10--xs g-margin-b-20--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-left--xs g-bg-color--white g-padding-y-80--xs">
                            <p class="g-font-size-16--md g-font-weight--500 text-justify g-margin-b-30--xs g-padding-x-100--xs">
                                Our team of professionals work with your organization to 
                                understand your company’s strategic and competitive business priorities. 
                                Using these priorities, an appraisal of your current business planning processes 
                                and procedures is conducted. The current state is compared to best practices. 
                                The comparison leads to identification of gaps and an outline of the necessary 
                                steps to close the gaps to improve business performance. The evaluation also enables 
                                us to determine your company’s readiness to implement an enhanced business plan. 
                                Our team presents its observations and findings, blended with a tailored education program,
                                to the leadership team, along with a prioritized list of gap-closing recommendations. 
                                The team will be comprised of professionals with years of experience in 
                                leading business environments both as practitioners as well as guiding 
                                client companies on their journey towards excellence.
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
                        <div class="s-plan-v1 g-text-left--xs g-bg-color--white g-padding-y-80--xs">
                            <p class="g-font-size-16--md g-font-weight--500 text-justify g-margin-b-30--xs g-padding-x-100--xs">
                                We assist clients to make the best of judgement in selecting critical 
                                office automation assets among multiple vendors by adopting leading 
                                practices in vendor evaluation, product assessment and delivery. 
                                Our approach provides a structured framework to develop business requirement 
                                for a proposed solution and enable an organization to identify and assess 
                                suitable suppliers to meet their business needs. 
                                The methodology is designed to help the client make their own 
                                decisions and judgments to meet their unique selection requirements
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-20--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-user"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Selection Assistance</h3>
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-marker"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Strategy Implementation Support</h3>
                            <p class="g-font-size-12--xs g-color--primary g-margin-b-30--xs">
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-8 g-margin-b-10--xs g-margin-b-20--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-left--xs g-bg-color--white g-padding-y-80--xs">
                            <p class="g-font-size-16--md g-font-weight--500 text-justify g-margin-b-30--xs g-padding-x-100--xs">
                                Provides support for managing strategy implementation through structured follow up, detailed implementation planning and feedback mechanism.
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
                        <div class="s-plan-v1 g-text-left--xs g-bg-color--white g-padding-y-80--xs">
                            <p class="g-font-size-16--md g-font-weight--500 text-justify g-margin-b-30--xs g-padding-x-100--xs">
                                Using tested methodology, technology and staff, we assume the responsibility of an ombudsman among various business functions to ensure they do not work in silos by providing advice and insight into how each function operates and coordinate inter-departmental activities to increase competitive advantage. Our project management and project management office assistance focuses on the operational project management activities that support a timely, in scope and cost effective delivery.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-20--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-folder"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Outsourcing & Project Management</h3>
                            <p class="g-font-size-12--xs g-color--primary g-margin-b-30--xs">
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