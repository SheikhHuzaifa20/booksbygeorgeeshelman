@extends('layouts.main')

@section('title', 'Book Trailer – George T. Eshelman')

@section('content')

    <section class="banner inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="banner-content wow img-custom-anim-top" data-speed=".9">
                        <h1>{{ $page->page_name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-banner">
        <div class="container p-0">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="voice-value my-5" style="">
                        <h2>{{ $page->name }}</h2>
                    </div>
                    <div class="video-banner">
                        <video width="100%" height="100%" controls autoplay muted>
                            <source src="{{ $section[0]->value }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video-banner mt-5 mb-5" style="border-top: 2px dashed black !important;">
        <div class="container p-0">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="voice-value my-5" style="">
                        <h2>{{ $section[1]->value }}</h2>
                    </div>
                    <div class="video-banner">
                        <video width="100%" height="100%" controls autoplay muted>
                            <source src="{{ $section[2]->value }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
