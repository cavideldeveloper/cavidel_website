@extends('layouts.web-skin')

{{--  title --}}
@section('title')
    {{ env("APP_NAME") }} | Welcome
@endsection

{{--  contents --}}
@section('contents')
    @include('__includes.header')

    @include('__includes.swipper')

    <!--========== PAGE CONTENT ==========-->
    @include('__includes.features')

    @include('__includes.parallax')

    @include('__includes.culture')

    @include('__includes.subscribe')

    @include('__includes.clients')

    @include('__includes.testimonials')

    @include('__includes.news')

    @include('__includes.counter')

    @include('__includes.feedback')

    {{-- @include('__includes.maps') --}}

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
    <script type="text/javascript">
        $('.autoplay').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        });
        $(".slick-prev").hide();
        $(".slick-next").hide();
    </script>
@endsection