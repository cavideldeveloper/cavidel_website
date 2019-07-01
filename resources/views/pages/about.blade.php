@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | About
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

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
	        <div class="col-md-12 g-padding-y-60--sm g-padding-y-60--md">
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
                <div class="col-md-4 g-padding-y-40--md g-margin-b-10--xs g-margin-b-10--lg s-plan-v1">

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
                <div class="col-md-4 g-padding-y-40--md g-margin-b-10--xs g-margin-b-0--lg s-plan-v1">

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

                <!-- Plan -->
                <div class="col-md-4 g-padding-y-40--md g-margin-b-10--xs g-margin-b-10--lg s-plan-v1">
                    <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">Our People</p>
                    <p class="g-font-size-16--sm text-justify g-font-weight--500">
                        With a combined experience of over 38 years in finance and consulting services, 
                        our people are well informed to provide quality service and support assistance
                        for any project we are engaged in. Cavidel Limited prides itself with staff that have work
                        experience that cuts across five different Nigerian banks, international professional
                        consulting firms, securities exchange, conglomerates and a real estate companies. 
                        Our people possess professional certifications to back up their experiences which made 
                        them well sought after within the industry they worked.
                    </p>
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
	
@endsection