@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Our Process
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')
    <!--========== PROMO BLOCK ==========-->
    <div class="js__parallax-window" style="background: url(img/1920x1080/07.jpg) 5% 0 no-repeat fixed; height: 280px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <div class="g-margin-b-60--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs g-font-weight--700 animated bounceInDown">Business Process</h1>
            </div>
            <a href="#js__scroll-to-section">
                <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
            </a>
        </div>
    </div>

    <!-- Plan -->
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-20--xs g-padding-y-20--xsm">
            <div class="row">
                <div class="col-md-12 g-margin-b-10--xs g-margin-b-20--lg g-padding-y-40--xs">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <h3 class="g-font-size-28--xs g-font-weight--700 g-text-center--xs g-color--primary g-margin-b-30--xs">Business Performance Improvement</h3>
                        <div class="s-plan-v1 g-bg-color--primary g-padding-y-60--xs g-padding-x-80--xs">
                            <p class="g-font-size-16--xs g-color--white g-font-weight--500 g-margin-b-30--xs g-padding-x-100--xs">
                                Business Performance Improvement Services assist clients through ‘transformational’ projects. These types of transformational projects may involve the adoption of new processes and controls, the implementation of new business models, or organizational restructuring to help achieve business objectives and performance results.
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-settings"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Potential Indicators</h3>
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
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500"> A need to improve performance, but not at the cost of undoing the internal controls and compliance gains of the past few years</li>
                                    <li class="g-color--dark g-font-weight--500"> Globalization drives an increasing number of acquisitions, divestitures and outsourcing of core functionality. This leads to greater operational challenges arising from the associated re-structuring</li>
                                    <li class="g-color--dark g-font-weight--500"> Challenges translating technology investments into significant sustainable business benefits</li>
                                    <li class="g-color--dark g-font-weight--500"> Market demands for shorter product and service development life cycles, better value, and greater security</li>
                                    <li class="g-color--dark g-font-weight--500"> The need to compete globally for market share and scarce resources</li>
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
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">Documented policies and procedures with considerations for risks, controls and key performance indicators (KPIs)</li>
                                    <li class="g-color--dark g-font-weight--500">Organization structure and job description aligned with business objectives and performance goals</li>
                                    <li class="g-color--dark g-font-weight--500">Business/functional operating model design</li>
                                    <li class="g-color--dark g-font-weight--500">Creation of an IT Strategy with implementation blueprint.</li>
                                    <li class="g-color--dark g-font-weight--500">Deployment of desktop automation tools for critical business functions to increase productivity at the operational level</li>
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-layers"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Value Proposition</h3>
                            <p class="g-font-size-12--xs g-color--primary g-margin-b-30--xs">
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>

    @include('__includes.parallax-process')

    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-40--xs g-padding-y-100--xsm">
            <div class="row">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-20--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-folder"></i>
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
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Human Resource Management system</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        Our Human Resources (HR) Management System bring greater efficiencies and savings in time and money to our clients. We know how important it is to provide our clients with a system they can trust and always rely on.
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
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                    Payroll Management
                                </h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        Living in the digital age and managing your business payroll by hand is a daunting task and unproductive especially when you have salaries to process for a good number of staff, tax payables to compute, etc.
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-credit-card"></i>
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-dropbox"></i>
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
                                    Inventory Management System
                                </h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        Our Inventory Management System provides tracking for inventory levels, orders and deliveries. Clients use our inventory management software to avoid product overstock and outages. It is a tool for organizing inventory data that before was generally stored in hard-copy form or in spreadsheets. 
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
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                    Survey System
                                </h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        The Survey Management System is used by organizations leadership to gain feedback on and measure employee engagement, employee morale, and performance. The system provides anonymous surveys, which are used to gain a holistic picture of employees' feelings on such areas as working conditions, supervisory impact, and motivation that regular channels of communication may not. The system is considered effective as it provides well-designed, effectively administered, and valid changes and improvements.
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-zoom-in"></i>
                            <p class="g-font-size-12--xs g-color--primary g-margin-b-30--xs">
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>

    @include('__includes.parallax-process-2')

    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-40--xs g-padding-y-100--xsm">
            <div class="row">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-20--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-gift"></i>
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
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Appraisal System</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        Our performance management system helps managers evaluate employee job performance and develop a fair system of pay increases and promotions. It automates the process of goal setting, scoring and final decision making. It assist companies in devising or reorganizing job functions to better fit a position or the employee.
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
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Training System</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        Our training management system is a software application for the administration, documentation, tracking, and reporting of training programs within an institution. The system is focused on back-office processes and is considered a tool for corporate training administrators as such, it acts as a central enterprise resource planning (ERP) software specific to the training industry. It can be complemented by other learning technologies such as a learning management system, and it is part of the educational technology ecosystem. 
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-light-bulb"></i>
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-bar-chart"></i>
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
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Accounting and Financial Services</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        We provide widespread accounting and financial management solutions that address the difficulties and challenges of integrating a general ledger system into solutions that require proper book keeping of financial data that emanate from such systems. We also provide financial market systems that automate trading and settlement of instruments traded across multiple asset classes in the primary and secondary markets.
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
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Software Development</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark g-font-weight--500">
                                        We assist clients to make their dreams real by developing bespoke solutions that gives them business advantage. These solutions are unique per client and limited by client’s imagination. It is operated under strict non-disclosure agreements and license restrictions. With this offering, CAVIDEL is able to use new and existing technologies to integrate multiple systems and libraries from various sources to meet client’s needs. CAVIDEL is also positioned to take advantage of block-chain technologies to deliver business solutions in the near future.
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-desktop"></i>
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