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
            {{-- <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">15+ years experienced</p> --}}
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1 g-font-weight--700 animated bounceInDown">Our Team</h1>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->

    <!--========== PAGE CONTENT ==========-->
    <!-- Speakers -->
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="row g-overflow--hidden">
            <div class="col-xs-12 g-full-width--xs ceo-card">
            </div>

            <div class="top-level">
            </div>
        </div>
    </div>
    <!-- End Speakers -->

    <!-- Team -->
    <div class="row g-row-col--0 all-developers">

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

    <!-- SHOW MORE INFORMATION MODAL -->
    <div class="modal fade" id="show-more-modal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          {{-- <div class="modal-header">
            <h4>About [name]</h4>
          </div> --}}
          <div class="modal-body">
            <div class="ceo-card-review"></div>
          </div>
          {{-- <div class="modal-footer">
            <div class="pull-right">
              <button class="btn btn-flat" type="button" data-dismiss="modal">
                close
              </button>
            </div>
          </div>     --}}
        </div>
      </div>
    </div>

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	<script type="text/javascript">
		// load modules
        loadTeamMembers();

        // load team members
        function loadTeamMembers() {
            $.get('{{ url('get/all/team/member') }}', function(data) {
                $(".all-developers").html("");
                $(".ceo-card").html("");
                $(".top-level").html("");
                $.each(data, function(index, val) {
                    
                    if(val.position == 'HR'){
                        $(".all-developers").append(`
                            <div class="col-md-3 col-xs-6 g-full-width--xs">
                                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                    <!-- Team -->
                                    <div class="s-team-v1">
                                        <img class="img-responsive g-width-100-percent--xs" src="${val.avatar}" alt="Image">
                                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                                            <h2 class="g-font-size-18--xs g-margin-b-5--xs">${val.firstname} ${val.lastname}</h2>
                                            <span class="g-font-size-15--xs g-color--text"><i> ${val.position}</i></span>
                                        </div>
                                    </div>
                                    <!-- End Team -->
                                </div>
                            </div>
                        `);
                    }

                    if(val.position == 'Software Developer'){
                        $(".all-developers").append(`
                            <div class="col-md-3 col-xs-6 g-full-width--xs">
                                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                    <!-- Team -->
                                    <div class="s-team-v1">
                                        <img class="img-responsive g-width-100-percent--xs" src="${val.avatar}" alt="Image">
                                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                                            <h2 class="g-font-size-18--xs g-margin-b-5--xs">${val.firstname} ${val.lastname}</h2>
                                            <span class="g-font-size-15--xs g-color--text"><i> ${val.position}</i></span>
                                        </div>
                                    </div>
                                    <!-- End Team -->
                                </div>
                            </div>
                        `);
                    }

                    if(val.position == 'Software Analyst'){
                        $(".all-developers").append(`
                            <div class="col-md-3 col-xs-6 g-full-width--xs">
                                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                    <!-- Team -->
                                    <div class="s-team-v1">
                                        <img class="img-responsive g-width-100-percent--xs" src="${val.avatar}" alt="Image">
                                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                                            <h2 class="g-font-size-18--xs g-margin-b-5--xs">${val.firstname} ${val.lastname}</h2>
                                            <span class="g-font-size-15--xs g-color--text"><i> ${val.position}</i></span>
                                        </div>
                                    </div>
                                    <!-- End Team -->
                                </div>
                            </div>
                        `);
                    }

                    if(val.position == 'Software Engineer'){
                        $(".all-developers").append(`
                            <div class="col-md-3 col-xs-6 g-full-width--xs">
                                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                    <!-- Team -->
                                    <div class="s-team-v1">
                                        <img class="img-responsive g-width-100-percent--xs" src="${val.avatar}" alt="Image">
                                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                                            <h2 class="g-font-size-18--xs g-margin-b-5--xs">${val.firstname} ${val.lastname}</h2>
                                            <span class="g-font-size-15--xs g-color--text"><i> ${val.position}</i></span>
                                        </div>
                                    </div>
                                    <!-- End Team -->
                                </div>
                            </div>
                        `);
                    }

                    if(val.position == 'CEO/Founder'){
                        $(".ceo-card").append(`
                            <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                                <img class="img-responsive g-width-100-percent--xs" src="${val.avatar}" alt="Image">
                                <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                                    <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                        <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">${val.firstname} ${val.lastname}</h4>
                                    </div>
                                    <p class="g-font-weight--700">${val.position}</p>
                                    <a href="javascript:void(0);" onclick="showMoreModal()" style="text-decoration:none;">
                                        <p>${val.description}</p>
                                    </a>
                                </div>
                            </div>
                        `)
                        $(".ceo-card-review").append(`
                            <div class="center-block g-box-shadow__dark-lightest-v1">
                                <img class="img-responsive g-width-50-percent--xs" src="${val.avatar}" alt="Image">
                                <div class="g-position--overlay g-padding-x-10--xs g-padding-y-30--xs g-margin-t-o-40--xs">
                                    <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                        <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">${val.firstname} ${val.lastname}</h4>
                                    </div>
                                    <p class="g-font-weight--700">${val.position}</p>
                                    <p class="g-font-weight--500">
                                        Dipo Odeyemi is the Founder & Chief Executive Officer of CAVIDEL Limited. Prior to his role in CAVIDEL, he was one of the pioneering staff of Nigeria’s foremost Debt Capital Market Securities Exchange (FMDQ OTC Securities Exchange) where he was responsible to build the Market Operations & Technology Division as a Senior Vice President (SVP). 

                                         <br /><br />
                                         He holds an Executive Masters in Business Administration (MBA) and a Bachelor’s degree in Computer Engineering, both from the Obafemi Awolowo University, Ile-Ife, Nigeria. <br /><br />He is a Certified Information System Auditor (CISA), a Certified Information Security Manager (CISM), Certified in the Governance of Enterprise IT (CGEIT) and Certified in Risk and Information Systems Control (CRISC) from the Information Systems Audit and Control Association (ISACA), USA. <br /><br />He is also a certified PRINCE2 (Project Management) Practitioner and certified by the British Computer Society on the use of best practice methodologies in Information Technology Service Management. <br /><br /> He is an alumnus of the Lagos Business School, where he attended the Senior Management Program (SMP 37) and was elected as the president of his class. He attended international conferences in Amsterdam and Kenya where he provided insights as a panellist on securing the inter-bank market using over-the-counter securities exchange structure.
 <br /><br />
Dipo’s twenty-five (25) years work experience cuts across diverse industry sectors, including Financial Markets, Banking, Consulting and Technology Services.
 
Dipo’s experience extended to the National level when he worked as the pioneer project manager with other stakeholders in the Nigerian banking industry to implement an industry-wide Biometric Verification Number (BVN) system. During his service at FMDQ, he developed and implemented the first secure OTC derivatives trading and clearing system in Nigeria (FMDQ Futures Trading & Reporting System – FFTRS) used by the Central Bank of Nigeria (CBN) to activate the Naira-settled OTC FX Futures market. He also developed the pension dealing and surveillance system (PenDealer) to enhance collaboration between FMDQ, the Pension Commission and its Members (mostly Pension Fund Administrators). 

<br /><br />He project managed and championed the issuance of a clearing and settlement license for the fixed income market in Nigeria.

His exploits in CAVIDEL include leading and directing a team of developers to develop and integrate bespoke software solutions with payment systems in Nigeria (such as the Nigeria Interbank Settlement System, Interswitch and Paystack) to deliver real-time transfer of funds and settlement of bills within a secure portal for clients of CAVIDEL

                                    </p>
                                </div>
                            </div>
                        `)
                    }

                    if(val.position == 'Business Manager'){
                        $(".top-level").append(`
                            <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                                <!-- Speaker -->
                                <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                                    <img class="img-responsive g-width-100-percent--xs" src="${val.avatar}" alt="Image">
                                    <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                                        <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                            <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">${val.firstname} ${val.lastname}</h4>
                                        </div>
                                        <p class="g-font-weight--700">${val.position}</p>
                                        <p>${val.description}</p>
                                    </div>
                                </div>
                                <!-- End Speaker -->
                            </div>
                        `);
                    }

                    if(val.position == 'Senior Consultant/Process Analyst'){
                        $(".top-level").append(`
                            <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                                <!-- Speaker -->
                                <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                                    <img class="img-responsive g-width-100-percent--xs" src="${val.avatar}" alt="Image">
                                    <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                                        <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                            <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">${val.firstname} ${val.lastname}</h4>
                                        </div>
                                        <p class="g-font-weight--700">${val.position}</p>
                                        <p>${val.description}</p>
                                    </div>
                                </div>
                                <!-- End Speaker -->
                            </div>
                        `);
                    }
                });
            }); 
        }

        // show more modal
        function showMoreModal() {
           $("#show-more-modal").modal(); 
        }
	</script>
@endsection