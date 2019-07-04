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
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs g-font-weight--700 animated bounceInDown">Consulting</h1>
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
                        <h3 class="g-font-size-28--xs g-font-weight--700 g-text-center--xs g-color--primary g-margin-b-30--xs">Business Support Services</h3>
                        <div class="s-plan-v1 g-bg-color--primary g-padding-y-60--xs g-padding-x-80--xs">
                            <p class="g-font-size-16--xs text-justify g-color--white g-font-weight--500 g-margin-b-30--xs g-padding-x-20--xs">
                                Cavidel Limited Business Support Services combines people, process and technology to improve organizational performance and customer value. Our approach focuses on effectively and efficiently aligning all aspects of an organization with the vision of constant process improvement, technological integration, and increasing customer value. Having the right technology in place can help bring success, but optimizing business processes and practices is a key mechanism by which you can deliver true value.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-40--xs g-padding-y-60--xsm">
            <div class="row">

                <!-- Plan -->
                <div class="col-md-12 g-margin-b-10--xs g-margin-b-20--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-left--xs g-bg-color--white g-padding-y-20--xs">
                            <div class=" g-text-center--xs g-bg-color--white g-padding-y-20--xs">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-eye"></i>
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Diagnostic Review</h3>
                                <p class="g-font-size-12--xs g-color--primary g-margin-b-30--xs">
                                </p>
                            </div>

                            <p class="g-font-size-16--md g-font-weight--500 text-justify g-margin-b-30--xs g-padding-x-100--xs">
                                Our team of professionals work with your organization to 
                                understand your company’s strategic and competitive business priorities.
                                Using these priorities, an appraisal of your current business planning processes 
                                and procedures is conducted. The current state is compared to best practices.
                                <br /><br />
                                The comparison leads to identification of gaps and an outline of the necessary 
                                steps to close the gaps to improve business performance. The evaluation also enables 
                                us to determine your company’s readiness to implement an enhanced business plan.
                                <br /><br /> 
                                Our team presents its observations and findings, blended with a tailored education program,
                                to the leadership team, along with a prioritized list of gap-closing recommendations.
                                <br /><br /> 
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

    @include('__includes.parallax-process')

    <!-- Plan -->
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-20--xs g-padding-y-20--xsm">
            <div class="row">
                <div class="col-md-12 g-margin-b-10--xs g-margin-b-20--lg g-padding-y-40--xs">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <h3 class="g-font-size-28--xs g-font-weight--700 g-text-center--xs g-color--primary g-margin-b-30--xs">Business Performance Management</h3>
                        <div class="s-plan-v1 g-bg-color--primary g-padding-y-60--xs g-padding-x-80--xs">
                            <p class="g-font-size-16--xs text-justify g-color--white g-font-weight--500 g-margin-b-30--xs g-padding-x-20--xs">
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
                            <p class="g-font-size-14--xs g-color--dark g-margin-b-30--xs g-padding-x-80--xs">
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-padding-x-40--xs">
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

                <!-- Plan -->
                <div class="col-md-8 g-margin-b-10--xs g-margin-b-20--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-left--xs g-bg-color--white g-padding-y-5--xs g-padding-x-30--xs">
                            <p class="g-font-size-16--xs g-color--primary g-margin-b-30--xs g-padding-x-100--xs">
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-padding-x-40--xs">
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