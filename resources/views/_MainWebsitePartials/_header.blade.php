<header id="header" id="home">

    <div class="container mx-auto sm:px-4 main-menu">
        <div class="flex flex-wrap  items-center justify-between flex">
            <div id="logo">
                <a  href="#"><img class="w-12 rounded-full lg:w-12 " src="../../../../storage/images/logo11.jpg" alt="" title=""  /></a>
                <strong class="inline-block bold text-white">ROOTS</strong>
                <button type="button" id="mobile-nav-toggle"><img src="https://img.icons8.com/android/24/000000/menu.png"/></button>

            </div>


            <nav id="nav-menu-container">
                <ul class="nav-menu " >
                    <li><a href="/home">Home</a></li>
                    @auth()
                    <li><a href="/profile/{{auth()->user()->id}}">My Profile</a>
                    <ul>
                        <li><a href="/logout">Logout</a>
                        <li><a href="/profile/{{auth()->user()->id}}/duty">Duty</a>

                    </ul>

                    </li>
                    @endauth
                    @guest()
                        <li ><a href="/login" >Login</a></li>

                    @endguest
                    <li ><a href="/aboutus" >About</a></li>
                    <li><a href="/tracks">Tracks</a></li>
                    <li><a href="/events">Events</a></li>
                    <li class="menu-has-children"><a href="">Blog</a>
                        <ul>
                            <li><a href="/articles">Articles</a></li>
                            @auth
                            <li><a href="/articles/create">Create Article</a></li>
                            @endauth
                            <li><a href="/achievements">Achievements</a></li>
                            @auth
                            <li><a href="/achievements/create">Post an Achievement</a></li>
                            @endauth
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
<script>
    $(document).ready(function () {
        $(".nav-toggler").each(function (_, navToggler) {
            var target = $(navToggler).data("target");
            $(navToggler).on("click", function () {
                $(target).animate({
                    height: "toggle",
                });
            });
        });
    });
</script>
