@extends('layouts.web-skinned')

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
    <div class="g-bg-position--center js__parallax-window" style="background: url(../img/1920x1080/09.jpg) 50% 0 no-repeat fixed;height: 320px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-50--md g-color--white g-letter-spacing--1 g-font-weight--700">Recruitment Pre-Screening Questionnaire</h1>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->

     <section class="background-11">
        <div class="g-position--relative">
            <div class="g-container--md g-padding-y-20--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-20--xs">
                    <p class="g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs g-font-weight--700 animated bounceInDown">We are Hiring</p>
                </div>

                    <form method="post" action="{{ route('store_screening_questionaire') }}" class="contact-form center-block" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body border border-primary rounded p-3 mb-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div>
                                            <label>Full Name</label>
                                            <input type="text" id="fullname" name="applicant_name" placeholder="Enter Full Name" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" placeholder="Enter your email address" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" maxlength="11" placeholder="Enter mobile number" name="phone" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body border border-primary rounded p-3">
                            <div class="row shadow p-4 m-3 bg-white rounded">
                                <div class="col-md-10">
                                    <div class="form-group ">
                                        <label>1. Can you work on-site for at least 3days in a week and any other days based on work exigencies?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="location" value="1" required>
                                            <label class="pl-3">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="location" value="0" required>
                                            <label class="pl-3">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row shadow p-4 m-3 bg-white rounded">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>2. Is your salary expectation between #2,400,000.00 and #4,000,000 per annum?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="salary_expectation" value="1" required>
                                            <label class="pl-3">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="salary_expectation" value="0" required>
                                            <label class="pl-3">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row shadow p-4 m-3 bg-white rounded">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>3. Are you available to work on Lagos Mainland with no provision for accomodation?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="job_type" value="1" required>
                                            <label class="pl-3">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="job_type" value="0" required>
                                            <label class="pl-3">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row shadow p-4 m-3 bg-white rounded">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>4. Are you ready to work as a frontend and/or backend developer?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="stack_option" value="1" required>
                                            <label class="pl-3">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="stack_option" value="0" required>
                                            <label class="pl-3">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row shadow p-4 m-3 bg-white rounded">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>5. Do you have any post-school obligations like clearance and NYSC?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="post_school_obligation" value="1" required>
                                            <label class="pl-3">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="post_school_obligation" value="0" required>
                                            <label class="pl-3">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row shadow p-4 m-3 bg-white rounded">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>6. Do you have on-going remote engagement with other companies? </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="work_engagement" value="1" required>
                                            <label class="pl-3">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="work_engagement" value="0" required>
                                            <label class="pl-3">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mx-uto">Save</button>
                        </div>
                    </form>
            </div>
        </div>
    </section>

    @include('__includes.footer')
@endsection


