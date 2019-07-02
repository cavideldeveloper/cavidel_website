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
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1 g-font-weight--700">Career</h1>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->

     <section class="background-11">
        <div class="g-position--relative g-bg-color--dark-light">
            <div class="g-container--md g-padding-y-20--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-20--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs g-font-weight--700 animated bounceInDown">Apply Today</p>
                </div>
                <form method="post" class="contact-form center-block g-width-500--sm g-width-550--md" action="{{ url('send/application/form') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Firstname</label>
                                <input type="text" placeholder="Enter first name" name="firstname" class="form-control s-form-v3__input" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lastname</label>
                                <input type="text" placeholder="Enter last name" name="lastname" class="form-control s-form-v3__input" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Enter your email address" name="email" class="form-control s-form-v3__input" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" maxlength="11" placeholder="Enter mobile number" name="mobile" class="form-control s-form-v3__input" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Describe more about your self</label>
                                <textarea placeholder="Tell us about your self..." name="description" class="form-control s-form-v3__input" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row g-margin-b-25--xs ">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea placeholder="Enter address here..." name="address" class="form-control s-form-v3__input" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row g-margin-b-25--xs ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="letter" class="g-color--white">Attach a Cover Letter <span class="small">(Only pdf format)</span></label>
                                <input type="file" name="letter" class="form-control" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="resume" class="g-color--white">Attach a Resume <span class="small">(Only pdf format)</span>
                                </label>
                                <input type="file" name="resume" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row g-margin-b-25--xs ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">
                                    Submit Application
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--/.row-->
        </div>
    </section>

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