@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | About
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

	<!--========== PROMO BLOCK ==========-->
    <div class="g-fullheight--md js__parallax-window" style="background: url(img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">
        <div class="g-container--md g-text-center--xs g-ver-center--md g-padding-y-150--xs g-padding-y-0--md">
            <div class="g-margin-b-60--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs g-font-weight--700 animated bounceInDown">About Cavidel</p>
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">We are Creative & Innovative</h1>
                <p class="g-font-size-18--xs g-font-size-26--md g-color--white-opacity g-margin-b-0--xs">
                	Cavidel Limited is a process automation company that helps businesses to align/re-align their business units and overall strategies with operational processes and information technology to reduce cost, improve productivity and increase efficiency.
                </p>
            </div>
            <span class="g-display-block--xs g-display-inline-block--sm g-padding-x-5--xs g-margin-b-10--xs g-margin-b-0--sm">
                <a href="#how-we-work" class="text-uppercase s-btn s-btn-icon--md s-btn--primary-bg g-radius--50 g-padding-x-45--xs">Learn More</a>
            </span>
            <span class="g-display-block--xs g-display-inline-block--sm g-padding-x-5--xs g-margin-b-10--xs g-margin-b-0--sm">
                <a href="{{ url('contact') }}" class="text-uppercase s-btn s-btn-icon--md s-btn--white-brd g-radius--50 g-padding-x-65--xs">Hire Us</a>
            </span>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->

	<!--========== PAGE CONTENT ==========-->
	<!-- About -->
	<div class="container g-padding-y-80--xs g-padding-y-125--sm" id="how-we-work">
	    <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
	        <div class="col-sm-3 col-xs-6 g-hor-centered-row__col">
	            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
	                <img class="img-responsive" src="img/400x500/05.jpg" alt="Image">
	            </div>
	        </div>
	        <div class="col-sm-3 col-xs-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
	            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
	                <img class="img-responsive" src="img/400x550/01.jpg" alt="Image">
	            </div>
	        </div>
	        <div class="col-sm-1"></div>
	        <div class="col-sm-5 g-hor-centered-row__col">
	            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Fintech</p>
	            <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">Our Fintech Solutions</h2>
	            <p class="g-font-size-18--sm">Building a FinTech solution has become the next big thing in Africa, and in the past few years, we have successfully take over the financial service sector, building trading software and simulation system.</p>
	        </div>
	    </div>

	    <div class="row g-hor-centered-row--md g-row-col--5">
	        <div class="col-sm-3 col-xs-6 col-sm-push-6 g-hor-centered-row__col">
	            <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".2s">
	                <img class="img-responsive" src="img/400x550/02.jpg" alt="Image">
	            </div>
	        </div>
	        <div class="col-sm-3 col-xs-6 col-sm-push-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
	            <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
	                <img class="img-responsive" src="img/400x500/06.jpg" alt="Image">
	            </div>
	        </div>
	        <div class="col-sm-1"></div>
	        <div class="col-sm-5 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-right--md">
	            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Office automation</p>
	            <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">Data Automation</h2>
	            <p class="g-font-size-18--sm">
	            We provide end-to-end data processing across traditional and cutting-edge applications and technologies.<br />

	            Working together on the daily requires each individual to let the greater good of the team’s work surface, Cavidel limited has provided a standard solution, fully automated for easy work flow.
	            </p>
	        </div>
	    </div>
	</div>
	<!-- End About -->

	<!-- Process -->
	<div class="g-bg-color--primary-ltr">
	    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
	        <div class="g-text-center--xs g-margin-b-100--xs">
	            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Process</p>
	            <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">How it Works</h2>
	        </div>
	        <ul class="list-inline row g-margin-b-100--xs">
	            <!-- Process -->
	            <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--md">
	                <div class="center-block g-text-center--xs">
	                    <div class="g-margin-b-30--xs">
	                        <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">01</span>
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
	                        <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">02</span>
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
	                        <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">03</span>
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
	                        <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">04</span>
	                    </div>
	                    <div class="g-padding-x-20--xs">
	                        <h3 class="g-font-size-18--xs g-color--white">Release</h3>
	                        <p class="g-color--white-opacity">Now that your brand is all dressed up and ready to party.</p>
	                    </div>
	                </div>
	            </li>
	            <!-- End Process -->
	        </ul>

	        <div class="g-text-center--xs">
	            <a href="#js__scroll-to-appointment" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs">Hire Us</a>
	        </div>
	    </div>
	</div>
	<!-- End Process -->

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	
@endsection