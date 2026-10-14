<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO -->
    <meta name="description" content="George T. Eshelman – Official Website. Author of Voices of Value: 52 Weeks of Reflection.">
    <meta name="author" content="George T. Eshelman">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset($favicon->img_path ?? 'assets/images/pin.webp') }}">

    <title>{{ config('app.name') }}</title>

    <!-- ============================================================== -->
    <!-- All CSS LINKS IN BELOW FILE -->
    <!-- ============================================================== -->
    @include('layouts.front.css')

    @yield('css')
</head>
<body>

    <!-- ============================================================== -->
    <!-- HEADER -->
    <!-- ============================================================== -->
    @include('layouts.front.header')

    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
    @yield('content')

    <!-- ============================================================== -->
    <!-- FOOTER -->
    <!-- ============================================================== -->
    @include('layouts.front.footer')

    <!-- ============================================================== -->
    <!-- All SCRIPTS AND JS LINKS IN BELOW FILE -->
    <!-- ============================================================== -->
    @include('layouts.front.scripts')

</body>
</html>
