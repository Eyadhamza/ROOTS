<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="sm:w-full pr-4 pl-4">
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

        <div class="flex flex-wrap ">
            <div class="flex flex-wrap ">
                @foreach($user->articles as $article)
                    <div class="max-w-sm w-full lg:w-full lg:flex m-4 h-75 p-2">
                        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center " style="background-image: url(/../../{{$article->image}})" title="Woman holding a mug">
                        </div>
                        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-8">

                                <a href="../../article/{{$article->id}}"><div class="text-gray-900 font-bold text-xl mb-2">{{$article->title}}</div></a>
                                <p class="text-gray-700 ">{{$article->description}}</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full mr-4" src="{{$user->avatar}}" alt="Avatar of Jonathan Reinink">
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">{{$user->name}}</p>
                                    <p class="text-gray-600">{{$article->updated_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</section>
