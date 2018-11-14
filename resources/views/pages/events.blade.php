@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Contact Us
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

	<!--========== PROMO BLOCK ==========-->
    <div class="g-bg-position--center js__parallax-window" style="background: url(img/1920x1080/09.jpg) 50% 0 no-repeat fixed;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">15 years experience</p>
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Cavidel Team</h1>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->

    <!--========== PAGE CONTENT ==========-->
    <!-- Speakers -->
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="row g-overflow--hidden">
            <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                <!-- Speaker -->
                <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                    <img class="img-responsive g-width-100-percent--xs" src="img/400x400/02.jpg" alt="Image">
                    <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                        <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                            <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">Anna Kusaikina</h4>
                        </div>
                        <p class="g-font-weight--700">Founder</p>
                        <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
                    </div>
                </div>
                <!-- End Speaker -->
            </div>
            <div class="col-xs-6 g-full-width--xs">
                <!-- Speaker -->
                <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                    <img class="img-responsive g-width-100-percent--xs" src="img/400x400/01.jpg" alt="Image">
                    <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                        <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                            <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">Lucas Richardson</h4>
                        </div>
                        <p class="g-font-weight--700">CEO</p>
                        <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
                    </div>
                </div>
                <!-- End Speaker -->
            </div>
        </div>
    </div>
    <!-- End Speakers -->

    <!-- Team -->
    <div class="row g-row-col--0">
        <div class="col-md-3 col-xs-6 g-full-width--xs">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                <!-- Team -->
                <div class="s-team-v1">
                    <img class="img-responsive g-width-100-percent--xs" src="img/400x400/05.jpg" alt="Image">
                    <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                        <h2 class="g-font-size-18--xs g-margin-b-5--xs">Shola Fayiga</h2>
                        <span class="g-font-size-15--xs g-color--text"><i>Software Developer</i></span>
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>
        <div class="col-md-3 col-xs-6 g-full-width--xs">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                <!-- Team -->
                <div class="s-team-v1">
                    <img class="img-responsive g-width-100-percent--xs" src="img/400x400/04.jpg" alt="Image">
                    <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                        <h3 class="g-font-size-18--xs g-margin-b-5--xs">Ife Akinsiende</h3>
                        <span class="g-font-size-15--xs g-color--text"><i>HR</i></span>
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>
        <div class="col-md-3 col-xs-6 g-full-width--xs">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                <!-- Team -->
                <div class="s-team-v1">
                    <img class="img-responsive g-width-100-percent--xs" src="img/400x400/05.jpg" alt="Image">
                    <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                        <h4 class="g-font-size-18--xs g-margin-b-5--xs">Rilwan Balogun</h4>
                        <span class="g-font-size-15--xs g-color--text"><i>Software Developer</i></span>
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>
        <div class="col-md-3 col-xs-6 g-full-width--xs">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                <!-- Team -->
                <div class="s-team-v1">
                    <img class="img-responsive g-width-100-percent--xs" src="img/400x400/06.jpg" alt="Image">
                    <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                        <h4 class="g-font-size-18--xs g-margin-b-5--xs">Yinka Sulieman</h4>
                        <span class="g-font-size-15--xs g-color--text"><i>Software Analyst</i></span>
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>
    </div>
    <!-- End Team -->

    <!-- Team -->
    <div class="row g-row-col--0">
        <div class="col-md-3 col-xs-6 g-full-width--xs">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                <!-- Team -->
                <div class="s-team-v1">
                    <img class="img-responsive g-width-100-percent--xs" src="img/400x400/05.jpg" alt="Image">
                    <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                        <h2 class="g-font-size-18--xs g-margin-b-5--xs">Ekpoto Bernard</h2>
                        <span class="g-font-size-15--xs g-color--text"><i>Software Developer</i></span>
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>
        <div class="col-md-3 col-xs-6 g-full-width--xs">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                <!-- Team -->
                <div class="s-team-v1">
                    <img class="img-responsive g-width-100-percent--xs" src="img/400x400/05.jpg" alt="Image">
                    <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                        <h3 class="g-font-size-18--xs g-margin-b-5--xs">Stanley Umehanoeze</h3>
                        <span class="g-font-size-15--xs g-color--text"><i>Software Developer</i></span>
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>
        <div class="col-md-3 col-xs-6 g-full-width--xs">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                <!-- Team -->
                <div class="s-team-v1">
                    <img class="img-responsive g-width-100-percent--xs" src="img/400x400/05.jpg" alt="Image">
                    <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                        <h4 class="g-font-size-18--xs g-margin-b-5--xs">Tejumola David</h4>
                        <span class="g-font-size-15--xs g-color--text"><i>Software Developer</i></span>
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>
        <div class="col-md-3 col-xs-6 g-full-width--xs">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                <!-- Team -->
                <div class="s-team-v1">
                    <img class="img-responsive g-width-100-percent--xs" src="img/400x400/05.jpg" alt="Image">
                    <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                        <h4 class="g-font-size-18--xs g-margin-b-5--xs">Temidayo Onifade</h4>
                        <span class="g-font-size-15--xs g-color--text"><i>Software Developer</i></span>
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>
    </div>
    <!-- End Team -->

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
	<script type="text/javascript">
		// send contact message

	</script>
@endsection