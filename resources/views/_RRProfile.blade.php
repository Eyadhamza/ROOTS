<x-profile :user="$user">
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
</x-profile>
