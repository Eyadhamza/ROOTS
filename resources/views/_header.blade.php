<header id="header" id="home">

    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="img/logo1.png" alt="" title="" style="width: 52px; height: 48px ;border-radius: 100%" /></a> <strong class="bold">ROOTS</strong>
            </div>
            <nav id="nav-menu-container text-dark">
                <ul class="nav-menu ">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/profile/{{auth()->user()->id}}">My Profile</a></li>
                    <li ><a href="/aboutus" >About</a></li>
                    <li><a href="/tracks">Tracks</a></li>
                    <li><a href="/events">Events</a></li>
                    <li class="menu-has-children"><a href="">Blog</a>
                        <ul>
                            <li><a href="/articles">Articles</a></li>
                            <li><a href="/articles/create">Create Article</a></li>
                            <li><a href="/achievements">Achievements</a></li>
                            <li><a href="/achievements/create">Post an Achievement</a></li>

                        </ul>
                    </li>
{{--                    <li class="menu-has-children"><a href="">Pages</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="course-details.html">Course Details</a></li>--}}
{{--                            <li><a href="event-details.html">Event Details</a></li>--}}
{{--                            <li><a href="elements.html">Elements</a></li>--}}
{{--                            <li class="menu-has-children"><a href="">Level 2 </a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">Item One</a></li>--}}
{{--                                    <li><a href="#">Item Two</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
