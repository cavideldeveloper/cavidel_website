@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Contact Us
@endsection

{{--  contents --}}
@section('contents')
    <style type="text/css">
        .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
            display: block;
            max-width: 100%;
            height: auto;
            margin-left: 30px;
        }

        .cavi-card {
            transition: 0.3s;
        }

        .cavi-card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
    </style>
	@include('__includes.header')

	<!--========== PROMO BLOCK ==========-->
    <div class="g-bg-position--center js__parallax-window" style="background: url(img/1920x1080/09.jpg) 50% 0 no-repeat fixed;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1 g-font-weight--700 animated bounceInDown">Our Team</h1>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->

    <!--========== PAGE CONTENT ==========-->
    <!-- Speakers -->
    <div class="container g-padding-y-80--xs g-padding-y-20--sm">
        <div class="row g-overflow--hidden">
        </div>
    </div>
    <!-- End Speakers -->

    <!-- Team -->
    <div class="row g-row-col--0 top-level">

    </div>
    <!-- End Team -->
    <!-- Team -->
    <div class="row g-row-col--0 middle-level">

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
            <div class="card-review"></div>
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
                    var avatar          = $("#avatar").val(val.avatar);
                    var firstname       = $("#firstname").val(val.firstname);
                    var lastname        = $("#lastname").val(val.lastname);
                    var position        = $("#position").val(val.position);
                    var description     = $("#description").val(val.description);
                    var sub_description = $("#sub_description").val(val.sub_description);
                    
                    if(val.position == 'HR'){
                        $(".all-developers").append(`
                            <div class="col-md-3 col-xs-6 g-full-width--xs">
                                <div class="" data-wow-duration=".3" data-wow-delay=".1s">
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
                        $(".middle-level").append(`
                            <div class="col-md-3 col-xs-6 g-full-width--xs">
                                <div class="" data-wow-duration=".3" data-wow-delay=".1s">
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
                        $(".middle-level").append(`
                            <div class="col-md-3 col-xs-6 g-full-width--xs">
                                <div class="" data-wow-duration=".3" data-wow-delay=".1s">
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
                        $(".middle-level").append(`
                            <input type="hidden" id="avatar_${val.id}" value="${val.avatar}">
                            <input type="hidden" id="firstname_${val.id}" value="${val.firstname}">
                            <input type="hidden" id="lastname_${val.id}" value="${val.lastname}">
                            <input type="hidden" id="position_${val.id}" value="${val.position}">
                            <input type="hidden" id="description_${val.id}" value="${val.description}">
                            <input type="hidden" id="sub_description_${val.id}" value="${val.sub_description}">

                            <div class="col-md-3 col-xs-6 g-full-width--xs">
                                <div class="" data-wow-duration=".3" data-wow-delay=".1s">
                                    <!-- Team -->
                                    <div class="s-team-v1">
                                    
                                        <img class="img-responsive g-width-80-percent--xs" src="${val.avatar}" alt="Image">
                                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                                        <a href="javascript:void(0);" onclick="showMoreModal(${val.id})">
                                            <h2 class="g-font-size-18--xs g-margin-b-5--xs">${val.firstname} ${val.lastname}</h2>
                                            <span class="g-font-size-15--xs g-color--text"><i> ${val.position}</i></span>
                                        </a>
                                        </div>
                                    
                                    </div>
                                    <!-- End Team -->
                                </div>
                            </div>
                        `);
                    }

                    if(val.position == 'Founder/CEO' || val.position == "Senior Consultant" || val.position == "Senior Programmer"){

                        $(".top-level").append(`

                            <input type="hidden" id="avatar_${val.id}" value="${val.avatar}">
                            <input type="hidden" id="firstname_${val.id}" value="${val.firstname}">
                            <input type="hidden" id="lastname_${val.id}" value="${val.lastname}">
                            <input type="hidden" id="position_${val.id}" value="${val.position}">
                            <input type="hidden" id="description_${val.id}" value="${val.description}">
                            <input type="hidden" id="sub_description_${val.id}" value="${val.sub_description}">

                            <div class="col-md-3">
                                <!-- Speaker -->
                                <div class="center-block g-box-shadow__dark-lightest-v1 g-width-50-percent--xs g-width-300--lg cavi-card">
                                    <img style="width: 90%;margin-left: 12px;" src="${val.avatar}" alt="Image">
                                    <div class="g-position--overlay g-padding-x-20--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                                        <div class="g-bg-color--primary g-padding-x-10--xs g-padding-y-10--xs g-margin-b-20--xs">
                                            <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">${val.firstname} ${val.lastname}</h4>
                                        </div>
                                        <p class="g-font-weight--700">${val.position}</p>
                                        <a href="javascript:void(0);" onclick="showMoreModal(${val.id})" style="text-decoration:none;text-align:justify;">
                                            <p>${val.sub_description}</p>
                                        </a>
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
        function showMoreModal(id) {
            var avatar = $("#avatar_"+id).val();
            var firstname = $("#firstname_"+id).val();
            var lastname = $("#lastname_"+id).val();
            var position = $("#position_"+id).val();
            var description = $("#description_"+id).val();
            var sub_description = $("#sub_description_"+id).val();

            $(".card-review").html(`
                <div class="center-block g-box-shadow__dark-lightest-v1">
                    <img class="img-responsive g-width-50-percent--xs" src="${avatar}" alt="Image">
                    <div class="g-position--overlay g-padding-x-10--xs g-padding-y-30--xs g-margin-t-o-40--xs">
                        <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                            <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">${firstname} ${lastname}</h4>
                        </div>
                        <p class="g-font-weight--700">${position}</p>
                        <p class="g-font-weight--500 text-justify">${description}</p>
                    </div>
                </div>
            `);
           $("#show-more-modal").modal(); 
        }
	</script>
@endsection