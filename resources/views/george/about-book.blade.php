@extends('george.layouts.app')

@section('title', 'About the Book – George T. Eshelman')

@section('content')

<section class="banner inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="banner-content wow img-custom-anim-top" data-speed=".9">
                    <h1>About the Book</h1>
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
                    <h4>about the book</h4>
                    <h2>Voice of Value <span class="d-block">52 Weeks of Reflection</span></h2>
                    <p>"Voices of Value: 52 Weeks of Reflections" is a yearlong guide designed to inspire deeper
                        thought, personal growth, and faith-based living. Each week presents a powerful quote paired
                        with a thoughtful reflection, a grounding Scripture passage, and a practical application for
                        daily life. Covering themes such as truth, responsibility, gratitude, character, and faith,
                        this collection encourages readers to pause, reflect, and act with purpose. Written with a
                        balance of wisdom, conviction, and hope, "Voices of Value" serves as a companion for anyone
                        seeking to strengthen their values, live with integrity, and nurture both personal and
                        spiritual growth throughout the year.</p>
                    <div class="btn-grid">
                        <a href="javascript:;" class="btn web-btn web-btn-blk">Buy From Amazon <i
                                class="fa-brands fa-amazon"></i></a>
                        <a href="javascript:;" class="btn web-btn web-btn-blk">Buy From Barnes &amp; Noble</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="author-img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('assets/images/book-cover.webp') }}" class="img-fluid" alt="Voices of Value Book Cover">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
