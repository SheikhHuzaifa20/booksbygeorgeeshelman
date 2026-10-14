@extends('george.layouts.app')

@section('title', 'Contact Us – George T. Eshelman')

@section('content')

<section class="banner inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="banner-content wow img-custom-anim-top" data-speed=".9">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-info">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="contact-form text-center">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <p>Have feedback or a question about "Voices of Value"? I'd love to hear from you. Fill out the
                        form below!</p>
                    <form action="{{ route('george.contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
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
