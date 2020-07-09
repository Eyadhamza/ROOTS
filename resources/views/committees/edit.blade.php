<x-app>
    @include('_MainWebsitePartials._header')


    <ul class="flex flex-col pl-0 mb-0 border rounded border-gray-300">
        <li class="relative block py-3 px-6 -mb-px border border-r-0 border-l-0 border-gray-300 no-underline"></li>




    </ul>
    <section class="blog-area section-gap" id="blog">
        <div class="container mx-auto sm:px-4">
            <div class="flex flex-wrap  flex justify-center">
                <div class="menu-content pb-70 lg:w-2/3 pr-4 pl-4">
                    <div class="title text-center">

                        <h1 class="mb-10 text-6xl">{{$committee->name}} members </h1>   <h3>@livewire('search')</h3>
                        @foreach(@$committee->users as $user)
                            <a href="/profile/{{@$user->id}}" class="relative block py-3 px-6 -mb-px border-2 border-blue-300 no-underline w-fill bg-white rounded-lg text-2x">{{@$user->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('edit-committee', ['committee' => $committee])

</x-app>
