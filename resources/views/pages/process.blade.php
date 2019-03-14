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
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs g-font-weight--700 animated bounceInDown">Process Re-engineering</h1>
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
                        <div class="s-plan-v1 g-bg-color--primary g-padding-y-100--xs g-padding-x-100--xs">
                            <p class="g-font-size-16--xs g-color--white g-margin-b-30--xs g-padding-x-100--xs">
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
                                    <li class="g-color--dark"> A need to improve performance, but not at the cost of undoing the internal controls and compliance gains of the past few years</li>
                                    <li class="g-color--dark"> Globalization drives an increasing number of acquisitions, divestitures and outsourcing of core functionality. This leads to greater operational challenges arising from the associated re-structuring</li>
                                    <li class="g-color--dark"> Challenges translating technology investments into significant sustainable business benefits</li>
                                    <li class="g-color--dark"> Market demands for shorter product and service development life cycles, better value, and greater security</li>
                                    <li class="g-color--dark"> The need to compete globally for market share and scarce resources</li>
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
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-left--xs g-bg-color--white g-padding-y-5--xs g-padding-x-30--xs">
                            <p class="g-font-size-16--xs g-color--primary g-margin-b-30--xs g-padding-x-100--xs">
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs">
                                    <li class="g-color--dark">Documented policies and procedures with considerations for risks, controls and key performance indicators (KPIs)</li>
                                    <li class="g-color--dark">Organization structure and job description aligned with business objectives and performance goals</li>
                                    <li class="g-color--dark">Business/functional operating model design</li>
                                    <li class="g-color--dark">Creation of an IT Strategy with implementation blueprint.</li>
                                    <li class="g-color--dark">Deployment of desktop automation tools for critical business functions to increase productivity at the operational level</li>
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

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	<script type="text/javascript">
		// send contact message

	</script>
@endsection