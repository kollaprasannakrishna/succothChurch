@extends('layouts.main')

@section('title','| Home')

@section('carousel')
    @include('partials._carousel')

@endsection
@section('content')
    <div class="clearfix"></div>
    <div id="content" class="no-padding">
        @include('landing.sections.events')
        @include('landing.sections.counter')
        @include('landing.sections.about')
        @include('landing.sections.blogs')
        @include('landing.sections.sermons')
        @include('landing.sections.testimonials')


    </div>
@endsection