@extends('layouts.main')

@section('title', 'About the Book – George T. Eshelman')

@section('content')

    <section class="banner inner-banner background">
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

    <section class="about-author about-book-value background" style="border-top: 2px dashed black !important;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="author-info wow fadeInRight" data-wow-delay="0.2s">
                        <h4>{{ $page->page_name }}</h4>
                        <h2>{{ $page->name }} <span class="d-block">{{ $page->text2 }}</span></h2>
                        {!! $page->content !!}
                        <div class="btn-grid">
                            <a href="{{ $section[0]->value }}" class="btn web-btn web-btn-blk">Buy From Amazon <i
                                    class="fa-brands fa-amazon"></i></a>
                            <a href="{{ $section[1]->value }}" class="btn web-btn web-btn-blk">Buy From Barnes &amp;
                                Noble</a>
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

        <style>
        .book2{
            background-image: url('assets/images/background-img.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .book2-heading{
            color: #D9A441 !important;
        }
        .book2-content p{
            color: #fff !important;
        }
        .book2-subhead{
            color: #fff !important;
        }
    </style>

    <section class="about-author about-book-value book2" style="border-top: 2px dashed black !important;">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="author-img wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ $section[5]->value }}" class="img-fluid" alt="Voices of Value Book Cover">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="author-info wow fadeInRight book2-content" data-wow-delay="0.2s">
                        <h4 class="book2-subhead">{{ $section[2]->value }}</h4>
                        <h2 class="book2-heading">{{ $section[3]->value }}
                            {{-- <span class="d-block">{{$page->text2}}</span> --}}
                        </h2>
                        {!! $section[4]->value !!}
                        <div class="btn-grid">
                            <a href="{{ $section[6]->value }}" class="btn web-btn web-btn-blk">Buy From Amazon <i
                                    class="fa-brands fa-amazon"></i></a>
                            <a href="{{ $section[7]->value }}" class="btn web-btn web-btn-blk">Buy From Barnes &amp;
                                Noble</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
