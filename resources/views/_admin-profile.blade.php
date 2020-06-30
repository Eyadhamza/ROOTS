
<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="box-shadow-full">
                    <div class="p-4 " style="font-size: 50px ">
                        My Admin Profile
                    </div>
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
                                        <p><span class="title-s">Committee: All Committees </span></p>
                                        <p><span class="title-s">Email: </span> <span>{{$user->email}}</span></p>
                                        <p><span class="title-s">Phone: </span> <span>{{$user->number}}</span></p>
                                        @can('edit',$user)
                                            <a href="/profile/{{$user->id}}/edit" class="btn btn-primary a-btn-slide-text w-75">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                <span><strong>Edit</strong></span>
                                            </a>
                                        @endcan

                                    </div>
                                </div>
                            </div>
                            <div class="skill-mf">

                                <p class="title-s">Performance</p>
                                <span>Required Tasks</span> <span class="pull-right">10000000%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 10000000%" aria-valuenow="85" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <span>Knowledge</span> <span class="pull-right">10000000%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 10000000%" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <span>Interaction</span> <span class="pull-right">10000000%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 10000000%" aria-valuenow="50" aria-valuemin="0"
                                         aria-valuemax="100"></div>
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

<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        My Members
                    </h3>
                    <p class="subtitle-a">
                        This list presents all users whom i supervise as RR
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

    </div>
    @livewire('edit-all')

</section>
