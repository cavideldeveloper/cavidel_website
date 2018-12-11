@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Contact Us
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

	<!--========== PROMO BLOCK ==========-->
    <div class="g-bg-position--center js__parallax-window" style="background: url(img/1920x1080/09.jpg) 50% 0 no-repeat fixed;height: 320px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Career</h1>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->
     <section class="background-11">
        <div class="container">
            <br />
            <div class="row p-2">
                <div class="col-lg-8" style="box-shadow: 1px 1px 4px 1px #CCC;">
                    <div class="overflow-hidden g-text-left--xs g-margin-t-20--xs g-margin-b-20--xs" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <h4 data-zanim='{"delay":0.1}'>Apply Today</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="background-white p-5 radius-secondary">
                                <h1 class="lead">Join our Innovative Team</h1>
                                <h3 class="g-text-center--xs g-margin-t-10--xs g-margin-b-10--xs">Application Form</h3>
                                <form method="post" action="{{ url('send/application/form') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Firstname</label>
                                                <input type="text" placeholder="Enter first name" name="firstname" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Lastname</label>
                                                <input type="text" placeholder="Enter last name" name="lastname" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" placeholder="Enter your email address" name="email" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" maxlength="11" placeholder="Enter mobile number" name="mobile" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Describe more about your self</label>
                                                <textarea placeholder="Tell us about your self..." name="description" class="form-control" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea placeholder="Enter address here..." name="address" class="form-control" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Attach a Cover Letter <span class="small">(Only pdf format)</span></label>
                                                <input type="file" name="letter" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Attach a Resume <span class="small">(Only pdf format)</span>
                                                </label>
                                                <input type="file" name="resume" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button class="btn btn-primary">
                                                    Submit Application
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="mb-3">Related Articles</h5>
                            <div class="background-white pb-7 radius-secondary">
                                <div class="owl-carousel owl-theme owl-nav-outer owl-dot-round mt-4" data-options='{"items":1}'>
                                    <div class="item">
                                        <div class="background-white pb-4 h-100 radius-secondary">
                                            <img class="img-responsive" src="{{ asset('img/career/c-01.jpg') }}" alt="Featured Image">
                                            <div class="px-4 pt-4">
                                                <a href="javascript:void(0);"><h5>Tax impacts of lease mean accounting change</h5></a>
                                                <p class="color-7">By Paul O'Sullivan</p>
                                                <p class="mt-3">HMRC released a consultation document to flag some potential tax impacts that a forthcoming change...</p><a href="news.html#">Learn More &xrarr;</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-2 mt-5">
                        <div class="col-md-12">
                            <div class="background-white p-5 radius-secondary">
                                <h5>Tags</h5>
                                <ul class="nav tags mt-3 fs--1">
                                    <li style="float: left;" class="btn btn-default btn-sm"><a class="btn btn-sm btn-outline-primary m-1 p-2" href="javascript:void(0);">Advisory</a></li>
                                    <li style="float: left;" class="btn btn-default btn-sm"><a class="btn btn-sm btn-outline-primary m-1 p-2" href="javascript:void(0);">Finance</a></li>
                                    <li style="float: left;" class="btn btn-default btn-sm"><a class="btn btn-sm btn-outline-primary m-1 p-2" href="javascript:void(0);">Ideas</a></li>
                                    <li style="float: left;" class="btn btn-default btn-sm"><a class="btn btn-sm btn-outline-primary m-1 p-2" href="javascript:void(0);">Data</a></li>
                                    <li style="float: left;" class="btn btn-default btn-sm"><a class="btn btn-sm btn-outline-primary m-1 p-2" href="javascript:void(0);">Market</a></li>
                                    <li style="float: left;" class="btn btn-default btn-sm"><a class="btn btn-sm btn-outline-primary m-1 p-2" href="javascript:void(0);">Tax</a></li>
                                    <li style="float: left;" class="btn btn-default btn-sm"><a class="btn btn-sm btn-outline-primary m-1 p-2" href="javascript:void(0);">Consulting</a></li>
                                    <li style="float: left;" class="btn btn-default btn-sm"><a class="btn btn-sm btn-outline-primary m-1 p-2" href="javascript:void(0);">Accounting</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <br />

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
    @if(session('error'))
        <script type="text/javascript">
            swal(
                "Oops",
                "{{ session('error') }}",
                "error"
            );
        </script>
    @endif

    @if (session('success'))
        <script type="text/javascript">
            swal(
                "Sent!",
                "{{ session('success') }}",
                "success"
            );
        </script>
    @endif
@endsection