@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Career
@endsection

{{--  contents --}}
@section('contents')
    <style type="text/css">
        .custom-card {
            color: #FFF;
        }
    </style>
    <input type="hidden" id="token" value="{{ csrf_token() }}" name="">
	@include('__includes.header')

	<!--========== PROMO BLOCK ==========-->
    <div class="g-bg-position--center js__parallax-window" style="background: url(img/1920x1080/09.jpg) 50% 0 no-repeat fixed;height: 320px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1 g-font-weight--700">Career</h1>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->

     <section class="background-11">
        <div class="g-position--relative">
            <div class="g-container--md g-padding-y-20--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-20--xs">
                    <p class="g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs g-font-weight--700 animated bounceInDown">We are Hiring</p>
                </div>
                
                    {{-- <div id="list-all-jobs"></div> --}}
                <form method="post" onsubmit="return submitGuestApplication()" class="contact-form center-block" enctype="multipart/form-data">
                    <input type="hidden" id="JobPlacementRef" name="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div>
                                    <label for="job_title">Job Title</label>
                                    <span class="pull-right" id="view-jobs" style="display: none;">
                                        <a href="javascript:void(0);" onclick="viewJob()" class="">
                                            view available jobs
                                        </a>
                                    </span>
                                </div>
                                <select name="" class="form-control" onchange="fetchSelectedJob()" id="job_title" required="">
                                    <option value=""> -- select available job placement -- </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Firstname</label>
                                <input type="text" placeholder="Enter first name" name="firstname" id="firstname" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lastname</label>
                                <input type="text" placeholder="Enter last name" name="lastname" id="lastname" class="form-control" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Enter your email address" name="email" id="email" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" maxlength="11" placeholder="Enter mobile number" name="mobile" id="mobile" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Describe more about your self</label>
                                <textarea placeholder="Tell us about your self..." name="description" id="description" class="form-control" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea placeholder="Enter address here..." name="address" id="address" class="form-control" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="letter">Attach a Cover Letter <span class="small">(Only pdf format)</span></label>
                                <input type="file" name="letter" id="letter" accept="application/pdf" class="form-control" onchange="pushLetterToBase64Format()" required="">
                                <input type="hidden" id="letter_base64" name="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="resume">Attach a Resume <span class="small">(Only pdf format)</span>
                                </label>
                                <input type="file" name="resume" id="resume" accept="application/pdf" class="form-control" onchange="pushResumeToBase64Format()" required="">
                                <input type="hidden" id="resume_base64" name="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="" id="gender">
                                    <option value=""> -- select gender -- </option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="age_range">Age range</label>
                                <select name="" class="form-control" id="age_range" required="">
                                    <option value=""> -- select age range -- </option>
                                    <option value="25">25</option>
                                    <option value="26-39">26-39</option>
                                    <option value="30-35">30-35</option>
                                    <option value="Above 35">Above 35</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="work_experience">Years of work experience</label>
                                <input type="number" min="0" step="1" id="work_experience" placeholder="Eg. 3" name="" class="form-control" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="skills">Skills</label>
                                <input type="text" id="skills" placeholder="Eg, Java, PHP etc." name="" class="form-control" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div>
                                    <label for="competency">Competency (between <span id="range_value"></span> - 5)</label>
                                </div>
                                <input type="range" onchange="getRangeValue()" id="competency" name="" min="0" max="5" class="form-control" value="0" required="">
                            </div>
                        </div>
                    </div>

                    <br />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="text-uppercase btn btn-primary">
                                    Submit Application
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- SHOW APPLY MODAL -->
    <div class="modal fade" id="display-apply-modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>APPLY NOW</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <div class="pull-right">
                        <button class="btn btn-flat" type="button" data-dismiss="modal">
                            close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script type="text/javascript">
        // getAllJobPlacement();
        getRangeValue();
        getInterviewCategory();

        $(document).ready(function($) {
            $("#gender").selectize({
                create: true,
                sortField: {field: 'text'}
            });  

            $("#age_range").selectize({
                create: true,
                sortField: {field: 'text'}
            });    
        });

        async function pushLetterToBase64Format(argument) {
            var letter_file = document.querySelector(`input[name=letter]`).files[0];
            var letter_url = await getBase64(letter_file).then(val => val);
            $("#letter_base64").val(letter_url);
        }

        async function pushResumeToBase64Format(argument) {
            var resume_file = document.querySelector(`input[name=resume]`).files[0];
            var resume_url = await getBase64(resume_file).then(val => val);
            $("#resume_base64").val(resume_url);
        }

        function getBase64(file) {
            return new Promise((resolve, reject) => {
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onerror = function (error) {
                    console.log('Error: ', error);
                    reject(error);
                }

                reader.onload = function () {
                    // console.log(reader.result);
                    resolve(reader.result);
                }
            })
        }

        function submitGuestApplication() {
            var _token          = $("#token").val();
            var firstname       = $("#firstname").val();
            var lastname        = $("#lastname").val();
            var email           = $("#email").val();
            var mobile          = $("#mobile").val();
            var description     = $("#description").val();
            var address         = $("#address").val();
            var gender          = $("#gender").val();
            var age_range       = $("#age_range").val();
            var work_experience = $("#work_experience").val();
            var skills          = $("#skills").val();
            var competency      = $("#competency").val();
            var letter_base64   = $("#letter_base64").val();
            var resume_base64   = $("#resume_base64").val();
            var job_placement_ref = $("#job_title").val();
            var job_title       = $("#job_title").val();

            var query = {_token, job_title, gender, age_range, work_experience, skills, competency, job_placement_ref, firstname, lastname, email, mobile, description, address, letter_base64, resume_base64}

            fetch(`{{url('send/application/form')}}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(query)
            }).then(r => {
                if (r.status >= 200 && r.status <= 299) {
                    // assume success
                      return r.json();
            
                } else if(r.status == 419){
                    swal(
                        r.statusText,
                        'error'
                    );
                } else {
                      console.log(r);
                     throw Error(r.statusText);
                }
            }).then(results => {
                console.log(results);
                swal(
                    results.status,
                    results.message,
                    results.status
                );

                if(results.status == "success"){
                    // window.location.reload();
                }
            }).catch(err => {
                console.log(err);
            })

            // void 
            return false;
        }

        function getAllJobPlacement() {
            fetch(`{{url('get/all/job/placement')}}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                }
            }).then(r => {
                if (r.status >= 200 && r.status <= 299) {
                    // assume success
                      return r.json();
            
                } else if(r.status == 419){
                    swal(
                        r.statusText,
                        'error'
                    );
                } else {
                      console.log(r);
                     throw Error(r.statusText);
                }
            }).then(results => {
                console.log(results);
                var sn = 0;
                $("#list-all-jobs").html("");
                $.each(results, function(index, val) {
                    sn++;
                    $("#list-all-jobs").append(`
                        <div class="custom-card">
                            <div class="">
                                <b><i class="fa fa-user"></i> Apply for this Job:</b> 
                                <span class="pull-right">
                                    <a href="javascript:void(0);" onclick="applyForThisJob(${val.JobPlacementRef})" class="btn btn-primary btn-sm">
                                        <i class="fa fa-paperclip"></i> Apply
                                    </a>
                                </span>
                            </div>
                            <hr />
                            <div>
                                <h5>Job Description</h5>
                                <p>${val.JobDescription}</p>
                        
                                <a href="javascript:void(0);" class="text-primary" data-toggle="collapse" data-target="#read-more-${sn}"> more details
                                </a><br />
                                <div id="read-more-${sn}" class="collapse">
                                    <table class="table">
                                        <tr>
                                            <td>Job Description</td>
                                            <td>${val.JobDescription}</td>
                                        </tr>
                                        <tr>
                                            <td>Job Qualification</td>
                                            <td>${val.Qualification}</td>
                                        </tr>
                                        <tr>
                                            <td>Competency</td>
                                            <td>${val.Competency}</td>
                                        </tr>
                                        <tr>
                                            <td>Reporting Line</td>
                                            <td>${val.ReportingLine}</td>
                                        </tr>
                                        <tr>
                                            <td>Working Condition</td>
                                            <td>${val.WorkingCondition}</td>
                                        </tr>
                                    </table>
                                </div> <br />

                                <b>Expiry date:</b> ${val.ExpiryDate} <br />
                            </div>
                            <div>
                                <hr />
                                <b><i class="fa fa-clock-o"></i> Time created:</b>  ${moment(val.created_at).format('LT')} <br /> 
                                <b><i class="fa fa-calendar-o"></i> Date created:</b> ${moment(val.created_at).format('LL')}
                            </div>
                        </div>
                        <br />
                    `);
                });
            }).catch(err => {
                console.log(err);
            });
        }

        function applyForThisJob(job_ref) {
            // body...
            $("#JobPlacementRef").val(job_ref);
            $("#display-apply-modal").modal();
        }

        function getRangeValue() {
            // body...
            var range_selected = $("#competency").val();
            $("#range_value").html(range_selected);
        }

        function getInterviewCategory() {
            fetch(`{{url('get/all/job/type')}}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                }
            }).then(r => {
                if (r.status >= 200 && r.status <= 299) {
                    // assume success
                      return r.json();
            
                } else if(r.status == 419){
                    swal(
                        r.statusText,
                        'error'
                    );
                } else {
                      console.log(r);
                     throw Error(r.statusText);
                }
            }).then(results => {
                console.log(results);
                $("#job_title").html("");
                $("#job_title").append(`
                    <option value=""> -- select available job placement -- </option>
                `);
                $.each(results, function(index, val) {
                    $("#job_title").append(`
                        <option value="${val.InterviewCategoryRef}">${val.InterviewCategory}</option>
                    `);
                });
                $("#job_title").selectize({
                    create: true,
                    sortField: {field: 'text'}
                });
            }).catch(err => {
                console.log(err);
            })
        }

        function fetchSelectedJob() {

            $("#view-jobs").show();
            var job_title = $("#job_title").val();
            
            fetch(`{{url('get/one/job/placement')}}/${job_title}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            }).then(r => {
                if (r.status >= 200 && r.status <= 299) {
                    // assume success
                      return r.json();
            
                } else if(r.status == 419){
                    swal(
                        r.statusText,
                        'error'
                    );
                } else {
                      console.log(r);
                     throw Error(r.statusText);
                }
            }).then(results => {
                console.log(results);
            }).catch(err => {
                console.log(err);
            });

            // show modal
            // $("#show_jobs_modals").modal();
        }
    </script>
@endsection