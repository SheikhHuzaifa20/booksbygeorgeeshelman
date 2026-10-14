@extends('george.layouts.app')

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
                                <h4>Welcome to</h4>
                                <h1>George t. eshelman's <span class="d-block">Official Website</span></h1>
                                <p>This website was created to offer families and communities meaningful,
                                    discussion-focused prompts. The goal is to give readers small, meaningful
                                    prompts that lead to discussion — not debate. Through reflection, application,
                                    and shared stories, visitors develop stronger character and civic awareness.
                                    Encourage curiosity over judgment, foster responsibility through practical
                                    examples, and help children learn by watching adults model humility and service.
                                </p>
                                <div class="btn-grid">
                                    <a href="javascript:;" class="btn web-btn">Buy From Amazon <i
                                            class="fa-brands fa-amazon"></i></a>
                                    <a href="javascript:;" class="btn web-btn">Buy From Barnes &amp; Noble</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="author-frame wow fadeInLeft" data-wow-delay="0.2s">
                                <img src="{{ asset('assets/images/pin.webp') }}" class="img-fluid pin-frame" alt="Pin">
                                <img src="{{ asset('assets/images/author-frame.webp') }}" class="img-fluid" alt="George T. Eshelman">
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
                    <img src="{{ asset('assets/images/author-frame.webp') }}" class="img-fluid" alt="George T. Eshelman">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12">
                <div class="author-info wow fadeInRight" data-wow-delay="0.2s">
                    <h4>about the author</h4>
                    <h2>George t. eshelman</h2>
                    <p>George T. Eshelman was born and raised in an Air Force family. He attended so many grades and
                        high schools that he can't count. At 17, he left high school to enlist in the U.S. Navy,
                        where he completed Electronics Technician A School and served during the Vietnam War aboard
                        the USS Oriskany (CVA-34).</p>
                    <p>After his military service, George returned to California and earned a BS in Accounting from
                        California State University, Fresno. He went on to build a distinguished and respected
                        career in public accounting, holding certifications as a Certified Public Accountant,
                        Certified Forensic Accountant, and Certified Fraud Examiner.</p>
                    <p>Throughout his life, George explored a wide range of avocations that shaped his practical
                        insight and broadened his perspective—ranch hand, whitewater guide, chemistry lab
                        technician, carpenter, drafter, laundromat builder and owner, marine patrol officer, reserve
                        deputy sheriff, electrician, computer school owner, senior softball coach, search-and-rescue
                        scuba diver, EMT, scout leader, adult education instructor, and College instructor. These
                        diverse experiences also helped him develop the ideas expressed in his book "Voices of
                        Value."</p>
                    <div class="btn-grid">
                        <a href="{{ route('george.about-author') }}" class="btn web-btn web-btn-blk">Read More <i
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
                    <h2>The purpose behind writing "Voices Of Value"</h2>
                    <span></span>
                    <p>George T. Eshelman wrote "Voices of Value" as a gentle way to share his life lessons without
                        placing pressure on his adult children. Rather than offering advice that could feel
                        overbearing, he shaped his thoughts into reflections they could return to whenever they
                        wished. By presenting these insights as a legacy, he created something that feels like a
                        meaningful gift—encouraging reflection rather than disagreement. The book serves as a guide
                        for future generations, giving his children and grandchildren the freedom to draw wisdom
                        from his experiences in their own time. Through this approach, George offers guidance
                        without seeming directive or controlling.</p>
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

<section class="quote-reflection">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="voice-value">
                    <h4>A Deeper Look Into The Heart Of "Voices Of Value"</h4>
                    <h2>Highlighted quotes and reflections</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="book-frame-reflection wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('assets/images/book01.webp') }}" class="img-fluid" alt="Book Quote 1">
                    <h4>Character is what you do when no one <span class="d-block">is watching</span></h4>
                    <p>Reflection: Consider how your everyday choices mirror the kind of person you aim to be. Think
                        of a quiet moment when someone showed integrity in a simple, meaningful way.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="book-frame-reflection wow fadeInDown" data-wow-delay="0.2s">
                    <img src="{{ asset('assets/images/book01.webp') }}" class="img-fluid" alt="Book Quote 2">
                    <h4>Courage is not the absence of fear but <span class="d-block">moving forward despite
                            it</span></h4>
                    <p>Reflection: Recall a moment when you pushed through a small fear and learned from it. How did
                        that decision influence those connected to you?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="book-frame-reflection wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('assets/images/book01.webp') }}" class="img-fluid" alt="Book Quote 3">
                    <h4>Service to others is the rent we pay <span class="d-block">for our place in society</span>
                    </h4>
                    <p>Reflection: Reflect on a recent small act of kindness—whether your own or someone else's.
                        What subtle, positive impact did it set in motion?</p>
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
                        <source src="{{ asset('assets/images/George_Video.mp4') }}" type="video/mp4">
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
                        <div class="item">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="contact-form">
                    <h2>Contact us</h2>
                    <p>Have feedback or a question about "Voices of Value"? I'd love to hear from you. Fill out the
                        form below!</p>
                    <form action="{{ route('george.contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    <textarea name="message" id="textarea" rows="5" placeholder="Message"
                                        class="form-control"></textarea>
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

@push('scripts')
    // Owl Carousel Init
    $(".testimonials.owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 1 }
        }
    });
@endpush
