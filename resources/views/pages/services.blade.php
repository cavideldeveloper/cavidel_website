@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Our Services
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')
        <!-- Plan -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Our Services</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Finding your business</h2>
                </div>

                <div class="row g-row-col--5">
                    <!-- Plan -->
                    <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-archive"></i>
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> Support Services</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Diagnostic Review</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Selection Assistance</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Selection Assistance</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Strategy Implementation Support</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Outsourcing & Project Management</li>
                                </ul>
                                <button type="button" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs">Request a Meeting</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->

                    <!-- Plan -->
                    <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-package"></i>
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> Performance Improvement </h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Performance Improvement plan (PIP) </li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Policies Documentation</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Implementation of IT Strategy</li>

                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Key performance indicators (KPIs)</li>

                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Increase productivity using automation tool</li>
                                </ul>
                                <button type="button" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs">Request a Meeting</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->
                    
                    <!-- Plan -->
                    <div class="col-md-4">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-gift"></i>
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Software Development</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Mobile-Optimized Website</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Powerful Documentation</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> IT Service Management</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Information Systems Audit</li>
                                    
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Systems Integration</li>
                                    
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> 24/7 Customer Support</li>
                                </ul>
                                <button type="button" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs">Request a Meeting</button>
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