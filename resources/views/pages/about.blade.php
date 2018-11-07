@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | About
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

    @include('__includes.swipper')


    @include('__includes.feedback')

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	
@endsection