

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="../../../../../assets2/img/favicon.png" rel="icon">
    <!-- Bootstrap CSS File -->
    <link href="../../../../../assets2/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../../../../../assets2/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../../../assets2/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../../../assets2/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../../../../assets2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../../../assets2/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href=../../../css/style.css rel="stylesheet">

</head>

<body id="page-top">

<!--/ Nav Star /-->
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">Personal Profile </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="/home">Back to Website</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!--/ Nav End /-->

<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image: url(../../storage/images/logoo.png)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <p class="display-6 color-d">Hello, world!</p>
                <h1 class="intro-title mb-4">I am {{$user->name}}</h1>
                <p class="intro-subtitle"><span class="text-slider-items">
                        {{$user->role}} Supervisor of
                        @foreach($user->committees as $committee)
                            {{$committee->name}},
                        @endforeach
                    </span><strong class="text-slider"></strong></p>

            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div class="about-img">
                                        <img src="{{$user->avatar}}" class="img-fluid rounded b-shadow-a" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="about-info">
                                        <p><span class="title-s">Name: </span> <span>{{$user->name}}</span></p>
                                        <p><span class="title-s">Committee: </span> <span>@foreach($user->committees as $committee)
                                                    {{$committee->name}},
                                                @endforeach</span></p>
                                        <p><span class="title-s">Email: </span> <span>{{$user->email}}</span></p>
                                        <p><span class="title-s">Phone: </span> <span>$user->number</span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="about-me pt-4 pt-md-0">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        About me
                                    </h5>
                                </div>
                                <p class="lead">
                                    {{$user->bio}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--/ Section Services Star /-->
<section id="service" class="services-mf route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Your Committees..
                    </h3>
                    <p class="subtitle-a">
                        in here you can know more about your committee news
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        @foreach($user->committees as $committee)
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-code-working"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">{{$committee->name}}</h2>
                        <p class="s-description text-center">
                            {{$committee->description}}

                        </p>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</section>
<!--/ Section Services End /-->

<div class="section-counter paralax-mf bg-image" style="background-image: url(../../../assets2/img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">{{$user->tasks_performance}}</p>
                        <span class="counter-text">Tasks COMPLETED</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/ Section achievements /-->
@if($user->id==auth()->user()->id)
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            My Members
                        </h3>
                        <p class="subtitle-a">
                            This list presents all users who are currently in my committee
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            {{--                            my members --}}


            @foreach($user->committees as $committee)
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        MY MEMBERS
                    </a>

                    @foreach($committee->users as $user)
                        <a href="/profile/{{$user->id}}" class="list-group-item list-group-item-action">{{$user->name}}</a>
                    @endforeach
                </div>
            @endforeach
            @endif
            <div class="row">
            </div>

            <section id="work" class="portfolio-mf sect-pt4 route">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    my Articles
                                </h3>
                                <p class="subtitle-a">
                                    somethings i wrote !
                                </p>
                                <div class="line-mf"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row">
                            @foreach($user->articles as $article)
                                <div class="work-box">

                                    <a href="/articles/{{$article->id}}" data-lightbox="gallery-mf">
                                        <div class="work-img">
                                            <img src="../../storage/images/roo.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="work-content">
                                            <div class="row">

                                                <div class="col-sm-8">

                                                    <h2 class="w-title"> Committee:{{@$article->committee->name}}</h2>
                                                    <div class="w-more">
                                                        <span class="w-ctegory">  {{$article->title}}</span>
                                                        <span class="w-date">{{$article->updated_at}}</span>
                                                    </div>


                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="w-like">
                                                        <span class="ion-ios-plus-outline"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </section>

    <!--/ Section Quotes Star /-->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(../../../assets2/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-mf" class="owl-carousel owl-theme">
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                                <span class="author">Quote you believe in !</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    I believe , whatever doesnt kill you , simply makes you ..

                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Section Blog Star /-->

    <!--/ Section Blog End /-->


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

</body>
</html>


