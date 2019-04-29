@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Our Products
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')
    @include('__includes.parallax-process-officemate')

    <!-- Plan -->
    <section id="more-services">
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
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Employee onboarding
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Business contacts
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Chat & Messaging
                                    </li>

                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Billing & Accounting
                                    </li>

                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Event scheduling
                                    </li>

                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                        Call memos
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                        Task management
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                        Risk management
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                        Alerts & Notifications
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                        MS Outlook integration
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
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Starter Pack Features +
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Internal memo
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Employee score card
                                    </li>

                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Policy & Process mgt.
                                    </li>

                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Leave mgt.
                                    </li>

                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Travel mgt.
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Training mgt.
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Goal setting
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Appraisal
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Employee loans
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Vendor mgt
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Inventory mgt
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Email approvals/rejections
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Billing
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Invoicing
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Single-currency accounting
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Management reports
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
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Premium Features +
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Bank reconciliation & Statement
                                    </li>

                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Asset register
                                    </li>

                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Asset maintenance
                                    </li>

                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Document mgt
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Project mgt
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Client information service
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Client engagement service
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Client notification service
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Payment gateway
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Payroll processing
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Employee skills assessment
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Budgeting
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Expense approval
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Asset depreciation
                                    </li>
                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Expense amortisation
                                    </li>

                                    <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                        Learning mgt. system
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
    </section>
    <!-- End Plan -->

    

    {{-- <div class="g-bg-color--sky-light">
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
    </div> --}}

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	<script type="text/javascript">
		// send contact message

	</script>
@endsection