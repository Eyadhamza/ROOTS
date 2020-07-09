<section id="about" class="about-mf sect-pt4 route">
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="sm:w-full pr-4 pl-4">

                <div class="box-shadow-full">
                    <div class="p-6 " style="font-size: 50px ">
                        @if(isset($title))
                            {{ $title }}
                        @endif
                    </div>
                    <div class="flex flex-wrap ">
                        <div class="md:w-1/2 pr-4 pl-4">
                            <div class="flex flex-wrap ">
                                <div class="sm:w-1/2 pr-4 pl-4 md:w-2/5 pr-4 pl-4">
                                    <div class="about-img">
                                        <img src="{{$user->avatar}}" class="max-w-full h-auto rounded b-shadow-a" alt="">
                                    </div>
                                </div>
                                <div class="sm:w-1/2 pr-4 pl-4 md:w-3/5 pr-4 pl-4">
                                    <div class="about-info">
                                        <p class="m-2 text-blue-800 font-bold">Name: <span class="font-medium text-black">{{$user->name}}</span></p>
                                        <p class="m-2 text-blue-800 font-bold">Committees :<span  class="font-medium text-black"> @foreach($user->committees as $committee )
                                            {{$committee->name}},
                                                                                                                         @endforeach
                                            </span></p>
                                        <p class="m-2 text-blue-800 font-bold">Telegram:  <a
                                                    href="{{$user->telegram_url}}" class="font-medium text-black">{{$user->telegram_url}}</a>
                                        <p class="m-2 text-blue-800 font-bold">Email:  <span  class="font-medium text-black">{{$user->email}}</span></p>
                                        <p class="m-2 text-blue-800 font-bold">Phone:  <span  class="font-medium text-black">{{$user->phone}}</span></p>
                                        @can('edit',$user)
                                            <a href="/profile/{{$user->id}}/edit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 a-btn-slide-text w-3/4">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                <span><strong>Edit</strong></span>
                                            </a>
                                        @endcan

                                    </div>
                                </div>
                            </div>
                            <div class="skill-mf">

                                <p class="title-s">Performance</p>
                                <span>Required Tasks</span> <span class="pull-right">{{$user->tasks_performance}}%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{$user->tasks_performance}}%" aria-valuenow="85" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <span>Knowledge</span> <span class="pull-right">{{$user->knowledge_performance}}%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{$user->knowledge_performance}}%" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <span>Interaction</span> <span class="pull-right">{{$user->interaction_performance}}%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{$user->interaction_performance}}%" aria-valuenow="50" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>
                        <div class="md:w-1/2 pr-4 pl-4">
                            <div class="about-me pt-4 md:pt-0">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        About me
                                    </h5>
                                </div>
                                <p class="text-xl font-light">
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
