<!-- ============================================================== -->
<!-- George T. Eshelman - FOOTER  -->
<!-- ============================================================== -->
@php
    $email = DB::table('m_flag')->where('id', 1)->first();
    $copyright = DB::table('m_flag')->where('id', 2)->first();
    $facebook = DB::table('m_flag')->where('id', 3)->first();
    $insta = DB::table('m_flag')->where('id', 4)->first();
@endphp

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="footer-content">
                    <h3>George t. eshelman</h3>
                    <p>George T. Eshelman is a U.S. Navy veteran, retired CPA, and author of "Voices of Value,"
                        sharing hard-won wisdom on faith, character, and purposeful living.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="footer-content">
                    <h3>Quick links</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}"><i class="fa-solid fa-circle-arrow-right"></i> Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about-author') }}"><i class="fa-solid fa-circle-arrow-right"></i> About the Author</a>
                        </li>
                        <li>
                            <a href="{{ route('about-book') }}"><i class="fa-solid fa-circle-arrow-right"></i> About the Book</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"><i class="fa-solid fa-circle-arrow-right"></i> Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="footer-content">
                    <h3>Newsletter</h3>
                    <form id="newForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="email" id="newemail" class="form-control" placeholder="Email" required>
                                    <button class="btn web-btn" type="submit">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="newsresult"></div>
                    <ul>
                        <li>
                            <a href="mailto:{{$email->flag_value}}">
                                <i class="fa-solid fa-envelope"></i> {{$email->flag_value}}
                            </a>
                        </li>
                    </ul>
                    <ul class="social-links">
                        <li>
                            <a href="{{$facebook->flag_value}}" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$insta->flag_value}}" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="last-para">
    <div class="col-lg-12 col-md-12 col-12">
        <p>{{$copyright->flag_value}}</p>
    </div>
</div>
