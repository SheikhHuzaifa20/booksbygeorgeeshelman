@extends('george.layouts.app')

@section('title', 'About the Author – George T. Eshelman')

@section('content')

<section class="banner inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="banner-content wow img-custom-anim-top" data-speed=".9">
                    <h1>About the Author</h1>
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
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
