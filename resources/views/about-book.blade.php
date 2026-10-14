@extends('layouts.main')

@section('title', 'About the Book – George T. Eshelman')

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

<section class="about-author about-book-value">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="author-info wow fadeInRight" data-wow-delay="0.2s">
                    <h4>{{$page->page_name}}</h4>
                    <h2>{{$page->name}} <span class="d-block">{{$page->text2}}</span></h2>
                    {!! $page->content !!}
                    <div class="btn-grid">
                        <a href="{{$section[0]->value}}" class="btn web-btn web-btn-blk">Buy From Amazon <i class="fa-brands fa-amazon"></i></a>
                        <a href="{{$section[1]->value}}" class="btn web-btn web-btn-blk">Buy From Barnes &amp; Noble</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="author-img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ $page->image }}" class="img-fluid" alt="Voices of Value Book Cover">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
