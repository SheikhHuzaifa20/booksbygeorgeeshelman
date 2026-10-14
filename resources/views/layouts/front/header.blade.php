<!-- ============================================================== -->
<!-- George T. Eshelman - HEADER  -->
<!-- ============================================================== -->
@php
    $email = DB::table('m_flag')->where('id', 1)->first();
@endphp
<header>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="top-header">
                    <a href="{{ url('/') }}"><h3>George t. eshelman</h3></a>
                    <a href="mailto:{{$email->flag_value}}">
                        <i class="fa-solid fa-envelope"></i> {{$email->flag_value}}
                    </a>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                    href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('about-author') ? 'active' : '' }}"
                                    href="{{ route('about-author') }}">About the Author</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('about-book') ? 'active' : '' }}"
                                    href="{{ route('about-book') }}">About the Book</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                    href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
