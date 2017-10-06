<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials.hiddencredits')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="@yield('canonical', request()->url())" />
    <!-- meta -->
    <meta name="description" content="@yield('meta_description','Default description')">
    <meta name="author" content="@yield('meta_author','Filip Vanden Eynde')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title or config('app.name', 'Laravel 5.5')  }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/6fedb4a016.js"></script>

    <!-- Fonts -->
    @yield('fonts')
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
<div id="app">

   @yield('navbar')

    @include('navbars.navbarresume')


    @yield('content')
</div>



<footer class="colophon colophon__bottom grid colophon-2 colophon-2__bottom " role="contentinfo">
    <div class="wrapper x-container max width col">

        <div class="social-global">
            {{--<a href="{{config('app.social_media.facebook')}}" class="facebook" title="Facebook" target="_blank">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>--}}
            {{-- <a href="{{config('app.social_media.twitter')}}" class="twitter" title="Twitter" target="_blank">
                 <i class="fa fa-twitter-square" aria-hidden="true"></i></a>--}}
            <a href="{{config('app.social_media.linkedin')}}" class="linkedin" title="LinkedIn" target="_blank">
                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            </a>
            <a href="{{config('app.social_media.instagram')}}" class="instagram" title="Instagram" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="{{config('app.social_media.spotify')}}" class="spotify" title="Spotify" target="_blank">
                <i class="fa fa-spotify" aria-hidden="true"></i>
            </a>
            <a href="{{config('app.social_media.github')}}" class="github" title="Github" target="_blank">
                <i class="fa fa-github" aria-hidden="true"></i>
            </a>
        </div>

        <ul class="bottom-nav x-nav">
            <li class="">
                <a class="smoothscroll" href="#">Home</a></li>
            <li class=""><a class="smoothscroll"
                            href="#profile">About me</a>
            </li>
            <li class=""><a class="smoothscroll"
                            href="#abilities">Abilities</a>
            </li>
            <li class=""><a class="smoothscroll"
                            href="#experiences">Experiences</a>
            </li>
            <li class=""><a class="smoothscroll"
                            href="#portfolio">Portfolio</a>
            </li>
            <li class=""><a class="smoothscroll"
                            href="#services">Services</a>
            </li>
            <li class=""><a class="smoothscroll"
                            href="#contact">Contact</a>
            </li>
            {{--
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a href="http://demo.theme.co/app/blog/">Blog</a></li>
            --}}
        </ul>
        <div class="colophon-content-2">
            {{--<h4>Services</h4>--}}
            <p class="footer-services">
                <a href="https://vandeneyndefilip.be" target="baseproject">
                    {{--© {{ roman_year() }} vandeneyndefilip.be</a>--}}
                    © {{ date('Y') }} filipvandeneynde.com</a>
            </p>
        </div>
    </div>
</footer>

<a class="scroll-top right fade" id="top" href="#home" title="Back to Top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</a>

{{--
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
--}}

{{--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
--}}
{{--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
--}}
{{--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.compatibility.min.js"></script>
--}}
{{--<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>--}}
{{--
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
--}}
{{--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.min.js"></script>
--}}
{{--
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
--}}
{{--
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.6/SmoothScroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
--}}

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
{{--<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>--}}
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
