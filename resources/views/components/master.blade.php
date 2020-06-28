<x-app>


        @include('_header')

        @include('_banner')

        @include('_featured')
    {{$slot}}
{{--        @include('_tracks')--}}
        @include('_search-tracks')
        @include('_events')
        @include('_articles')
        @include('_instructors')


</x-app>
