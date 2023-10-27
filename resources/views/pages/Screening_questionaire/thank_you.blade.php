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
    <div class="d-flex align-items-center" style="background: url(img/1920x1080/09.jpg) 50% no-repeat fixed; height: 600px;">
        <div class="container text-center ">
            <div class="margin-b-60--xs">
                <h1 class="font-size-30-xs font-size-40-sm font-size-50-md g-color--white letter-spacing-1 margin-b-30-xs g-font-weight--700 ">
                    <span style="text-transfrom: capitalize">Thank</span> you for your submission <span style="font-size:30px; display:block; padding:25px"> please do not re-attempt the questionnaire!</h1>
            </div>

        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->

    @include('__includes.footer')
@endsection


