@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Portfolio
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')
    <!--========== PROMO BLOCK ==========-->
    <div class="js__parallax-window" style="background: url(img/1920x1080/16.jpg) 50% 0 no-repeat fixed; height: 430px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <div class="g-margin-b-60--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs g-font-weight--700 animated bounceInDown">Agriculture and Technology</h1>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2">Experience our customize agro suit for Agriculture</p>
            </div>
            <a href="#js__scroll-to-section">
                <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
            </a>
        </div>
    </div>


    <!-- Plan -->
    <div class="g-bg-color--sky-light" id="web">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="row">
                <!-- Plan -->
                <div class="col-md-6 g-margin-b-10--xs g-margin-b-20--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="g-bg-color--white g-padding-y-20--xs">
                            <h3 class="g-font-size-28--xs g-font-weight--700 g-color--primary g-margin-b-30--xs">
                                Agro Technology
                            </h3>
                            <p class="g-margin-b-30--xs">
                                Integrating technology with agriculture starts here, AgroTech is your go-to technology solutions for agriculture. Scaling agriculture through technology
                            </p>

                            <h4>
                                Our approach
                            </h4>
                            <p>
                                Technological progress is a key contributor to agricultural sustainability.  That is why we are committed to designing high tech solutions for farmers. In achieving this, we start by looking at the farmer’s individual situation and tailor our agricultural solutions to his or her specific requirements in a user-friendly manner.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Plan -->
                <div class="col-md-6 g-margin-b-10--xs g-margin-b-20--lg">
                    <img class="s-plan-v1" src="{{asset('https://i.giphy.com/media/k6GLEHT4J90rD68EoD/giphy.webp')}}" width="100%" height="auto">    
                </div>
            </div>
        </div>
    </div>

    <!--========== END PROMO BLOCK ==========-->
    @include('__includes.agro-technology')
	@include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
<!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-4-col-slider.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->
	<script type="text/javascript">
		// send contact message

	</script>
@endsection