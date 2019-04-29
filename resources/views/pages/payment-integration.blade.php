@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Our Services
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

    @include('__includes.parallax-payment')

    <!-- Plan -->
    <div class="g-bg-color--sky-light" id="payment">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="row">
                <!-- Plan -->
                <div class="col-md-6 g-margin-b-10--xs g-margin-b-20--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="g-bg-color--white g-padding-y-20--xs">
                            <h3 class="g-font-size-28--xs g-font-weight--700 g-color--primary g-margin-b-30--xs g-margin-l-20--xs"> Payment Integration</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-20--xs">
                                <li class="g-font-size-18--xs g-font-weight--400"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-circle"></i>
                                    Nibss Payment Integration
                                </li>
                                <li class="g-font-size-18--xs g-font-weight--400"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-circle"></i>
                                    Interswitch Payment Integration
                                </li>
                                <li class="g-font-size-18--xs g-font-weight--400"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-circle"></i>
                                    Remitta Payment Integration
                                </li>
                                <li class="g-font-size-18--xs g-font-weight--400"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-circle"></i>
                                    Paystack Payment Integration
                                </li>
                                <li class="g-font-size-18--xs g-font-weight--400"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-circle"></i>
                                    Flutterwave Payment Integration
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Plan -->
                <div class="col-md-6 g-margin-b-10--xs g-margin-b-20--lg">
                    <img class="s-plan-v1" src="{{asset('img/process/7.gif')}}" width="100%" height="auto">    
                </div>
            </div>
        </div>
    </div>

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	<script type="text/javascript">
		// send contact message

	</script>
@endsection