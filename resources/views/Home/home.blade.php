<x-app>

    @include('_MainWebsitePartials._header')
    @include('_MainWebsitePartials._banner')
    @include('_MainWebsitePartials._featured')


   @include('_MainWebsitePartials._tracks')
    @include('_MainWebsitePartials._events')
    @include('_MainWebsitePartials._achievements')
    @include('_MainWebsitePartials._articles')
    @include('_MainWebsitePartials._search-tracks')
    @guest
        @include('_MainWebsitePartials._instructors')
    @endguest
</x-app>
