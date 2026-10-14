<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Meta Tags -->
    <meta name="description" content="George T. Eshelman – Official Website. Author of Voices of Value: 52 Weeks of Reflection. A guide for families and communities to build character and civic awareness.">
    <meta name="keywords" content="George T. Eshelman, Voices of Value, 52 Weeks of Reflection, author, book">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css"
        integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inner.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="icon" href="{{ asset($favicon->img_path ?? 'assets/images/pin.webp') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <header>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="top-header">
                       <a href="{{ route('george.home') }}"><h3>George t. eshelman</h3></a>
                        <a href="mailto:info@booksbygeorgeeshelman.com"><i class="fa-solid fa-envelope"></i>
                            info@booksbygeorgeeshelman.com</a>
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
                                    <a class="nav-link {{ request()->routeIs('george.home') ? 'active' : '' }}"
                                        href="{{ route('george.home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('george.about-author') ? 'active' : '' }}"
                                        href="{{ route('george.about-author') }}">About the Author</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('george.about-book') ? 'active' : '' }}"
                                        href="{{ route('george.about-book') }}">About the Book</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('george.contact') ? 'active' : '' }}"
                                        href="{{ route('george.contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="footer-content">
                        <h3>George t. eshelman</h3>
                        <p>George T. Eshelman is a U.S. Navy veteran, retired, CPA, and author of "Voices of Value,"
                            sharing hard-won wisdom on faith, character, and purposeful living.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="footer-content">
                        <h3>Quick links</h3>
                        <ul>
                            <li>
                                <a href="{{ route('george.home') }}"><i class="fa-solid fa-circle-arrow-right"></i> Home</a>
                            </li>
                            <li>
                                <a href="{{ route('george.about-author') }}"><i class="fa-solid fa-circle-arrow-right"></i> About the
                                    Author</a>
                            </li>
                            <li>
                                <a href="{{ route('george.about-book') }}"><i class="fa-solid fa-circle-arrow-right"></i> About the
                                    Book</a>
                            </li>
                            <li>
                                <a href="{{ route('george.contact') }}"><i class="fa-solid fa-circle-arrow-right"></i> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="footer-content">
                        <h3>Newsletter</h3>
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                        <button class="btn web-btn">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul>
                            <li>
                                <a href="mailto:info@booksbygeorgeeshelman.com"><i class="fa-solid fa-envelope"></i>
                                    info@booksbygeorgeeshelman.com</a>
                            </li>
                        </ul>
                        <ul class="social-links">
                            <li>
                                <a href="https://www.facebook.com/georgeeshelmanofficial" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/georgeeshelman/" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="last-para">
        <div class="col-lg-12 col-md-12 col-12">
            <p>Copyright &copy; {{ date('Y') }} George T. Eshelman. All Rights Reserved</p>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        // WOW Animation Init
        new WOW().init();

        @stack('scripts')
    </script>

</body>

</html>
