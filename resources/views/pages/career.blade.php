@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Contact Us
@endsection

{{--  contents --}}
@section('contents')
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
        <div class="g-position--relative g-bg-color--dark-light">
            <div class="g-container--md g-padding-y-20--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-20--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs g-font-weight--700 animated bounceInDown">Apply Today</p>
                </div>
                <form method="post" onsubmit="return submitGuestApplication()" class="contact-form center-block g-width-500--sm g-width-550--md" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Firstname</label>
                                <input type="text" placeholder="Enter first name" name="firstname" id="firstname" class="form-control s-form-v3__input" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lastname</label>
                                <input type="text" placeholder="Enter last name" name="lastname" id="lastname" class="form-control s-form-v3__input" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Enter your email address" name="email" id="email" class="form-control s-form-v3__input" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" maxlength="11" placeholder="Enter mobile number" name="mobile" id="mobile" class="form-control s-form-v3__input" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Describe more about your self</label>
                                <textarea placeholder="Tell us about your self..." name="description" id="description" class="form-control s-form-v3__input" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row g-margin-b-25--xs ">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea placeholder="Enter address here..." name="address" id="address" class="form-control s-form-v3__input" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row g-margin-b-25--xs ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="letter" class="g-color--white">Attach a Cover Letter <span class="small">(Only pdf format)</span></label>
                                <input type="file" name="letter" id="letter" accept="application/pdf" class="form-control" onchange="pushLetterToBase64Format()" required="">
                                <input type="hidden" id="letter_base64" name="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="resume" class="g-color--white">Attach a Resume <span class="small">(Only pdf format)</span>
                                </label>
                                <input type="file" name="resume" id="resume" accept="application/pdf" class="form-control" onchange="pushResumeToBase64Format()" required="">
                                <input type="hidden" id="resume_base64" name="">
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
    
    <script type="text/javascript">
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
            var letter_base64   = $("#letter_base64").val();
            var resume_base64   = $("#resume_base64").val();
            var query = {_token, firstname, lastname, email, mobile, description, address, letter_base64,resume_base64};

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
                    window.location.reload();
                }
            }).catch(err => {
                console.log(err);
            })

            // void 
            return false;
        }
    </script>
@endsection