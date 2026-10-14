@extends('layouts.main')

@section('title', 'George T. Eshelman – Official Website')

@section('content')

    <section class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="banner-back">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="banner-content wow fadeInRight" data-wow-delay="0.2s">
                                    <h4>{{ $banner->title }}</h4>
                                    {!! $banner->description !!}
                                    <div class="btn-grid">
                                        <a href="{{ $banner->amazon_link }}" target="_blank" class="btn web-btn">Buy From
                                            Amazon <i class="fa-brands fa-amazon"></i></a>
                                        <a href="{{ $banner->barnes_noble_link }}" target="_blank" class="btn web-btn">Buy
                                            From Barnes &amp; Noble</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="author-frame wow fadeInLeft" data-wow-delay="0.2s">
                                    <img src="{{ asset('assets/images/pin.webp') }}" class="img-fluid pin-frame"
                                        alt="Pin">
                                    <img src="{{ $banner->image }}" class="img-fluid" alt="George T. Eshelman">
                                    <h4>Best Selling Author</h4>
                                    <h3>George t. eshelman</h3>
                                </div>
                            </div>
                        </div>
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
                        <h4>{{ $page->name }}</h4>
                        {!! $page->content !!}
                        <div class="btn-grid">
                            <a href="{{ route('about-author') }}" class="btn web-btn web-btn-blk">Read More <i
                                    class="fa-solid fa-circle-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="purpose-behind">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="voice-value wow img-custom-anim-left" data-speed=".9">
                        {!! $section[0]->value !!}
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
                        <h4>{{ $section[1]->value }}</h4>
                        {!! $section[2]->value !!}
                        <div class="btn-grid">
                            <a href="{{ $section[3]->value }}" target="_blank" class="btn web-btn web-btn-blk">Buy From
                                Amazon <i class="fa-brands fa-amazon"></i></a>
                            <a href="{{ $section[4]->value }}" target="_blank" class="btn web-btn web-btn-blk">Buy From
                                Barnes &amp; Noble</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="author-img wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ $section[5]->value }}" class="img-fluid" alt="Voices of Value Book Cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quote-reflection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="voice-value">
                        <h4>{{ $section[6]->value }}</h4>
                        <h2>{{ $section[7]->value }}</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="book-frame-reflection wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ $section[8]->value }}" class="img-fluid" alt="Quote 1">
                        {!! $section[9]->value !!}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="book-frame-reflection wow fadeInDown" data-wow-delay="0.2s">
                        <img src="{{ $section[10]->value }}" class="img-fluid" alt="Quote 2">
                        {!! $section[11]->value !!}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="book-frame-reflection wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ $section[12]->value }}" class="img-fluid" alt="Quote 3">
                        {!! $section[13]->value !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-banner">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="video-banner">
                        <video width="100%" height="100%" controls autoplay muted>
                            <source src="{{ $section[14]->value }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="review-customer wow fadeInRight" data-wow-delay="0.2s">
                        <h4>reviews</h4>
                        <h2>What readers are saying</h2>
                        <div class="testimonials owl-carousel owl-theme">
                            @foreach ($testimonial as $item)
                                <div class="item">
                                    <div class="review-box">
                                        <div class="star-rating">
                                            @for ($i = 0; $i < $item->rating; $i++)
                                                <i class="fa-solid fa-star"></i>
                                            @endfor
                                            @for ($i = $item->rating; $i < 5; $i++)
                                                <i class="fa-regular fa-star"></i>
                                            @endfor
                                        </div>
                                        <p>{!! $item->description !!}</p>
                                        <div class="author-bio">
                                            <div class="bio">
                                                <h4>{{ $item->title }}</h4>
                                                <h5>{{ $item->text2 }}</h5>
                                            </div>
                                            <div class="quote-img">
                                                <i class="fa-solid fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="item">
                                <div class="review-box">
                                    <div class="star-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p>This book is a weekly anchor in a chaotic world. The reflections are profound yet
                                        practical, seamlessly blending scripture with actionable steps. It has sparked
                                        meaningful conversations in our family and strengthened our commitment to living
                                        with purpose and faith.</p>
                                    <div class="author-bio">
                                        <div class="bio">
                                            <h4>Eleanor Vance</h4>
                                            <h5>Reader</h5>
                                        </div>
                                        <div class="quote-img">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="review-box">
                                    <div class="star-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p>Finally, a devotional that champions personal responsibility over a culture of
                                        victimhood. The "ACE over DEI" message resonates deeply with me. It's a
                                        courageous and much-needed call back to character, attitude, and earned
                                        experience as the true measures of a person.</p>
                                    <div class="author-bio">
                                        <div class="bio">
                                            <h4>Marcus Thorne</h4>
                                            <h5>Reader</h5>
                                        </div>
                                        <div class="quote-img">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="review-box">
                                    <div class="star-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p>As a busy mom, I appreciate the structured format. Each week is digestible and
                                        impactful. The applications are especially helpful for translating big ideas
                                        into lessons my kids can understand—a truly valuable resource for intentional
                                        parenting.</p>
                                    <div class="author-bio">
                                        <div class="bio">
                                            <h4>Rebecca Shin</h4>
                                            <h5>Reader</h5>
                                        </div>
                                        <div class="quote-img">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="contact-form">
                        <h2>Contact us</h2>
                        {!! $section[15]->value !!}
                        <div id="contactformsresult"></div>
                        <form id="contactform">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                        <textarea name="message" id="textarea" rows="5" placeholder="Message" class="form-control"></textarea>
                                        <button class="btn web-btn web-btn-blk" type="submit">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
