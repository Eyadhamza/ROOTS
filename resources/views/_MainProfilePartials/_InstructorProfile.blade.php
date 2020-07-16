
@include('_MainProfilePartials._profile-info',['title'=>'This is my Instructor Profile'])

<section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container mx-auto sm:px-4">
                <div class="flex flex-wrap ">
                    <div class="sm:w-full pr-4 pl-4">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                My Members
                            </h3>
                            <p class="subtitle-a">
                               I'M AN INSTRUCTOR OF ..
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                {{--                            my members --}}


                @foreach($user->committees as $committee)
                    <div class="p-2 m-4 border-2 border-blue-800 bg-blue-100 rounded-lg">
                        <a href="#" class="p-3 m-2 flex justify-center text-3xl text-blue-900">
                            MY MEMBERS
                        </a>

                        @foreach($committee->users as $user)
                            <a href="/profile/{{$user->id}}" class="p-5 m-2 border-2 border-blue-200 rounded-lg flex justify-center block text-2xl font-bold text-blue-800">{{$user->name}}</a>
                        @endforeach
                    </div>
        @endforeach
