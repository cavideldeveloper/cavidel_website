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
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs g-font-weight--700 animated bounceInDown"> Get To Know Us More</h1>
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
	        <div class="col-md-12 g-padding-y-60--sm g-padding-y-80--md s-plan-v1">
	            {{-- <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">About </p> --}}
                <p class="text-uppercase g-text-center--xs g-font-size-28--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">
                    About Us
                </p>
	            <p class="g-font-size-18--sm g-padding-x-80--md text-justify g-font-weight--500">
	            	Cavidel Limited is a technology and consulting company that helps businesses achieve business advantage using IT to reduce costs, improve productivity and increase efficiency in the delivery of impeccable customer service.
                </p> 

                <p class="g-font-size-18--sm g-padding-x-80--md text-justify g-font-weight--500">
                    We deliver our solution through detailed process review and automation of business and client integration processes. Our products are specially developed for financial markets, banking, human resources, health, real estate, agricultural systems etc.
                </p>

                <p class="g-font-size-18--sm g-padding-x-80--md text-justify g-font-weight--500">
                    Established in 2013, Cavidel Limited has evolved into a dynamic organisation through its long tradition and experience in working with conglomerates, financial services firms, consulting practices, public institutions, medical institutions etc. We take great pride in our reputation for consistently delivering quality services. 

				</p>
	        </div>
	    </div>
	</div>
	<!-- End About -->

	<!-- Plan -->
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-80--xsm">
            <div class="row g-margin-b-20--lg">
                <!-- Plan -->
                <div class="col-md-4 g-padding-y-40--md g-margin-b-10--xs g-margin-b-10--lg s-plan-v1">

                    <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">Our Apporoach</p>
                    <p class="g-font-size-16--sm g-padding-x-20--md text-justify g-font-weight--500">
                    	Our approach to work is anchored on assembling our multi-disciplinary team with dept of experience and expertise, driving a customer centric philosophy, developing sound work plans and facilitating reviews that drives the actualisation of clients’ strategic objectives.
                        <br /><br /><br />
					</p>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-padding-y-40--md g-margin-b-10--xs g-margin-b-0--lg s-plan-v1">

                    <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">Why Partner with Us</p>
                    <p class="g-font-size-16--sm g-padding-x-20--md text-justify g-font-weight--500">
                        Cavidel Limited’s management is recognised from its work performance with top leading financial organisations in Nigeria and with combined experience of over 38 years in the finance and consulting services. Partner with Cavidel Limited to create new business opportunities. Let’s grow business together.
                        <br /><br /><br />
                    </p>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-padding-y-40--md g-margin-b-10--xs g-margin-b-10--lg s-plan-v1">
                    <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">Our People</p>
                    <p class="g-font-size-16--sm g-padding-x-20--md text-justify g-font-weight--500">
                        Cavidel Limited prides itself with a team that have work experience that cuts across five different Nigerian banks, international professional consulting firms, securities, conglomerate and real estate companies. Behind Cavidel Limited is a team of highly innovative minds who are excellently supportive to teammates, friendly and organized.
                    </p>
                </div>
                <!-- End Plan -->

            </div>
        </div>
    </div>
    <!-- End Plan -->

     <!-- Meet the team -->
    <div class="g-bg-color--sky-light">
        <div class="container">
            <div class="row g-margin-b-10--lg g-text-center--xs">
                <p class="text-uppercase g-text-center--xs g-font-size-28--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">
                    Our team
                </p>
            </div>

            <!-- Team -->
            <div class="row g-margin-b-10--lg top-level">

            </div>
            <!-- End Team -->
            <!-- Team -->
            <div class="row g-margin-b-10--lg middle-level">

            </div>
            <!-- End Team -->
        </div>
    </div>
    <!-- End Plan -->

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
                        $(".middle-level").append(`
                            <div class="col-md-3 col-xs-6 g-full-width--xs">
                                <div class="" data-wow-duration=".3" data-wow-delay=".1s">
                                    <!-- Team -->
                                    <div class="g-margin-b-20--lg s-team-v1">
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

                    if(val.position == 'Software Developer' || val.position == "Data Analyst" || val.position == "Research Analyst" || val.position == "Consulting and Research"){
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

                    if(val.position == 'Founder/CEO' || val.position == "Senior Consultant" || val.position == "Senior Programmer" || val.position == "Director"){

                        $(".top-level").append(`

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
                                    
                                        <img class="img-responsive g-width-80-percent--xs" height="300" src="${val.avatar}" alt="Image">
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