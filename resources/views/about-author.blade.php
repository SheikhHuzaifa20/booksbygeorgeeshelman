@extends('layouts.main')

@section('title', 'About the Author – George T. Eshelman')

@section('content')

<section class="banner inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="banner-content wow img-custom-anim-top" data-speed=".9">
                    <h1>{{$page->page_name}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-author">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="author-img wow img-custom-anim-top" data-speed=".9">
                    <img src="{{ $page->image }}" class="img-fluid" alt="George T. Eshelman">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12">
                <div class="author-info wow fadeInRight" data-wow-delay="0.2s">
                    <h4>{{$page->page_name}}</h4>
                    <h2>{{$page->name}}</h2>
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
