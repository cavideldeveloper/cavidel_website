@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | About
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

	{{-- <!--========== PROMO BLOCK ==========-->
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
    <!--========== END PROMO BLOCK ==========--> --}}

    <!--========== PROMO BLOCK ==========-->
    <div class="js__parallax-window" style="background: url(img/1920x1080/27.jpg) 50% 0 no-repeat fixed; height: 290px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <div class="g-margin-b-60--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs g-font-weight--700 animated bounceInDown">About Us</h1>
            </div>
            <a href="#js__scroll-to-section">
                <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
            </a>
        </div>
    </div>


	<!--========== PAGE CONTENT ==========-->
	<!-- About -->
	<div class="container g-padding-y-80--sm g-padding-y-20--md" id="how-we-work">
	    <div class="row g-hor-centered-row--md g-row-col--5">
	        <div class="col-md-2 g-padding-y-60--sm g-padding-y-60--md">
	            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
	                <img class="img-responsive" width="100%" src="img/400x500/05.jpg" alt="Image">
	            </div>
	        </div>
	        <div class="col-md-3 g-padding-y-60--sm g-padding-y-60--md">
	            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
	                <img class="img-responsive" width="100%" src="img/400x550/01.jpg" alt="Image">
	            </div>
	        </div>

	        <div class="col-md-1"></div>

	        <div class="col-md-6 g-padding-y-60--sm g-padding-y-60--md">
	            
	            <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">About Cavidel Limited</p>
	            <p class="g-font-size-18--sm text-justify g-font-weight--500">
	            	Cavidel Limited is a process automation company that helps businesses to align/re-align 
	            	their business units and overall strategies with operational processes and information 
	            	technology to reduce cost, improve productivity and increase efficiency. 
					We are a dynamic technology Company with focus on financial technologies and 
					provision of enterprise resource management tools. 
					We deliver our solution through detailed process review and automation of
					business and client integration processes. Our products are specially developed for 
					financial markets, banking, human resources, e-commerce, real estates, agricultural systems etc.
					Established in 2013, Cavidel Limited has evolved into a dynamic organisation through its 
					long tradition and experience in working with conglomerates, financial services firms, 
					consulting practices, public institutions, medical institutions etc.
					We take great pride in our reputation for consistently delivering quality services. 
					We use our ingenuity to save our clients time and money, reduce risks, 
					increase efficiency and maximise sustainable outcomes. 
					We do this through innovative thinking, international perspectives, 
					local knowledge and the immense experience and technical know-how of our team.
				</p>
	        </div>
	    </div>
	</div>
	<!-- End About -->

	 <!-- Plan -->
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="row g-margin-b-120--lg">
                <!-- Plan -->
                <div class="col-md-8 g-padding-y-40--md g-margin-b-10--xs g-margin-b-10--lg s-plan-v1">
                	<div class="cavi-circle">
                		<img src="{{ asset('img/cavi-icon.png') }}" width="90" style="margin-left: 0.1rem;margin-top: 1.3rem;" height="auto">
                	</div>
                    <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">Our Apporoach to Work</p>
                    <p class="g-font-size-16--sm text-justify g-font-weight--500">
                    	Our approach to work is based on our depth of experience, 
                    	a high level of professionalism, drive for quality and a customer-centred 
                    	philosophy. Our commitment to collaborative working and track record of 
                    	successful projects underpin our capacity to deliver excellent services
                    	to achieve excellent results at all times.
						We work hard at relationships with our clients, our partners as well as our stakeholders. 
						We recognise the importance of inclusion and participation and this allows us to balance all
						interests in our partnerships with clients, consultants, stakeholders and the communities we work in.
					</p>
                </div>
                <!-- End Plan -->
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-10--lg s-plan-v1">
                    {{-- <p>Core values contents here...</p> --}}
                </div>
                <!-- End Plan -->
            </div>

            <div class="row g-margin-b-120--lg">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg s-plan-v1">
                    {{-- <p>Core values contents here...</p> --}}
                </div>
                <!-- End Plan -->
                <!-- Plan -->
                <div class="col-md-8 g-padding-y-40--md g-margin-b-10--xs g-margin-b-0--lg s-plan-v1">
                	<div class="cavi-circle">
                		<img src="{{ asset('img/cavi-icon.png') }}" width="90" style="margin-left: 0.1rem;margin-top: 1.3rem;" height="auto">
                	</div>
                    <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">Why You Should Partner with Us</p>
                    <p class="g-font-size-16--sm text-justify g-font-weight--500">
                    	Our people have great passion for process improvement to reduce wastages in the workplace. 
                    	Our team consists of experienced, talented young individuals with fresh minds that always 
                    	come up with new and innovative ideas that can help your business in its pursuit for growth. 
                    	Our work experience had centred around continuous process review and automation 
                    	across various industries.
                    </p>
                </div>
                <!-- End Plan -->
            </div>

            <div class="row g-margin-b-120--lg">
                <!-- Plan -->
                <div class="col-md-8 g-padding-y-40--md g-margin-b-10--xs g-margin-b-10--lg s-plan-v1">
                	<div class="cavi-circle">
                		<img src="{{ asset('img/cavi-icon.png') }}" width="90" style="margin-left: 0.1rem;margin-top: 1.3rem;" height="auto">
                	</div>
                    <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">Why You Should Partner with Us</p>
                    <p class="g-font-size-16--sm text-justify g-font-weight--500">
                    	Our people have great passion for process improvement to reduce wastages in the workplace. 
                    	Our team consists of experienced, talented young individuals with fresh minds that always come
                    	up with new and innovative ideas that can help your business in its pursuit for growth. 
                    	Our work experience had centred around continuous process review and automation across 
                    	various industries.
					</p>
                </div>
                <!-- End Plan -->
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-10--lg s-plan-v1">
                    {{-- <p>Core values contents here...</p> --}}
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>
    <!-- End Plan -->

    <!-- Feedback Form -->
    <div class="g-position--relative g-bg-color--dark-light">
        <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Contact Us</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Get in Touch</h2>
            </div>
            <div class="row g-row-col--5 g-margin-b-80--xs">
                <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Email</h4>
                        <p class="g-color--white-opacity">consultant@cavidel.com</p>
                    </div>
                </div>
                <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-map-alt"></i>
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Address</h4>
                        <p class="g-color--white-opacity">Block B12, Flat 402, 1004 Housing Estate, Victoria Island, Lagos.</p>
                    </div>
                </div>
                <div class="col-xs-4 g-full-width--xs">
                    <div class="g-text-center--xs">
                        <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Call at</h4>
                        <p class="g-color--white-opacity">+ (234) 9067354599</p>
                    </div>
                </div>
            </div>
            <form class="center-block g-width-500--sm g-width-550--md" onsubmit="return contactSupport()">
	            <div class="g-margin-b-30--xs">
	                <input type="text" class="form-control s-form-v3__input" id="c-name" placeholder="* Name" required="">
	            </div>
	            <div class="row g-row-col-5 g-margin-b-50--xs">
	                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
	                    <input type="email" class="form-control s-form-v3__input" id="c-email" placeholder="* Email" required="">
	                </div>
	                <div class="col-sm-6">
	                    <input type="text" class="form-control s-form-v3__input" id="c-phone" placeholder="* Phone" required="">
	                </div>
	            </div>
	            <div class="g-margin-b-80--xs">
	                <textarea class="form-control s-form-v3__input" id="c-message" rows="5" placeholder="* Your message" required=""></textarea>
	            </div>
	            <div class="g-text-center--xs">
	                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
	            </div>
	        </form>
        </div>
        <img class="s-mockup-v2" src="img/mockups/pencil-01.png" alt="Mockup Image">
    </div>
    <!-- End Feedback Form -->
    <!--========== END PAGE CONTENT ==========-->

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	
@endsection