

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

        <nav class="flex items-center justify-between flex-wrap bg-teal-200 p-10" id="mainNav">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <a href="index.html"><img src="../../../../storage/images/logo11.jpg" alt="" title="" style="width: 52px; height: 48px ;border-radius: 150%" /></a>
                    <span class="ml-2 font-semibold text-xl tracking-tight text-blue-900 ">Personal Profile</span>
                </div>
                <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-black hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>

                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto flex justify-center">
                    <div class="text-sm lg:flex-grow flex justify-end">
                        <a href="/profile/{{auth()->user()->id}}" class="block mt-4 lg:inline-block lg:mt-0 text-blue-900 font-bold ml-10 text-2xl  hover:text-black mr-4">
                            Home
                        </a>

                        <a href="/profile/{{auth()->user()->id}}/duty" class="block mt-4 lg:inline-block lg:mt-0 text-blue-900 font-bold ml-10 text-2xl  hover:text-black">
                            Duty
                        </a>

                        <a href="/home" class="block mt-4 lg:inline-block lg:mt-0 text-blue-900  font-bold ml-10 text-2xl hover:text-black m-4">
                            Back to Website
                        </a>
                        <a href="/logout" class="block mt-4 lg:inline-block lg:mt-0 text-blue-900  font-bold ml-10 text-2xl  hover:text-black m-4">
                            logout
                        </a>
                    </div>

                </div>
        </nav>



<div id="home" class="intro route bg-image" style="background-image: url(../../storage/images/cover.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container mx-auto sm:px-4">
                <p class="display-6 color-d">Hello, world!</p>
                <h1 class="intro-title mb-4">I am {{$user->name}}</h1>
                <p class="intro-subtitle"><span class="text-slider-items">
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

