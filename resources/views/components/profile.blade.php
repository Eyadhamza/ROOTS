
<x-app>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Personal Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="../../../../../assets2/img/favicon.png" rel="icon">
    <!-- Bootstrap CSS File -->

    <!-- Libraries CSS Files -->
    <link href="../../../../../assets2/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../../../assets2/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../../../assets2/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../../../../assets2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../../../assets2/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href=../../../css/style.css rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body id="page-top">

<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">Personal Profile</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav lg:flex justify-between">
                <li class="nav-item">
                    <a href="/profile/{{auth()->user()->id}}" class="nav-link js-scroll text-black">
                        Home
                    </a>
                </li>
                <li class="nav-item">

                    <a href="/profile/{{auth()->user()->id}}/duty" class="nav-link js-scroll">
                        Duty
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/home" class="nav-link js-scroll">
                        Back to Website
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link js-scroll">
                        logout
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!--/ Nav End /-->

<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image: url(../../storage/images/roots_cover1.png)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container mx-auto sm:px-4 text-white">
                <p class="display-6 color-d  text-white">Hello, world!</p>
                <h1 class="text-6xl mb-4  text-white">I am {{$user->name}}</h1>
                <p class="intro-subtitle  text-white"><span class="text-slider-items">
                        @foreach($user->roles as $role)
                            {{$role->name}} ,

                        @endforeach
                        @foreach($user->committees as $committee)
                            Of {{$committee->name}},
                        @endforeach
                    </span><strong class="text-slider"></strong></p>

            </div>
        </div>
    </div>
</div>
{{--@livewire('notifications')--}}


{{$slot}}

<div id="app">
    @include('_MainWebsitePartials.flash-message')


</div>

@include('_MainProfilePartials._profile-committees_news')
@include('_MainProfilePartials._profile-articles')

<!--/ Nav Star /-->

<!--/ Nav End /-->

<!--/ Intro Skew Star /-->

<!--/ Intro Skew End /-->






<!--/ Section Blog Star /-->

<!--/ Section Blog End /-->
@include('_MainProfilePartials._profile-qoute')


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="../../../../../assets2/lib/jquery/jquery.min.js"></script>
<script src="../../../../../assets2/lib/jquery/jquery-migrate.min.js"></script>
<script src="../../../../../assets2/lib/popper/popper.min.js"></script>
<script src="../../../../../assets2/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../../../assets2/lib/easing/easing.min.js"></script>
<script src="../../../../../assets2/lib/counterup/jquery.waypoints.min.js"></script>
<script src="../../../../../assets2/lib/counterup/jquery.counterup.js"></script>
<script src="../../../../../assets2/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../../../../../assets2/lib/lightbox/js/lightbox.min.js"></script>
<script src="../../../../../assets2/lib/typed/typed.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="../../../../../assets2/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="../../../../../assets2/js/main.js"></script>
@livewireScripts
</body>
</html>

</x-app>
