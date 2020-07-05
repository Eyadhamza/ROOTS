<x-app>


    @include('_MainWebsitePartials._header')

    @include('_MainWebsitePartials._banner')

    @include('_MainWebsitePartials._featured')
    {{$slot}}
    {{--        @include('_tracks')--}}
    @include('_MainWebsitePartials._search-tracks')
    @include('_MainWebsitePartials._events')
    @include('_MainWebsitePartials._articles')
    @include('_MainWebsitePartials._instructors')


</x-app>
