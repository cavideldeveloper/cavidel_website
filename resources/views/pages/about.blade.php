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
	        <div class="col-md-12 g-padding-y-60--sm g-padding-y-80--md s-plan-v1">
	            <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">About Cavidel Limited</p>
	            <p class="g-font-size-18--sm g-padding-x-80--md text-justify g-font-weight--500">
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
                    <p class="g-font-size-16--sm g-padding-x-30--md text-justify g-font-weight--500">
                    	Our approach to work is based on our depth of experience, 
                    	a high level of professionalism, drive for quality and a customer-centred 
                    	philosophy. Our commitment to collaborative working and track record of 
                    	successful projects underpin our capacity to deliver excellent services
                    	to achieve excellent results at all times.
						{{-- We work hard at relationships with our clients, our partners as well as our stakeholders. 
						We recognise the importance of inclusion and participation and this allows us to balance all
						interests in our partnerships with clients, consultants, stakeholders and the communities we work in. --}}
					</p>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-padding-y-40--md g-margin-b-10--xs g-margin-b-0--lg s-plan-v1">

                    <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">Why Partner with Us</p>
                    <p class="g-font-size-16--sm g-padding-x-30--md text-justify g-font-weight--500">
                        Our people have great passion for process improvement to reduce wastages in the workplace. 
                        Our team consists of experienced, talented young individuals with fresh minds that always 
                        come up with new and innovative ideas that can help your business in its pursuit for growth.
                        <br /><br /><br />

                        {{-- Our work experience had centred around continuous process review and automation 
                        across various industries. --}}
                    </p>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-padding-y-40--md g-margin-b-10--xs g-margin-b-10--lg s-plan-v1">
                    <p class="text-uppercase g-text-center--xs g-font-size-16--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">Our People</p>
                    <p class="g-font-size-16--sm g-padding-x-30--md text-justify g-font-weight--500">
                        With a combined experience of over 38 years in finance and consulting services, 
                        our people are well informed to provide quality service and support assistance
                        for any project we are engaged in. Cavidel Limited prides itself with staff that have work
                        experience that cuts across five different Nigerian banks, international professional
                        {{-- consulting firms, securities exchange, conglomerates and a real estate companies. 
                        Our people possess professional certifications to back up their experiences which made 
                        them well sought after within the industry they worked. --}}
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